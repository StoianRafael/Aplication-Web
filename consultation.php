<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Romedic </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/home.css" rel="stylesheet" type="text/css" />
    <meta charset="UTF-8" />
    <link href="css/login.css" rel="stylesheet" type="text/css" />
    <link href="css/acordeon.css" rel="stylesheet" type="text/css" />
    <link href="css/consultation.css" rel="stylesheet" type="text/css" />
    <script src ="javascript/consultation.js"></script>
    <script src="javascript/jquery.js"></script>

</head>

<body>
<?php
session_start();
include 'header.php';
?>

    <div class="continut">
        <div class="navigation_bar">
            <div class="bar_navigation"></div>
            <div class="navigation">
                <form>
                    <input type="button" value="Home" onclick="window.location.href='home.php'" />
                    <input type="button" value="Gallery" onclick="window.location.href='gallery.php'" />
                    <input type="button" value="Social Links" onclick="window.location.href='social_links.php'" />
                    <input type="button" value="Location" onclick="window.location.href='location.php'" />
                    <input type="button" value="Contact" onclick="window.location.href='contact.php'" />
                    <input type="button" value="Consultation" onclick="window.location.href='consultation.php'" />
                    <input type="button" value="Review" onclick="window.location.href='html/review.html'" />
                </form>
            </div>
        </div>
        <div class="container">
            <div class="bar_container"></div>
            <table style="width:100%">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Email</th>
    <th>Phone</td>
    <th>Data</th>
  </tr>
 <?php include 'login_user/consultation_table.php' ?>
  </table>
  <div id="afisare">
  <button  onclick = "show()">Programare</button>
  </div>
  <div id="Programare" style="display:none;">
  <form  id="programare" action="post">
    <div class="column_home">
            <label for="firstname">Firstname:</label>
            <input type="text" name="first_name">
    </div>
    <div class="column_home">
        <label for="lastname">Lastname:</label>
        <input type="text" name="last_name">
    </div>
    <div class="column_home">
        <label for="email">Email:</label>
        <input type="text" name="email">
    </div>
    <div class="column_home">
        <label for="phone">Phone:</label>
        <input type="text" name="phone">
    </div>
    <div class="column_home">
        <label for="Data">Data:</label>
        <input type="date" name="data">
    </div>
    <button type="submit" onclick="programare()">OK</button>
    <button onclick = "hide()">Cancel</button>
    </form>
</div>

<script>
function show() {
  var x = document.getElementById("Programare");
  var y= document.getElementById("afisare");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";   
  }
}
function hide() {
  var x = document.getElementById("Programare");
  if (x.style.display === "block") {
    x.style.display = "none";
  }
}
</script>

            <div class="footer">
                <p>Ultima editare a paginii a fost efectuată la 08 decembrie 2018, ora 16:53.</p>
            </div>
        </div>

    </div>
</body>

</html>