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
        
    case '/carbnb/profile-bank-account.php':
        $title= 'Bank Account';
        $description = 'Bank Account';
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

    <script src="https://www.gstatic.com/firebasejs/4.13.0/firebase.js"></script>
            <script>
              // Initialize Firebase
              var config = {
                apiKey: "AIzaSyBQ-qAQRUls5Dw1sYo5CAg3axQB0TmT0dE",
                authDomain: "carbnb-csit314gp.firebaseapp.com",
                databaseURL: "https://carbnb-csit314gp.firebaseio.com",
                projectId: "carbnb-csit314gp",
                storageBucket: "carbnb-csit314gp.appspot.com",
                messagingSenderId: "331470355447"
              };
              firebase.initializeApp(config);
              firebase.auth().signInAnonymously();
              

            </script>
            <script src="https://www.gstatic.com/firebasejs/4.13.0/firebase-app.js"></script>
            <script src="https://www.gstatic.com/firebasejs/4.13.0/firebase-auth.js"></script>
            <script src="https://www.gstatic.com/firebasejs/4.13.0/firebase-database.js"></script>
            <script src="https://www.gstatic.com/firebasejs/4.13.0/firebase-firestore.js"></script>
            <script src="https://www.gstatic.com/firebasejs/4.13.0/firebase-messaging.js"></script>
            <script src="https://www.gstatic.com/firebasejs/4.13.0/firebase-functions.js"></script>
    </head>

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
                        <a class="nav-link" href="rentals.php">Rental</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="messages.php">Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="help.php">Help</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link log-in-click"  id="loginclickprof">Log In</a>
                    </li>
                    <li class="nav-item" id="profileprof">
                        <a class="nav-link" id="profbutprof"></a>
                    </li>
                    <li class="nav-item" id="logoutprof">
                        <a class="nav-link" id="logoutbutprof">log out</a>
                </ul>
            </div>
        </div>
    </nav>

    <script>
    if(sessionStorage.getItem("currentUser")!= "null"){
        document.getElementById("profbutprof").innerHTML = sessionStorage.getItem("currentUser");
        document.getElementById("logoutprof").style.display = 'block';
        document.getElementById("loginclickprof").style.display = 'none';
        firebase.initializeApp(config);
        firebase.auth().signInAnonymously();
    } else {
        document.getElementById("logoutprof").style.display = 'none';
        firebase.initializeApp(config);
          firebase.auth().signInAnonymously();
    }
    document.getElementById("profbutprof").onclick = function() {
        window.open("http://localhost/carbnb/profile.php?","_self");
    }
    document.getElementById("logoutbutprof").onclick = function() {
        sessionStorage.setItem("currentUser", null);
        sessionStorage.setItem("currentPassword", null);
        window.open("http://localhost/carbnb/index.php?","_self");

    }
</script>