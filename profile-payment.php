<?php require('renter-header.php') ?>

    <div class="container-fluid">
        <div class="shell section section-50 profile">
            <div class="row">
                <div class="col-md-3 settings list-1">
                    <ul>
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="profile-change-password.php">Change Password</a></li>
                        <li><a href="profile-notifications.php">Notifications</a></li>
                        <li><a href="profile-payment.php" class="active">Payment</a></li>
                        <li><a href="profile-bank-account.php">Bank Account</a></li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <h3 class="">Payment Method</h3>
                    <div class="row">
                        <div class="col-lg-6 col-md-8 py-0">
                            <form>
                                <label for="card-number">Card Number</label>
                                <input type="text" name="card-number" class="form-input" id="cardnumber">
                                <label for="card-name">Name on Card</label>
                                <input type="text" name="card-name" class="form-input" id="cardname">
                                <div class="row">
                                    <div class="col-6 py-0">
                                        <label for="expire-month">Expiration Date</label>
                                         <input type="text" name="card-exp" class="form-input" id="cardexp">
                                        
                                    </div>
                                    <div class="col-6 py-0">
                                        <label for="security-code">Security Code</label>
                                        <input type="text" name="security-code" class="form-input" id="cardcvv">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-1 mb-0">Update</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

<?php require('footer.php') ?>
<script>
var profileref = firebase.database().ref("User/General/");
var temp = 1;
var calltemp = temp;
profileref.on("child_added", function(data, prevChildKey) {
    var newprof = data.val();
    var pname = newprof.firstName + " " + newprof.lastName;
    console.log("name: " + pname);
    if(newprof.userName == sessionStorage.getItem("currentUser")){
        sessionStorage.setItem("profname", pname);
    }
});
var payref = firebase.database().ref("paymentDetails/");
var temp = 1;
var calltemp = temp;
payref.on("child_added", function(data, prevChildKey) {
    var newpay = data.val();
    var payname = newpay.cardName;
    var paycard = newpay.cardNumber;
    var paycvv = newpay.cvv;
    var payexp = newpay.expiry;
    console.log("name: " + payname);
    if(payname == sessionStorage.getItem("profname")){
        document.getElementById("cardname").value = payname;
        document.getElementById("cardnumber").value = paycard;
        document.getElementById("cardexp").value = payexp;
        document.getElementById("cardcvv").value = paycvv;
    }
});
</script>