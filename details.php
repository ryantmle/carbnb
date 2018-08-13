<?php require('header.php') ?>
    
    <div class="container-fluid">
        
        <div id="car-preview" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#car-preview" data-slide-to="0" class="active"></li>
                <li data-target="#car-preview" data-slide-to="1"></li>
                <li data-target="#car-preview" data-slide-to="2"></li>
                <li data-target="#car-preview" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/cars/car-1.jpg" alt="First Image">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/cars/car-2.jpg" alt="Second Image">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/cars/car-3.jpg" alt="Third Image">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/cars/car-4.jpg" alt="Fourth Image">
                </div>
            </div>
            <a class="carousel-control-prev" href="#car-preview" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#car-preview" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        
        <!--<div class="preview">
            <img id="preview-img" src="images/cars/car-1.jpg" alt="" />
            <div class="thumbnails animated-short fadeInUp">
                <div class="shell section">
                    <div class="row justify-content-center">
                        <div class="col-md-1 col-2">
                            <div class="thumbnail">
                                <img src="images/cars/car-1.jpg" alt="" class="thumbnail-img active"/>
                            </div>
                        </div>
                        <div class="col-md-1 col-2">
                            <div class="thumbnail">
                                <img src="images/cars/car-2.jpg" alt="" class="thumbnail-img"/>
                            </div>
                        </div>
                        <div class="col-md-1 col-2">
                            <div class="thumbnail">
                                <img src="images/cars/car-3.jpg" alt="" class="thumbnail-img"/>
                            </div>
                        </div>
                        <div class="col-md-1 col-2">
                            <div class="thumbnail">
                                <img src="images/cars/car-4.jpg" alt="" class="thumbnail-img"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    
        <div class="shell section section-30">
            <div class="row" id="car-details-wrapper">
                <div class="col-lg-9 order-lg-1 order-2">
                    <div class="section-20">
                        <h1>Toyota Camry</h1>
                        <p class="text-1">Chicago, United States</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu sapien sed dolor accumsan malesuada blandit ac leo. Proin vitae odio libero. Nulla sem felis, pellentesque eget pretium ut, scelerisque sit amet lorem. Cras tincidunt, velit sit amet porta ornare, massa elit fermentum augue, vel convallis felis urna ac ex.</p>
                    </div>
                    
                    <div class="section-20 border-top-gray car-owner">
                        <h3>About the Owner</h3>
                        <div class="car-owner-info">
                            <img src="images/user-1.jpg">
                            <h5>Hoa Dam<small class="text-1 mb-0">Member since Jan 2017</small></h5>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu sapien sed dolor accumsan malesuada blandit ac leo. Proin vitae odio libero.</p>
                        <a href="#" class="btn btn-1 mt-0">Send Message</a>
                    </div>
                        
                    <div class="section-20 border-top-gray features">
                        <h3>Features &amp; Amenities</h3>
                        <ul class="list-1">
                            <div class="row">
                                <div class="col-sm-6 pt-0 pb-0">
                                    <li><span class="feature-label">Date Listed: </span>18/03/2018</li>
                                    <li><span class="feature-label">Last Edited: </span>18/03/2018</li>
                                    <li><span class="feature-label">Make: </span>Hyundai</li>
                                    <li><span class="feature-label">Model: </span>Accent</li>
                                    <li><span class="feature-label">Body Type: </span>Sedan</li>
                                    <li><span class="feature-label">Year: </span>2006</li>
                                    <li><span class="feature-label">Kilometres: </span>166016</li>
                                </div>
                                <div class="col-sm-6 pt-0 pb-0">
                                    <li><span class="feature-label">Transmission: </span>Manual</li>
                                    <li><span class="feature-label">Colour: </span>Silver</li>
                                    <li><span class="feature-label">Air Conditioning: </span>Yes</li>
                                    <li><span class="feature-label">Stock Number: </span>441</li>
                                    <li><span class="feature-label">Registration Number: </span>1CIZ199</li>
                                    <li><span class="feature-label">Seller Licence: </span>DL 25874</li>
                                </div>
                            </div>
                        </ul>
                    </div>   
                    
                    <div class="section-20 border-top-gray reviews">
                        <h3>Reviews (5) &nbsp;
                            <span class="h4 car-rating text-1">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            </span>
                        </h3>
                        <div class="review show">
                            <div class="review-info">
                                <img src="images/user-1.jpg">
                                <div class="review-user-info">
                                    <h5 class="font-weight-bold">Timothy Carroll</h5>
                                    <small class="text-1 no-margin">March 2018</small>
                                </div>
                            </div>
                            
                            <h5 class="car-rating text-1">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </h5>
                    
                            <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu sapien sed dolor accumsan malesuada blandit ac leo. Proin vitae odio libero. Nulla sem felis, pellentesque eget pretium ut, scelerisque sit amet lorem.</small>
                        </div>
                        <div class="review show">
                            <div class="review-info">
                                <img src="images/user-2.jpg">
                                <div class="review-user-info">
                                    <h5 class="font-weight-bold">Lindsay Plat</h5>
                                    <small class="text-1 no-margin">Jan 2018</small>
                                </div>
                            </div>
                            
                            <h5 class="car-rating text-1">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            </h5>
                    
                            <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu sapien sed dolor accumsan malesuada blandit ac leo. Proin vitae odio libero. Nulla sem felis, pellentesque eget pretium ut, scelerisque sit amet lorem.</small>
                        </div>
                        <div class="review">
                            <div class="review-info">
                                <img src="images/user-1.jpg">
                                <div class="review-user-info">
                                    <h5 class="font-weight-bold">Victor Magiros</h5>
                                    <small class="text-1 no-margin">Oct 2017</small>
                                </div>
                            </div>
                            
                            <h5 class="car-rating text-1">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </h5>
                    
                            <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu sapien sed dolor accumsan malesuada blandit ac leo. Proin vitae odio libero. Nulla sem felis, pellentesque eget pretium ut, scelerisque sit amet lorem.</small>
                        </div>
                        <div class="review">
                            <div class="review-info">
                                <img src="images/user-1.jpg">
                                <div class="review-user-info">
                                    <h5 class="font-weight-bold">Barry Wang</h5>
                                    <small class="text-1 no-margin">Sep 2017</small>
                                </div>
                            </div>
                            
                            <h5 class="car-rating text-1">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </h5>
                    
                            <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu sapien sed dolor accumsan malesuada blandit ac leo. Proin vitae odio libero. Nulla sem felis, pellentesque eget pretium ut, scelerisque sit amet lorem.</small>
                        </div>
                        <div class="review">
                            <div class="review-info">
                                <img src="images/user-1.jpg">
                                <div class="review-user-info">
                                    <h5 class="font-weight-bold">Ryan Le</h5>
                                    <small class="text-1 no-margin">May 2017</small>
                                </div>
                            </div>
                            
                            <h5 class="car-rating text-1">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </h5>
                    
                            <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu sapien sed dolor accumsan malesuada blandit ac leo. Proin vitae odio libero. Nulla sem felis, pellentesque eget pretium ut, scelerisque sit amet lorem.</small>
                        </div>
                        <button class="view-reviews text-1">View More  &nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i></button>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-2 order-1">
                    <div class="section-50 section-rent-form">
                        <div id="scroller-anchor"></div> 
                        <form id="rent-form" action="confirmation.php">
                            <div class="rent-form-inner animated-short fadeInUp">
                                <div class="text-center">
                                    <a class="text-1 hide-rent-form">View Less &nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div style="clear:both"></div>
                                </div>
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="col-lg-12 col-sm-4 pt-0 pb-0">
                                        <label for="pickUpLocation">Pick-up Location</label>
                                        <input type="text" class="form-input" name="pickUpLocation" value="Chicago" readonly>
                                    </div>
                                    <div class="col-lg-12 col-sm-4 pt-0 pb-0">
                                        <label for="pickUpDate">Pick-up Date</label>
                                        <input value="2018-03-21" class="form-input" type="date" name="pickUpDate">
                                    </div>
                                    <div class="col-lg-12 col-sm-4 pt-0 pb-0">
                                        <label for="returnDate">Return Date</label>
                                        <input value="2018-03-23" class="form-input" type="date" name="returnDate">
                                    </div>
                                </div>
                                <p>$168 x 3 days <span class="float-right">$504</span></p>
                                <p>Service Fee <span class="float-right">$10</span></p>
                                <p>Basic Insurance <span class="float-right">$30</span></p>
                                <p class="text-1">
                                    <label class="checkbox-container">Accident Insurance
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="float-right">$35</span>
                                </p>
                                <p>GST <span class="float-right">$34</span></p>
                            </div>
                            <div class="text-center">
                                <a class="text-1 view-rent-form">View Details &nbsp;<i class="fa fa-angle-up" aria-hidden="true"></i></a>
                                <div style="clear:both"></div>
                            </div>
                            <p class="font-weight-bold">Total <span class="float-right">$534</span></p>
                            <button type="submit" class="btn btn-1 btn-full-width no-margin">Rent</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="scroller-anchor-2"></div> 
        <div class="shell section">
            <div class="section-50 border-top-gray">
                <h3 class="text-center">Similar Cars</h3>
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
    