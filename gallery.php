<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Romedic </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/home.css" rel="stylesheet" type="text/css" />
    <link href="css/gallery_image.css" rel="stylesheet" type="text/css" />
    <meta charset="UTF-8" />
    <link href="css/login.css" rel="stylesheet" type="text/css" />
    <link href="css/acordeon.css" rel="stylesheet" type="text/css" />
    <script src="javascript/jquery.js"></script>
    <script src ="javascript/register_actions.js"></script>
    <script src ="javascript/login_actions.js"></script>
    <link href="css/image_modal.css" rel="stylesheet" type="text/css" />
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
            <h1>Gallery</h1>
            <div id="myBtnContainer">
                <button class="btn active" onclick="filterSelection('all')"> Show all</button>
                <button class="btn" onclick="filterSelection('nature')"> Medical offices</button>
                <button class="btn" onclick="filterSelection('cars')"> Projects</button>
                <button class="btn" onclick="filterSelection('people')"> People</button>
            </div>
            
            <script src="javascript/gallery_album.js"></script>
            
            <!-- Portfolio Gallery Grid -->
            <div class="row">
                <div class="column nature">
                    <div class="content">
                        <img src="image/cab_biochimie.jpg" alt="cab_biochimie" style="width:100%" onclick="onClick(this)"> 
                        <h4>Cabinet Biochimie</h4>
                    </div>
                </div>
                <div class="column nature">
                    <div class="content">
                        <img src="image/cab_microbiologie.jpg" alt="cab_microbiologie" style="width:100%" onclick="onClick(this)">
                        <h4>Cabinet pentru Consultatii ORL</h4>
                    </div>
                </div>
                <div class="column nature">
                    <div class="content">
                        <img src="image/cab_consultatii_orl.jpg" alt="cab_consultatii_orl" style="width:100%" onclick="onClick(this)">
                        <h4>Cabinet Microbiologie</h4>
                    </div>
                </div>

                <div class="column cars">
                    <div class="content">
                        <img src="image/cab_nef_med_interna.jpg" alt="cab_nef_med_interna" style="width:100%" onclick="onClick(this)">
                        <h4>Cabinet NEF Medicina Interna</h4>
                    </div>
                </div>
                <div class="column cars">
                    <div class="content">
                        <img src="image/cab_psihologie.jpg" alt="cab_psihologie" style="width:100%" onclick="onClick(this)">
                        <h4>Cabinet Psihologie</h4>
                    </div>
                </div>
                <div class="column cars">
                    <div class="content">
                        <img src="image/receptie2.jpg" alt="Intrare" style="width:100%" onclick="onClick(this)">
                        <h4>Receptie</h4>
                    </div>
                </div>

                <div class="column people">
                    <div class="content">
                        <img src="image/intrare.jpg" alt="People" style="width:100%" onclick="onClick(this)">
                        <h4>Intrare</h4>
                    </div>
                </div>
                <div class="column people">
                    <div class="content">
                        <img src="image/1867.jpg" alt="People" style="width:100%" onclick="onClick(this)">
                        <h4>Laborator</h4>
                    </div>
                </div>
                <div class="column people">
                    <div class="content">
                        <img src="image/cabinet_medical.jpg" alt="People" style="width:100%" onclick="onClick(this)">
                        <h4>Laborator</h4>
                    </div>
                </div>
               
                <!-- END GRID -->
                <!-- The Modal -->
                    <div id="myModal" class="modal">
                        <span class="close">&times;</span>
                        <img class="modal-content" id="img01">
                         <div id="caption"></div>
                    </div>
                   
            
            </div>
            <div class="footer">
                    <p>Ultima editare a paginii a fost efectuată la 08 decembrie 2018, ora 16:53.</p>
                </div>
        </div>
        
    </div>
 <script src="javascript/image_modal.js"></script>
</body>

</html>