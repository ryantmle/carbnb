<?php require('renter-header.php') ?>

    <div class="container-fluid">
        <div class="shell section section-50 profile">
            <div class="row">
                <div class="col-md-3 settings list-1">
                    <ul>
                        <li><a href="profile.php" class="active">Profile</a></li>
                        <li><a href="profile-change-password.php">Change Password</a></li>
                        <li><a href="profile-notifications.php">Notifications</a></li>
                        <li><a href="profile-payment.php">Payment</a></li>
                        <li><a href="profile-bank-account.php">Bank Account</a></li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <h3 class="">Profile Details</h3>
                    <div class="row">
                        <div class="col-lg-12 py-0">
                            <form>
                                <div class="profile-photo">
                                    <img src="images/user-1.jpg">
                                </div>
                                <label for="photo">Profile Photo</label>
                                <input type="file" name="photo" class="form-input" accept="image/*">
                                <div class="row">
                                    <div class="col-sm-6 py-0">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-input" id="namefieldprof">
                                    </div>
                                    <div class="col-sm-6 py-0">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-input" readonly id="emailfieldprof">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 py-0">
                                        <label for="age">Age</label>
                                        <input type="Number" name="dob" class="form-input" id="agefieldprof">
                                    </div>
                                    <div class="col-sm-6 py-0">
                                        <label for="licence">Licence</label>
                                        <input type="text" name="licence" class="form-input" id="licfieldprof">
                                    </div>
                                </div>
                                <label for="address">Address</label>
                                <input type="text" name="street" class="form-input" id="addressfieldprof">
                                <div class="row">
                                    <div class="col-6 py-0">
                                        <label for="city">City</label>
                                        <input type="text" name="city" class="form-input" id="cityfieldprof">
                                    </div>
                                   
                                </div>
                                <label for="description">Description</label>
                                <textarea name="description" class="form-textarea">I'm from Wollongong!</textarea>
                                <button type="submit" class="btn btn-1 mb-0">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
    var profileref = firebase.database().ref("User/General/");
            var temp = 1;
            var calltemp = temp;
            profileref.on("child_added", function(data, prevChildKey) {
            var newprof = data.val();
                var pname = newprof.firstName + " " + newprof.lastName;
                var pemail = newprof.email;
                var page = newprof.age;
                var plic = newprof.license;
                var paddr = newprof.address;
                var pcity = newprof.location;
                console.log("name: " + newprof.userName);
                if(newprof.userName == sessionStorage.getItem("currentUser")){
                    document.getElementById("namefieldprof").value = pname;
                    document.getElementById("emailfieldprof").value = pemail;
                    document.getElementById("agefieldprof").value = page;
                    document.getElementById("licfieldprof").value = plic;
                    document.getElementById("addressfieldprof").value = paddr;
                    document.getElementById("cityfieldprof").value = pcity;
                }
            });
                /*
                if(temp < calltemp + 6){
                    var rnametemp = "rcar" + temp + "name";
                    var rlnametemp = "rcar" + temp + "loc";
                    var rpricetemp = "rcarprice" + temp;
                    var rseatstemp = "rcarseats" + temp;
                    document.getElementById(rnametemp).innerHTML=newPlayer.make + " " + newPlayer.model;
                    document.getElementById(rlnametemp).innerHTML=newPlayer.location;
                    document.getElementById(rpricetemp).innerHTML="$" + newPlayer.price;
                    document.getElementById(rseatstemp).innerHTML=newPlayer.seats + " Seats";
                }

                temp += 1;
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
document.getElementById('login1').onclick = function() {
            var name = document.getElementById('loginName1').value;
            console.log(name);
            var loginref = firebase.database().ref("User/General");
            var temp = 1;
            loginref.on("child_added", function(data, prevChildKey) {
            var newlogin = data.val();
                console.log(newlogin);
                var loginnametemp = document.getElementById('loginName1').value;
                var loginpasstemp = document.getElementById('loginPass1').value;
                console.log(loginnametemp);
                console.log(newlogin.userName);
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
        }*/
</script>
<?php require('footer.php') ?>
    