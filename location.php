<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Landscape Romania </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/home.css" rel="stylesheet" type="text/css" />
    <meta charset="UTF-8" />
    <link href="css/login.css" rel="stylesheet" type="text/css" />
    <link href="css/acordeon.css" rel="stylesheet" type="text/css" />
    <script src="javascript/jquery.js"></script>
    <script src ="javascript/register_actions.js"></script>
    <script src ="javascript/login_actions.js"></script>

    <style>
      #map {
        width: 100%;
        height: 400px;
        background-color: grey;
      }
    </style>

</head>

<body>
<?php
// Initialize the session
session_start();
    include 'header.php';
?>
    <div class="continut">
        <div class="navigation_bar">
                <div class="bar_navigation"></div>
                <?php
            if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                 include 'login_user/navigation_bar_user.php'; 
            }else{
             include 'navigation_bar.php';
                }
?>

        </div>
        <div class="container">
                <div class="bar_container"></div>
            <h1>Location</h1>

            
            <div id="map"></div>
            <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: 44.319202, lng: 23.800701};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmFgswfMrDFh0vkoVe9O9C-m-3xS8DY-Q&callback=initMap">
    </script>

            <div class="footer">
                    <p>Ultima editare a paginii a fost efectuată la 08 decembrie 2018, ora 16:53.</p>
                </div>
        </div>
    </div>

</body>

</html>