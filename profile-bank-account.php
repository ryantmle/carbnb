<?php require('renter-header.php') ?>

    <div class="container-fluid">
        <div class="shell section section-50 profile">
            <div class="row">
                <div class="col-md-3 settings list-1">
                    <ul>
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="profile-change-password.php">Change Password</a></li>
                        <li><a href="profile-notifications.php">Notifications</a></li>
                        <li><a href="profile-payment.php">Payment</a></li>
                        <li><a href="profile-bank-account.php" class="active">Bank Account</a></li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <h3 class="">Bank Account</h3>
                    <div class="row">
                        <div class="col-lg-6 col-md-8 py-0">
                            <form>
                                <label for="acc-number">Account Number</label>
                                <input type="text" name="acc-number" class="form-input" id="bankfieldnumb">
                                <label for="bsb">BSB</label>
                                <input type="text" name="bsb" class="form-input" id="bankfieldbsb">
                                <label for="acc-name">Account Name</label>
                                <input type="text" name="acc-name" class="form-input" id="bankfieldname">
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
var bankref = firebase.database().ref("BankAccount/");
    bankref.on("child_added", function(data, prevChildKey) {
    var newbank = data.val();
    var bankacc = newbank.accountNumber;
    var bankbsb = newbank.BSB;
    var bankname = newbank.accountName;
    console.log(bankname + " " + sessionStorage.getItem("currentUser"));
    if(bankname == sessionStorage.getItem("currentUser")){
        document.getElementById("bankfieldnumb").value = bankacc;
        document.getElementById("bankfieldname").value = bankname;
        document.getElementById("bankfieldbsb").value = bankbsb;
    }
});
</script>