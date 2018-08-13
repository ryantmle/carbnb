<?php require('renter-header.php') ?>
    
    <div class="container-fluid">
        <div class="shell section section-50">
            <h1 class="text-center">Your Rentals</h1>
            <hr class="hr-1">
            <div class="row mx-0 section-10">
                <div class="col-lg-3 col-md-4 col-sm-5 px-0">
                    <a href="details.php" class="rentals-img">
                        <img src="images/cars/car-1.jpg" id="rentals-img-1">
                    </a>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-7 px-0">
                    <div class="rentals-preview">
                        <a href="rental-details.php">
                            <div class="car-info">
                                <h5><span id="car-name-1">Toyota Camry</span><small class="text-1 mb-0"><span id="car-location-1">Sydney, Australia</span></small></h5>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 py-0">
                                    Pick-up Date: <span id="pick-up-date-1">14/05/2018</span>
                                </div>
                                <div class="col-lg-4 col-md-6 py-0">
                                    Return Date: <span id="return-date-1">19/05/2018</span>
                                </div>
                                <div class="col-lg-4 col-md-6 py-0">
                                    Pick-up Location: <span id="return-date-1">Sydney, Australia</span>
                                </div>
                            </div>
                        </a>
                        <a href="rental-cancel.php" class="btn btn-1 mb-0">Cancel</a>
                    </div>
                </div>
            </div>
            <div class="row mx-0 section-10">
                <div class="col-lg-3 col-md-4 col-sm-5 px-0">
                    <a href="details.php" class="rentals-img">
                        <img src="images/cars/car-2.jpg" id="rentals-img-2">
                    </a>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-7 px-0">
                    <div class="rentals-preview">
                        <a href="rental-details.php">
                            <div class="car-info">
                                <h5><span id="car-name-2">BMW X1</span><small class="text-1 mb-0"><span id="car-location-2">Sydney, Australia</span></small></h5>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 py-0">
                                    Pick-up Date: <span id="pick-up-date-2">04/05/2018</span>
                                </div>
                                <div class="col-lg-4 col-md-6 py-0">
                                    Return Date: <span id="return-date-2">09/05/2018</span>
                                </div>
                                <div class="col-lg-4 col-md-6 py-0">
                                    Pick-up Location: <span id="return-date-2">Sydney, Australia</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require('footer.php') ?>
    