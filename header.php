
    <div class="header">
        <div class="logo">
        <a href="home.php">
            <img class="left" src="image/logo.png" alt=" " width="300px" />
            </a>
        </div>
        <div class="search">
            <div class="search-box">
                <div class="text">
                    <input class="search-txt" type="text" name=" " />
                </div>
                <div class="search-btn">
                    <a href="">
                        <img src="image/musica-searcher.png" alt=" " />
                    </a>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="image image_bulb">
                <img class="jos border_icon" src="image/light-bulb1.png" alt=" " />
            </div>
            <div class="image image_user">
                <img class="jos border_icon" src="image/user.png" alt=" " />
            </div>
            <div class="user">
           <?php
            if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                 include 'login_user/username_connected.php'; 
            }else{
             include 'username_connection.php';
                }
?>
            </div>
        </div>
    </div>
    <script src="javascript/acordeon.js"></script>
