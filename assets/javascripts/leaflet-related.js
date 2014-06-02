/**
 * @file
 * Custom scripts for theme.
 */
(function ($) {
    /*** Define some context general variables  ***/
    var markers = {};  // Associative Markers list object
    var markersList = []; // Unassociative Markers ordinated list array
    var features = {};  // Associative Features list object
    var featuresList = [];  // Associative Features ordinated list array
    var thisLeafletSettings ; //The Leaflet map general settings object
    var thisLeafletMap ;  //The Leaflet map object
        //retrieve the Leaflet Markers and Lefalet Features data from the Leaflet (or Leaflet Markeclusterer) module
        $(document).bind('leaflet.feature', function(e, lFeature, feature) {
            // markers[feature.feature_id] = lFeature;
            // features[feature.feature_id] = feature;
            // markersList.push(lFeature);
            // featuresList.push(feature);
            console.log(feature);
        });
        //retrieve the Leaflet map general settings and object itself from the Leaflet (or Leaflet Markeclusterer) module
        $(document).bind('leaflet.map', function(e, settings, lMap) {
            settings.settings.scrollWheelZoom = false;
            settings.settings.maxZoom = "3";
            lMap.options.scrollWheelZoom = false;
            settings.settings.scrollWheelZoom = false;
//            console.log(lMap);
//            console.log(settingsLeaflet);
        });
    // Just once the page is loaded ...
    Drupal.behaviors.my_main_leaflet_map = {
      attach:function (context, settings) {
        $(settings.leaflet).each(function () {
          this.lMap.options.maxZoom = "3";
          this.map.settings.maxZoom = "3";
          this.map.settings.scrollWheelZoom = false;
//        … <em>do whatever want with the leaflet objects (Leaflet APIs … ) and your jQuery events mastering on the DOM elements</em> …
console.log("WHOOW");
          console.log(this);
        });
        
        $(settings).each(function () {
//        … <em>do whatever want with the leaflet objects (Leaflet APIs … ) and your jQuery events mastering on the DOM elements</em> …
console.log("WHOOW");
          console.log(this);
        });
        



      }
    }
})(jQuery);    

    //  markers.on('clusterclick', function (a) {
    //      var children = a.layer.getAllChildMarkers(); 
    //      for (k = 0; k < children.length; k++)     {
    //          content += children[k]._popup._content;
    //      }
    //      this.bindPopup(content).openPopup();
    //      var popup = L.popup()
    //          .setLatLng(a.layer.getLatLng())
    //          .setContent(content)
    //          .openOn(map);
    // }
//  })(jQuery);
