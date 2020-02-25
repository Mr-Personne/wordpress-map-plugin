<?php
/*
  Plugin Name: mes shortcodes
  Description: Plugin fournissant des shortcodes
  Author: sacha
  Version: 1.0.0
 */

//help : https://karac.ch/blog/creer-ses-propres-shortcodes-wordpress

function shortcode_bienvenue($atts)
{
    extract(shortcode_atts(
        array(
            'lol' => "Il n'y a pas de Message..."
        ),
        $atts
    ));

    // print_r($atts);
    // if ($atts) {
    //     $txt = shortcode_atts([
    //         'lol' => 'LO00000000000L',
    //     ], $atts, $tag);
    // }

    if ($lol !== "Il n'y a pas de Message...") {
        $txt = $lol;
    }
    else{
        $txt = $lol;
    }
    


    return "<h2>Bienvenue chez blogBreakers !!!!" . $txt . " </h2>";
}

add_shortcode('bienvenue', 'shortcode_bienvenue');


function shortcode_blogMap($atts)
{
    extract(shortcode_atts(
        array(
            'longitude' => 6.1518422,
            'latitude' => 47.6369051,
        ),
        $atts
    ));

    if ($longitude !== 6.1518422) {
        $longi = $longitude;
    } else {
        $longi = 6.1518422;
    }

    if ($latitude !== 47.6369051) {
        $lati = $latitude;
    } else {
        $lati = 47.6369051;
    }

    $mapLinks = '<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" /><script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>';
    $mapStyle = '<style>#mapid {height: 200px;}</style>';
    $mapDiv = '<div id="mapid"></div>';
    $mapScript = "<script>
                        let longitude = ".$longi.";
                        let latitude = ".$lati.";
                        var mymap = L.map('mapid').setView([latitude, longitude], 15);
                        var marker = L.marker([latitude, longitude]).addTo(mymap);
                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            maxZoom: 19,
                            attribution: '&copy; <a href=\'https://www.openstreetmap.org/copyright\'>OpenStreetMap</a> contributors'
                        }).addTo(mymap);
                    </script>";
    

    return $mapLinks. $mapStyle . $mapDiv . $mapScript;
}

add_shortcode('blogMap', 'shortcode_blogMap');

?>
