/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


var minZoomLevel = 5;

 var map = new google.maps.Map(document.getElementById('map'), {
     zoom: minZoomLevel,
     center: new google.maps.LatLng(38.50, -90.50),
     mapTypeId: google.maps.MapTypeId.ROADMAP
 });

 // Bounds for North America
 var strictBounds = new google.maps.LatLngBounds(
 new google.maps.LatLng(28.70, -127.50),
 new google.maps.LatLng(48.85, -55.90));

 // Listen for the dragend event
 google.maps.event.addListener(map, 'dragend', function () {
     if (strictBounds.contains(map.getCenter())) return;

     // We're out of bounds - Move the map back within the bounds

     var c = map.getCenter(),
         x = c.lng(),
         y = c.lat(),
         maxX = strictBounds.getNorthEast().lng(),
         maxY = strictBounds.getNorthEast().lat(),
         minX = strictBounds.getSouthWest().lng(),
         minY = strictBounds.getSouthWest().lat();

     if (x < minX) x = minX;
     if (x > maxX) x = maxX;
     if (y < minY) y = minY;
     if (y > maxY) y = maxY;

     map.setCenter(new google.maps.LatLng(y, x));
 });

 // Limit the zoom level
 google.maps.event.addListener(map, 'zoom_changed', function () {
     if (map.getZoom() < minZoomLevel) map.setZoom(minZoomLevel);
 });