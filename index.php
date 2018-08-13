<?php require('header.php') ?>
    
    <div class="container-fluid">
        <div class="home-banner bg-banner-1">
            <div class="shell section">
                <div class="home-banner-text text-white">
                    <div class="h0">Find a car that suits your needs</div>
                    <form class="car-search" action="results.php">
                        <div class="row no-margin">
                            <div class="col-md-4 col-sm-6 pl-0 pr-0">
                                <input type="text" class="form-input" name="searchText" placeholder="I'm looking for...">
                            </div>
                            <div class="col-md-3 col-sm-6 pl-0 pr-0">
                                <input type="text" class="form-input" name="pickUpLocation" placeholder="Pick-up location">
                            </div>
                            <div class="col-md-2 col-6 pl-0 pr-0">
                                <input placeholder="Pick-up date" class="form-input" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="pickUpDate">
                            </div>
                            <div class="col-md-2 col-6 pl-0 pr-0">
                                <input placeholder="Return date" class="form-input" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="returnDate">
                            </div>
                            <div class="col-md-1 pl-0 pr-0">
                                <button type="submit" class="btn btn-1 no-margin"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="shell section section-50">
            <h3 class="text-center">Featured Categories</h3>
            <hr class="hr-1">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <a href="#" class="category bg-category-1">
                        <div class="category-title">
                            <h5>Sports Cars<span class="small text-1 font-weight-bold"> (25)</span></h5>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="#" class="category bg-category-2">
                        <div class="category-title">
                            <h5>Sedans<span class="small text-1 font-weight-bold"> (82)</span></h5>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="#" class="category bg-category-3">
                        <div class="category-title">
                            <h5>Saloons<span class="small text-1 font-weight-bold"> (64)</span></h5>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="#" class="category bg-category-4">
                        <div class="category-title">
                            <h5>Mini Vans<span class="small text-1 font-weight-bold"> (18)</span></h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="shell section">
            <div class="section-50 border-top-gray">
                <h3 class="text-center">Featured Cars</h3>
                <hr class="hr-1">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="car">
                            <a href="#" class="car-img">
                                <img src="images/cars/car-1.jpg">
                            </a>
                            <div class="car-info">
                                <div class="car-info-inner animated-short fadeInDown">
                                    <h5 class="car-title">Toyota Camry</h5>
                                    <div class="row">
                                        <div class="col-8 pt-0 pb-0">
                                            <small>Chicago, United States</small>
                                            <div class="small car-rating text-1">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="col-4 pt-0 pb-0 text-right">
                                            <div class="car-price">$168</div>
                                            <small>per day</small>
                                        </div>
                                    </div>

                                    <button class="small text-black view-details">View Details</button>
                                </div>

                                <div class="animated-short fadeInUp car-details">
                                    <div class="row small">
                                        <div class="col-6 pt-0 pb-0">
                                            <i class="fa fa-users" aria-hidden="true"></i>4 Seats<br/>
                                            <i class="fa fa-window-restore" aria-hidden="true"></i>4 Doors
                                        </div>
                                        <div class="col-6 pt-0 pb-0">
                                            <i class="fa fa-snowflake-o" aria-hidden="true"></i>A/C<br/>
                                            <i class="fa fa-suitcase" aria-hidden="true"></i>2 Large
                                        </div>
                                    </div>
                                    <button class="small text-1 view-less">View Less</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="car">
                            <a href="#" class="car-img">
                                <img src="images/cars/car-2.jpg">
                            </a>
                            <div class="car-info">
                                <div class="car-info-inner animated-short fadeInDown">
                                    <h5 class="car-title">BMW X1</h5>
                                    <div class="row">
                                        <div class="col-8 pt-0 pb-0">
                                            <small>Melbourne, Australia</small>
                                            <div class="small car-rating text-1">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="col-4 pt-0 pb-0 text-right">
                                            <div class="car-price">$342</div>
                                            <small>per day</small>
                                        </div>
                                    </div>

                                    <button class="small text-black view-details">View Details</button>
                                </div>
                                <div class="animated-short fadeInUp car-details">
                                    <div class="row small">
                                        <div class="col-6 pt-0 pb-0">
                                            <i class="fa fa-users" aria-hidden="true"></i>4 Seats<br/>
                                            <i class="fa fa-window-restore" aria-hidden="true"></i>4 Doors
                                        </div>
                                        <div class="col-6 pt-0 pb-0">
                                            <i class="fa fa-snowflake-o" aria-hidden="true"></i>A/C<br/>
                                            <i class="fa fa-suitcase" aria-hidden="true"></i>2 Large
                                        </div>
                                    </div>
                                    <button class="small text-1 view-less">View Less</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="car">
                            <a href="#" class="car-img">
                                <img src="images/cars/car-3.jpg">
                            </a>
                            <div class="car-info">
                                <div class="car-info-inner animated-short fadeInDown">
                                    <h5 class="car-title">Mercedes Benz A250</h5>
                                    <div class="row">
                                        <div class="col-8 pt-0 pb-0">
                                            <small>Toronto, Canada</small>
                                            <div class="small car-rating text-1">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="col-4 pt-0 pb-0 text-right">
                                            <div class="car-price">$181</div>
                                            <small>per day</small>
                                        </div>
                                    </div>

                                    <button class="small text-black view-details">View Details</button>
                                </div>
                                <div class="animated-short fadeInUp car-details">
                                    <div class="row small">
                                        <div class="col-6 pt-0 pb-0">
                                            <i class="fa fa-users" aria-hidden="true"></i>4 Seats<br/>
                                            <i class="fa fa-window-restore" aria-hidden="true"></i>4 Doors
                                        </div>
                                        <div class="col-6 pt-0 pb-0">
                                            <i class="fa fa-snowflake-o" aria-hidden="true"></i>A/C<br/>
                                            <i class="fa fa-suitcase" aria-hidden="true"></i>2 Large
                                        </div>
                                    </div>
                                    <button class="small text-1 view-less">View Less</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="car">
                            <a href="#" class="car-img">
                                <img src="images/cars/car-4.jpg">
                            </a>
                            <div class="car-info">
                                <div class="car-info-inner animated-short fadeInDown">
                                    <h5 class="car-title">Audi A8</h5>
                                    <div class="row">
                                        <div class="col-8 pt-0 pb-0">
                                            <small>Sydney, Australia</small>
                                            <div class="small car-rating text-1">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="col-4 pt-0 pb-0 text-right">
                                            <div class="car-price">$218</div>
                                            <small>per day</small>
                                        </div>
                                    </div>

                                    <button class="small text-black view-details">View Details</button>
                                </div>
                                <div class="animated-short fadeInUp car-details">
                                    <div class="row small">
                                        <div class="col-6 pt-0 pb-0">
                                            <i class="fa fa-users" aria-hidden="true"></i>4 Seats<br/>
                                            <i class="fa fa-window-restore" aria-hidden="true"></i>4 Doors
                                        </div>
                                        <div class="col-6 pt-0 pb-0">
                                            <i class="fa fa-snowflake-o" aria-hidden="true"></i>A/C<br/>
                                            <i class="fa fa-suitcase" aria-hidden="true"></i>2 Large
                                        </div>
                                    </div>
                                    <button class="small text-1 view-less">View Less</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#" class="text-1 view-all">View All &nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>

<?php require('footer.php') ?>
    