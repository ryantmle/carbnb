<?php require('renter-header.php') ?>

    <div class="container-fluid">
        <div class="shell section section-50 profile">
            <div class="row">
                <div class="col-md-3 settings list-1">
                    <ul>
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="profile-change-password.php" class="active">Change Password</a></li>
                        <li><a href="profile-notifications.php">Notifications</a></li>
                        <li><a href="profile-payment.php">Payment</a></li>
                        <li><a href="profile-bank-account.php">Bank Account</a></li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <h3 class="">Change Your Password</h3>
                    <div class="row">
                        <div class="col-lg-6 col-md-8 py-0">
                            <form>
                                <label for="old-password">Current Password</label>
                                <input type="password" name="old-password" class="form-input">
                                <label for="new-password-1">New Password</label>
                                <input type="password" name="new-password-1" class="form-input">
                                <label for="new-password-2">Confirm New Password</label>
                                <input type="password" name="new-password-2" class="form-input">
                                <button type="submit" class="btn btn-1 mb-0 save-password-click">Update</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

<?php require('footer.php') ?>
    