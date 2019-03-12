<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Romedic </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/home.css" rel="stylesheet" type="text/css" />
    <link href="css/social_links.css" rel="stylesheet" type="text/css" />
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <h1>Social Links</h1>
            <a href="https://www.facebook.com/Stoian.Rafael" class="fa fa-facebook"></a>

            <div class="footer">
                    <p>Ultima editare a paginii a fost efectuată la 08 decembrie 2018, ora 16:53.</p>
                </div>
        </div>
    </div>

</body>

</html>