var menuShowingArr = new Array();
var menuShowing = "";
var menuTimer;

var menujQuery = jQuery.noConflict();

// See if an element is already in the Showing array; return true of found
function findElementInShowing(elementToFind)
{
	for (var i = 0 ; i < menuShowingArr.length ; i++)
	{
		if (menuShowingArr[i].get(0) === elementToFind.get(0))
		{
			return true;
		}
	}
	
	return false;
}

// See if two elements are the same; return true if equal
function menuElementsAreSame(firstElement, secondElement)
{
	if (firstElement.get(0) === secondElement.get(0))
	{
		return true;
	} else {
		return false;
	}
}

// See if the first element is a descendant of the second
function menuElementDescendant(childElement, possibleAncestorElement)
{
	if (menujQuery(possibleAncestorElement).has(childElement).length == 1)
	{
		return true;
	} else {
		return false;
	}
}

function fadeInMenu(menuToFadeIn)
{
	clearTimeout(menuTimer);
	
	// Check to see if:
	// 1. We have a menu element showing
	// 2. The visible element is not the same as the element we've been asked to show
	// 3. The element we've been asked to show is not a child of the visible element (a descendant of the visible menu)
	//
	// If these are true, then we're opening a new menu; close the current visible menu as far down as necessary
	
	if (menuShowingArr.length > 0 && !findElementInShowing(menuToFadeIn) && !menuElementDescendant(menuToFadeIn, menuShowingArr[menuShowingArr.length - 1]))
	{
		menujQuery(menuShowingArr[menuShowingArr.length - 1]).hide();
		menuShowingArr.pop();
		
		// Loop through menuShowingArr in reverse order, looking for a parent element; if none found, hide and pop each element
		//
		// numToRemove counts how many we will splice from the end
		// removeFrom notes where we start removing
		var numToRemove = 0;
		var removeFrom = menuShowingArr.length - 1;
		for (var i = menuShowingArr.length - 1; i >= 0 ; i--)
		{
			if (menujQuery(menuShowingArr[i]).has(menuToFadeIn).length == 0)
			{
				// hide the element and update the splice counts
				menujQuery(menuShowingArr[i]).hide();
				numToRemove++;
				removeFrom--;
			} else {
				break;
			}
		}
		
		if (numToRemove > 0)
		{
			menuShowingArr = menuShowingArr.splice(removeFrom, numToRemove);
		}
	}
	
	// Make sure this element isn't already visible
	if (!findElementInShowing(menuToFadeIn))
	{
		menuShowingArr[menuShowingArr.length] = menuToFadeIn;
		menujQuery(menuToFadeIn).fadeIn(300);
	}
}

function fadeOutMenu(menuToFadeOut)
{
	clearTimeout(menuTimer);
	
	menuTimer = setTimeout(function() { doFadeOut(menuToFadeOut) }, 900);
}

function doFadeOut(menuToFadeOut)
{
	menujQuery(menuToFadeOut).fadeOut(300, function() {
		// Traverse menuShowingArr looking for this element; remove it and everything beneath it
		for (var i = 0 ; i < menuShowingArr.length; i++)
		{
			if (menuElementsAreSame(menuShowingArr[i], menuToFadeOut))
			{
				// Before removing elements from the array, make sure they are hidden
				for (var j = menuShowingArr.length - 1 ; j > i ; j--)
				{
					menujQuery(menuShowingArr[j]).hide();
				}
				
				menuShowingArr = menuShowingArr.splice(0, i - 1);
				break;
			}
		}
	});
}

function doHideAll(levelToPreserve)
{
	var rebuiltShowingArr = new Array();
	
	// Fade out the top level of any visible menu and hide any visible sub elements
	if (menuShowingArr.length > 0)
	{
		// Hide all elements except ancestors of this element
		for (var i = 0 ; i < menuShowingArr.length ; i++)
		{
			if (menujQuery(menuShowingArr[i]).has(levelToPreserve).length == 0)
			{
				menujQuery(menuShowingArr[i]).hide();
			} else {
				rebuiltShowingArr[rebuiltShowingArr.length] = menuShowingArr[i];
			}
		}
		
		// Empty the array
		menuShowingArr = rebuiltShowingArr;
	}
}

menujQuery(document).ready(function() {
	menujQuery('ul.mensy-menu > li li').has('ul').prepend("<div class=\"triangle-right\"></div>");
	
	menujQuery('ul.mensy-menu > li').has('ul').each( function() {
		menujQuery('> ul', this).prepend("<div class=\"triangle-up\"></div>");
		menujQuery(this).append("<div class=\"triangle-down\"></div>");
		
		var menuLiWidth = menujQuery(this).width();
		var triangleDownBorderWidth = parseInt(menujQuery('div.triangle-down', this).css('border-top-width'));
		var triangleUpBorderWidth = parseInt(menujQuery('div.triangle-up', this).css('border-bottom-width'));
		
		menujQuery('div.triangle-down', this).css('left', (menuLiWidth / 2) - triangleDownBorderWidth);
		menujQuery('div.triangle-up', this).css('left', ((menuLiWidth / 2) - triangleUpBorderWidth) + 1);
	});
	
	if (menujQuery('ul.mensy-menu > li').has('ul').length > 0)
	{
		menujQuery('ul.mensy-menu > li > a').addClass('hasMenu');
	}
	
	menujQuery('ul.mensy-menu li').has('ul').hover(
		function() {
			fadeInMenu(menujQuery(this).children('ul'));
		},
		function() {
			fadeOutMenu(menujQuery(this).children('ul'));
		}
	);
	
	menujQuery('ul.mensy-menu li').not(':has(ul)').hover(
		function() {
			// Don't fade out any fading elements; prevents a parent element from fading when hovering over its menuless child
			clearTimeout(menuTimer);
			
			doHideAll(this);
		}
	);
	
	menujQuery('ul.mensy-menu li > ul > li:last-child > a').css('border-bottom', 'none');
	
	menujQuery('ul.mensy-menu').append('<div style="clear: both; height: 0px;">&nbsp;</div>');
});