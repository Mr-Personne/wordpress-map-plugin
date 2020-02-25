<?php
/*
  Plugin Name: mes shortcodes
  Description: Plugin fournissant des shortcodes
  Author: sacha
  Version: 1.0.0
 */

//help : https://karac.ch/blog/creer-ses-propres-shortcodes-wordpress

//  function shortcode_bienvenue(){
//      return "<h2>Bienvenue chez blogBreakers !!!! </h2>";
//  }

//  add_shortcode('bienvenue', 'shortcode_bienvenue');


//  function shortcode_bienvenueV2($atts){
//     extract(shortcode_atts(
//         array(
//             'langue' => 'FR'
//         ), $atts
//     ));

//     if ($langue == 'EN') {
//         $text = "Welcome to BlogBreakers !!!";
//     }
//     else{
//         $text = "Bienvenue chez BlogBreakers !!!";
//     }

//     return '<h2>' . $text . '</h2>';
//  }

//  add_shortcode('bienvenueV2', 'shortcode_bienvenueV2');

?>


<!-- section map -->
<!-- https://www.sitepoint.com/mapping-geocoder-php-leaflet-js/ -->
<!-- https://packagist.org/packages/geocoder-php/google-maps-provider -->
<!-- https://leafletjs.com/examples/quick-start/ -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
<style>
    #mapid {
        height: 500px;
    }
</style>
<div id="mapid"></div>

<script>
    let longitude = 6.1518422;
    let latitude = 47.6369051;
    var mymap = L.map('mapid').setView([latitude,  longitude], 15);
    var marker = L.marker([latitude, longitude]).addTo(mymap);
    // marker.bindPopup("<b>Hello world!</b><br>I am a popup.").openPopup();
    // ACCESS_TOKEN = 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
    }).addTo(mymap);
</script>