
    <div class="header">
        <div class="logo_Rafael">
        <a href="home.php">
            <img class="left_Rafael" src="image/logo.png" alt=" " width="300px" />
            </a>
        </div>
        <div class="search_Rafael">
            <div class="search-box_Rafael">
                <div class="text_Rafael">
                    <input class="search-txt_Rafael" type="text" name=" " />
                </div>
                <div class="search-btn_Rafael">
                    <a href="">
                        <img src="image/musica-searcher.png" alt=" " />
                    </a>
                </div>
            </div>
        </div>
        <div class="right_Rafael">
            <div class="image_Rafael image_bulb_Rafael">
                <img class="jos_Rafael border_icon_Rafael" src="image/light-bulb1.png" alt=" " />
            </div>
            <div class="image_Rafael image_user_Rafael">
                <img class="jos_Rafael border_icon_Rafael" src="image/user.png" alt=" " />
            </div>
            <div class="user_Rafael">
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