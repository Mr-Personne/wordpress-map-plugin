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
<?php
// require 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>A simple map with Geocoder PHP and Leaflet.js</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12 page-header">
            <h1 id="header">A simple map with Geocoder PHP and Leaflet.js</h1>
        </div>
        <div class="row-fluid">
            <div class="col-lg-8">

            </div>
        </div>
    </div><!-- /row -->
</div> <!-- /container -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</body>
</html>