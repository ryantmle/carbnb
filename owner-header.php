<?php
$page = $_SERVER['PHP_SELF']; 

switch ($page){
    case '/carbnb/index.php':
        $title= 'Home';
        $description = 'Home Description';
        break;

    case '/carbnb/results.php':
        $title= 'Results';
        $description = 'Results Description';
        break;
        
    case '/carbnb/details.php':
        $title= 'Details';
        $description = 'Details Description';
        break;
        
    case '/carbnb/confirmation.php':
        $title= 'Confirmation';
        $description = 'Confirmation Description';
        break;
        
    case '/carbnb/listing.php':
        $title= 'Listing';
        $description = 'Listing Description';
        break; 
        
    case '/carbnb/add-car.php':
        $title= 'Add Car';
        $description = 'Add a Car';
        break; 
        
    case '/carbnb/edit-car.php':
        $title= 'Edit Car';
        $description = 'Edit Your Car';
        break;
        
    case '/carbnb/edit-car-reviews.php':
        $title= 'Car Reviews';
        $description = 'Car Reviews';
        break;
        
    case '/carbnb/messages.php':
        $title= 'Messages';
        $description = 'Messages Description';
        break;
    
    case '/carbnb/profile.php':
        $title= 'Profile';
        $description = 'Profile Description';
        break;
        
    case '/carbnb/profile-change-password.php':
        $title= 'Change Password';
        $description = 'Change Your Password';
        break;
    
    case '/carbnb/profile-payment.php':
        $title= 'Payment';
        $description = 'Payment Method';
        break;
    
    case '/carbnb/profile-notifications.php':
        $title= 'Notifications';
        $description = 'Notifications Setting';
        break;
    
}
?>

<!DOCTYPE>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>Carbnb | <?php echo $title; ?></title>
    <meta type="description" content="<?php echo $description; ?>">
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.css">
</head>
<body>
    <div id="overlay"></div>
    <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-black">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <div><i class="fa fa-car" aria-hidden="true"></i>Carbnb</div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="listing.php">Your Listing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=".php">Rental</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="messages.php">Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="help.php">Help</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>