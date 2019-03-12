<div class="acordeon">
                    <button class="accordion">Conectare<i class="fa fa-sort-desc" style="float:right"
                            aria-hidden="true"></i></button>
                    <div class="panel">
                      <button class="connection" onclick="document.getElementById('id01').style.display='block'">Login</button>
                        <div id="id01" class="modal_login">
                          <form class="modal-content_login animate_login" id="login" action="POST">
                            <script src="javascript/login_actions.js"></script>
                            <div class="imgcontainer_login">
                              <span onclick="document.getElementById('id01').style.display='none'" class="close_login" title="Close Modal">&times;</span>
                              <img src="image/user.png" alt="Avatar" class="avatar_login">
                            </div>
                          
                            <div class="container_login">
                              <label for="uname"><b>Username</b></label>
                                <input type="text" placeholder="Enter Username" name="username" />
                          
                                <label for="psw"><b>Password</b></label>
                                <input type="password" placeholder="Enter Password" name="password" />
                                  
                                <button type="submit" onclick = "login()">Login</button>
                              </div>
                          
                              <div class="container_login" style="background-color:#f1f1f1">
                                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn_login">Cancel</button>
                                <span class="psw_login">Forgot <a href="#">password?</a></span>
                              </div>
                            </form>
                          </div>
                          <script>
                                // Get the modal
                                var modal = document.getElementById('id01');
                                
                                // When the user clicks anywhere outside of the modal, close it
                                window.onclick = function(event) {
                                    if (event.target == modal) {
                                        modal.style.display = "none";
                                    }
                                }
                                </script>
                        <button class="connection" onclick="document.getElementById('id02').style.display='block'">Register</button>
                        <div id="id02" class="modal_singup">
                            <form class="modal-content_singup animate_login" id="register" action="post">
                              <div class="container_singup">
                                <h1>Sign Up</h1>
                                <p>Please fill in this form to create an account.</p>
                                <span onclick="document.getElementById('id02').style.display='none'" class="close_singup" title="Close Modal">&times;</span>

                                <hr>
                                <label for="email"><b>Username</b></label>
                                <input type="text" placeholder="Enter Email" name="username" >
                        
                                <label for="psw"><b>Password</b></label>
                                <input type="password" placeholder="Enter Password" name="password">
                          
                                <label for="psw-repeat"><b>Repeat Password</b></label>
                                <input type="password" placeholder="Repeat Password" name="confirm_password">
                                
                                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                          
                                <div class="clearfix_singup">
                                  <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn_singup">Cancel</button>
                                  <button type="submit" class="signupbtn_signup" onclick="register()">Sign Up</button>
                                </div>
                              </div>
                            </form>
                          </div>    
                          <script>
                            // Get the modal
                            var modal = document.getElementById('id02');
                            
                            // When the user clicks anywhere outside of the modal, close it
                            window.onclick = function(event) {
                              if (event.target == modal) {
                                modal.style.display = "none";
                              }
                            }
                            </script>
                    </div>
                </div>