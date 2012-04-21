import numpy
from netCDF4 import *
import MySQLdb

def pipeline():
    """
    Pipeline to parse climate data in NetCDF format.
    """
    f = Dataset('/Users/akapadia/Scratch/SpaceApps/data/cru_vap_clim_1991-2000.nc', 'r')
    time = f.variables['time'][:]
    lons = f.variables['longitude'][:]
    lats = f.variables['latitude'][:]
    vap = numpy.array(f.variables['vap'][:])
    units = f.variables['vap'].units
    
    num_of_months = vap.shape[0]
    # for month in xrange(num_of_months):
    #     print vap[month]
        
    JAN = 0
    lon = 11.58
    lat = 48.15
    lonIndex = getGeographicIndex(lon , lons)
    latIndex = getGeographicIndex(lat, lats)

    print vap[0][latIndex][lonIndex], units

def getGeographicIndex(l, arr):
    return int(numpy.floor( (l - arr[0]) / (arr[1] - arr[0]) + 0.5 ))
    
if __name__ == '__main__':
    pipeline()