module VegetablesHelper
	def select_week(name, value = nil)
		"<select name='vegetable[#{name}]'>
			<option value=''>week</option>
			<option value='1' #{value == 1 ? 'selected' : ''}>First</option>
			<option value='2' #{value == 2 ? 'selected' : ''}>Second</option>
			<option value='3' #{value == 3 ? 'selected' : ''}>Third</option>
			<option value='4' #{value == 4 ? 'selected' : ''}>Fourth</option>
		</select>"
	end
end
