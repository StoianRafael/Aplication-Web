<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Romedic </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/home.css" rel="stylesheet" type="text/css" />
    <meta charset="UTF-8" />
    <link href="css/login.css" rel="stylesheet" type="text/css" />
    <link href="css/acordeon.css" rel="stylesheet" type="text/css" />
    <script src="javascript/jquery.js"></script>
    <script src ="javascript/register_actions.js"></script>
    <script src ="javascript/login_actions.js"></script>

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
            <div class="column_home nature">
                <div class="content_home">
                    <img src="image/arata_img.jpg" alt="arata_img" style="width:100%">
                    <h4>Fără o parte din antebraț, revine în Formula 1 la 8 ani de la groaznicul accident</h4>
                    <p>Una dintre cele mai dramatice povestiri din categoria sporturilor cu motor este,
                     fără îndoială, cea a pilotului polonez Robert Kubica, cel care a fost foarte aproape de moarte în 2011,
                      însă revine pe circuit în 2019 în ciuda faptului că i-a fost ... </p>
                </div>
            </div>
            <div class="column_home nature">
                <div class="content_home">
                    <img src="image/background.jpg" alt="Lights" style="width:100%">
                    <h4>Lights
                    </h4>
                    <p>Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="footer">
                <p>Ultima editare a paginii a fost efectuată la 08 decembrie 2018, ora 16:53.</p>
            </div>
        </div>
    </div>
</body>
</html>