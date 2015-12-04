(function($) {
  "use strict";

  var currentZip;
  var previousZip;
  var testZip = 60660;

  $(document).ready(function() {
  	  $(document).on('ee:zipCodeQueried', function(evt, data) {
      currentZip = data.zip;
      console.log("current zip is:", currentZip);
      if (currentZip !== '' && currentZip !== previousZip) {
        updateMyEnvMapperLoc(data);
      }
      previousZip = currentZip;
    });
  });

  function updateMyEnvMapperLoc(data) {
    if (currentZip) {
      if (data.latitude > 0 && data.latitude < 90) {
        var zipCentLat = String(data.latitude);
        var zipCentLon = String(data.longitude);
        setiFrameNewURL(zipCentLat, zipCentLon);
      }
    }
  }

  function setiFrameNewURL(zipCentLat, zipCentLon) {
    var iFrameURL = "https://map11.epa.gov/myem/envmapEEP/mainmap.html?pTheme=all&pLayers=afs,triair,triwater,rcra,tsca&ve=11," + zipCentLat + "," + zipCentLon;
    $('#myEnviFrame').attr('src', iFrameURL);
    $('#myEnvMoreInfo').attr('href', 'http://www3.epa.gov/myenv/myenview2.find?zipcode=' + currentZip + '&GO=go');
  }

})(jQuery);