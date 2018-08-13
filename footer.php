    <footer class="bg-black text-white">
        <div class="shell section section-20">
            <div class="row list-1-small">
                <div class="col-sm-3 col-6">
                    <h5>Carbnb</h5>
                    <ul class="small">
                        <li><a href="#">About Carbnb</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 col-6">
                    <h5>Support</h5>
                    <ul class="small">
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Sitemap</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 col-6">
                    <h5>Help &amp; Tips</h5>
                    <ul class="small">
                        <li><a href="#">Rent a Car</a></li>
                        <li><a href="#">Become an Owner</a></li>
                        <li><a href="#">Guides</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 col-6">
                    <h5>Legal Bits</h5>
                    
                    <ul class="small">
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="shell section">
            <div class="section-15 copyright">
                <div class="row">
                    <div class="col-sm-8">
                        <small class="no-margin">Copyright © 2018 Carbnb. All Rights Reserved.</small>
                    </div>
                    <div class="col-sm-4 social-media">
                        <small class="no-margin">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="log-in" id="loginWindow">
        <div class="log-in-inner animated-short fadeInUp">
            <small class="text-right no-margin">
                <a class="close-log-in"><i class="fa fa-times" aria-hidden="true"></i></a>
            </small>
            
            <a class="btn btn-1 btn-full-width facebook-log-in-click"><span class="text-white">Log In with Facebook</span></a>
            <div class="or"><span class="text-center">or</span></div>
            <form>
                <label for="email">Username</label>
                <input type="text" name="Username" class="form-input" id="loginName1">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-input"id="loginPass1">
                <button class="btn btn-1 btn-full-width mb-0" id="login1">Log In</button>
            </form>
            
            <p class="text-center">
                <a class="text-1 forgot-password-click">Forgot Password</a>
            </p>
            <p class="border-top-gray"></p>
            <div class="text-center">
                <div>Don't have an account? <a class="text-1 sign-up-click">Sign Up</a></div>
            </div>
        </div>
        
    </div>
    <div class="forgot-password">
        <div class="forgot-password-inner animated-short fadeInUp">
            <small class="text-right no-margin">
                <a class="close-log-in"><i class="fa fa-times" aria-hidden="true"></i></a>
            </small>
            <form>
                <label for="email">Email</label>
                <input type="text" name="email" class="form-input">
                <button type="submit" class="btn btn-1 btn-full-width mb-0">Recover Password</button>
            </form>
        </div>
    </div>
    <div class="sign-up">
        <div class="sign-up-inner animated-short fadeInUp">
            <small class="text-right no-margin">
                <a class="close-log-in"><i class="fa fa-times" aria-hidden="true"></i></a>
            </small>
            <a class="facebook-sign-up-click btn btn-1 btn-full-width"><span class="text-white">Sign Up with Facebook</span></a>
            <div class="or"><span class="text-center">or</span></div>
            <form>
                <label for="name">Name</label>
                <input type="text" name="name" class="form-input">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-input">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-input">
                <label for="password2">Confirm Password</label>
                <input type="password" name="password2" class="form-input">
                <a class="btn btn-1 btn-full-width mb-0 sign-up-2-click"><span class="text-white">Sign Up</span></a>
            </form>
            <p class="border-top-gray"></p>
            <div class="text-center">
                <div>Already have an account? <a class="text-1 log-in-click">Log In</a></div>
            </div>
        </div>
    </div>
    <div class="sign-up-2">
        <div class="sign-up-2-inner animated-short fadeInUp">
            <small class="text-right no-margin">
                <a class="close-log-in"><i class="fa fa-times" aria-hidden="true"></i></a>
            </small>
            <form>
                <label for="photo">Profile Photo</label>
                <input type="file" name="photo" class="form-input" accept="image/*">
                <div class="row">
                    <div class="col-6 py-0">
                        <label for="dob">Date of Birth</label>
                        <input type="date" name="dob" class="form-input">
                    </div>
                    <div class="col-6 py-0">
                        <label for="phone">Phone Number</label>
                        <input type="text" name="phone" class="form-input">
                    </div>
                </div>
                <label for="address">Address</label>
                <input type="text" name="street" class="form-input">
                <div class="row">
                    <div class="col-6 py-0">
                        <label for="city">City</label>
                        <input type="text" name="city" class="form-input">
                    </div>
                    <div class="col-3 py-0">
                        <label for="state">State</label>
                        <select class="form-select" name="state">
                            <option>NSW</option>
                            <option>VIC</option>
                            <option>QLD</option>
                            <option>WA</option>
                            <option>SA</option>
                            <option>NT</option>
                            <option>TAS</option>
                            <option>ACT</option>
                        </select>
                    </div>
                    <div class="col-3 py-0">
                        <label for="state">Postcode</label>
                        <input type="text" name="postcode" class="form-input">
                    </div>
                </div>
                <label for="description">Description</label>
                <textarea name="description" class="form-textarea"></textarea>
                <button type="submit" class="btn btn-1 btn-full-width mb-0">Start Exploring</button>
            </form>
        </div>
    </div>
    <div class="facebook-log-in">
        <div class="facebook-log-in-inner animated-short fadeInUp">
            <small class="text-right no-margin">
                <a class="close-log-in"><i class="fa fa-times" aria-hidden="true"></i></a>
            </small>
            
            <a class="btn btn-1 btn-full-width log-in-click"><span class="text-white">Log In with Carbnb Account</span></a>
            <div class="or"><span class="text-center">or</span></div>
            <form>
                <label for="email">Email</label>
                <input type="text" name="email" class="form-input" id="email1">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-input"id="loginPass1">
                <button class="btn btn-1 btn-full-width mb-0" id="login1">Log In</button>
            </form>
        </div>
    </div>

    <div class="facebook-sign-up">
        <div class="facebook-sign-up-inner animated-short fadeInUp">
            <small class="text-right no-margin">
                <a class="close-log-in"><i class="fa fa-times" aria-hidden="true"></i></a>
            </small>
            
            <a class="btn btn-1 btn-full-width sign-up-click"><span class="text-white">Sign Up for an Carbnb Account</span></a>
            <div class="or"><span class="text-center">or</span></div>
            <form>
                <label for="email">Email</label>
                <input type="text" name="email" class="form-input" id="email1">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-input"id="loginPass1">
                <button class="btn btn-1 btn-full-width mb-0" id="login1">Sign Up</button>
            </form>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript">
        $(window).resize(function(e){
            if ($(window).width() < 753) {
                $("#filters").removeClass("show");
            }
            else {
                $("#filters").addClass("show");
            }
            e.stopPropagation();
        });
        var numrestemp=0;
          /*var ref = firebase.database().ref();
          console.log(ref);
            ref.on("value", function(snapshot) {
               console.log(snapshot.val());
            }, function (error) {
               console.log("Error: " + error.code);
            });*/
            var loginref = firebase.database().ref("User/");
            var temp = 1;
            loginref.on("child_added", function(data, prevChildKey) {
            var newlogin = data.val();
                //console.log(newlogin);
                var loginnametemp = document.getElementById('loginName1').value;
                //console.log(newlogin.loginnametemp);
               // console.log("name: " + newlogin.firstName + " " + newlogin.lastName);
            });
            var loginref = firebase.database().ref("User/General/");
            var temp = 1;
            loginref.on("child_added", function(data, prevChildKey) {
            var newlogin = data.val();
                //console.log(newlogin);
                //console.log("name: " + newlogin.firstName + " " + newlogin.lastName);
                /*temp += 1;
                document.getElementById(rnametemp).innerHTML=newPlayer.make + " " + newPlayer.model;

                numrestemp = temp;
                numrestemp -= 1;
                console.log(numrestemp + " " + temp);
                document.getElementById('rnumres').innerHTML="(" + numrestemp + ")";
                currentcar = temp;
                console.log(currentcar);
                for(j=1;j<7;j++){
                    var rcartempblock
                    if(currentcar == j){
                        rcartempblock = "rcar" + j + "block";
                    document.getElementById(rcartempblock).style.display = 'none';
                    }
                    if(currentcar == j+1){
                        rcartempblock = "rcar" + j + "block";
                        document.getElementById(rcartempblock).style.display = 'block';
                    }
                }  
                console.log(numrestemp); */
            });
            /*
            console.log("currentcar=" + currentcar);
            console.log(numrestemp);*/
        document.getElementById('login1').onclick = function() {
            var name = document.getElementById('loginName1').value;
            //console.log(name);
            var loginref = firebase.database().ref("User/General");
            var temp = 1;
            loginref.on("child_added", function(data, prevChildKey) {
            var newlogin = data.val();
                //console.log(newlogin);
                var loginnametemp = document.getElementById('loginName1').value;
                var loginpasstemp = document.getElementById('loginPass1').value;
                //console.log(loginnametemp);
                //console.log(newlogin.userName);
                if(loginnametemp == newlogin.userName){
                    console.log(true);
                    if(loginpasstemp == newlogin.password){
                        console.log(true + "logged in");
                        sessionStorage.setItem("currentUser", newlogin.userName);
                        sessionStorage.setItem("currentPassword", newlogin.password);
                        //break;
                        console.log(sessionStorage.getItem("currentUser"));
                        document.getElementById("loginclick").innerHTML = sessionStorage.getItem("currentUser");
                        document.getElementById("logout").style.display = 'block';
                        window.open("http://localhost/carbnb/index.php?","_self");

                    }
                }

               // console.log("name: " + newlogin.firstName + " " + newlogin.lastName);
            });
        }
    </script>
</body>
</html>