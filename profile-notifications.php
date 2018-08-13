<?php require('renter-header.php') ?>

    <div class="container-fluid">
        <div class="shell section section-50 profile">
            <div class="row">
                <div class="col-md-3 settings list-1">
                    <ul>
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="profile-change-password.php">Change Password</a></li>
                        <li><a href="profile-notifications.php" class="active">Notifications</a></li>
                        <li><a href="profile-payment.php">Payment</a></li>
                        <li><a href="profile-bank-account.php">Bank Account</a></li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <h3 class="">Notifications Setting</h3>
                    <div class="row">
                        <div class="col-lg-6 col-md-8 py-0">
                            <form>
                                <p>
                                    <label class="checkbox-container">Push Notifications
                                        <input type="checkbox" checked="checked" name="noti-push">
                                        <span class="checkmark"></span>
                                    </label>
                                </p>
                                <p>
                                    <label class="checkbox-container">Emails
                                        <input type="checkbox" checked="checked" name="noti-emails">
                                        <span class="checkmark"></span>
                                    </label>
                                </p>
                                <p>
                                    <label class="checkbox-container">Text Messages
                                        <input type="checkbox" checked="checked" name="noti-messages">
                                        <span class="checkmark"></span>
                                    </label>
                                </p>
                                <button type="submit" class="btn btn-1 mb-0">Update</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

<?php require('footer.php') ?>
    