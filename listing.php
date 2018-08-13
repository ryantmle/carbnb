<?php require('owner-header.php') ?>

<?php
    $searchText = "";
    if (isset($_GET['submit'])) {
        $searchText = $_GET['searchText'];
    }
    
?>
    <div class="container-fluid">
        <div class="shell section">
            <div class="section-50">
                <div class="row">
                    <div class="col-md-3 list-1 search-filters">
                        <h5>Search</h5>
                            <form action="listing.php" class="car-search-listing">
                                <input type="text" class="form-input" name="searchText" placeholder="I'm searching for..." value="<?php echo $searchText; ?>">
                                <button type="submit" class="btn btn-1 no-margin"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        <h5 class="no-margin">
                            <a data-toggle="collapse" href="#filters" role="button" aria-expanded="false" aria-controls="filters" class="show-filters">
                                <span class="text-1"><i class="fa fa-bars" aria-hidden="true"></i></span> &nbsp;Filters
                            </a>
                        </h5>
                        
                        <div class="collapse show" id="filters">
                            <div class="row">
                                <div class="col-md-12 col-sm-4 col-6">
                                    <h5>Status</h5>
                                    <ul>
                                        <li><a href="#">Available <span class="small text-1">(4)</span></a></li>
                                        <li><a href="#">Rented <span class="small text-1">(14)</span></a></li>
                                    </ul>
                                </div>
                                <div class="col-md-12 col-sm-4 col-6">
                                    <h5>Price</h5>
                                    <ul>
                                        <li><a href="#">Under $150 per day <span class="small text-1">(4)</span></a></li>
                                        <li><a href="#">$150 - $250 per day <span class="small text-1">(14)</span></a></li>
                                        <li><a href="#">Over $250 per day <span class="small text-1">(12)</span></a></li>
                                    </ul>
                                </div>
                                <div class="col-md-12 col-sm-4 col-6">
                                    <h5>Categories</h5>
                                    <ul>
                                        <li><a href="#">Sports Cars <span class="small text-1">(4)</span></a></li>
                                        <li><a href="#">Sedans <span class="small text-1">(14)</span></a></li>
                                    </ul>
                                </div>
                                <div class="col-md-12 col-sm-4 col-6">
                                    <h5>Makes</h5>
                                    <ul>
                                        <li><a href="#">Audi <span class="small text-1">(4)</span></a></li>
                                        <li><a href="#">BMW <span class="small text-1">(14)</span></a></li>
                                        <li><a href="#">Mercedes Benz <span class="small text-1">(12)</span></a></li>
                                        <li><a href="#">Toyota <span class="small text-1">(3)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-6">
                                <p class="num-results">Your Listing <span class="text-1">(8)</span></p>
                            </div>
                            <div class="col-6 text-right">
                                <select class="form-select sort-results">
                                    <option>Status</option>
                                    <option>Rating</option>
                                    <option>Price High to Low</option>
                                    <option>Price Low to High</option>
                                    <option>A-Z</option>
                                    <option>Z-A</option>
                                </select>
                                <a href="add-car.php" class="btn btn-1"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="row results">
                            <div class="col-lg-4 col-sm-6 result show">
                                <div class="car">
                                    <a href="edit-car.php" class="car-img">
                                        <img src="images/cars/car-1.jpg">
                                        <span class="car-status car-status-1">Rented</span>
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
                            <div class="col-lg-4 col-sm-6 result show">
                                <div class="car">
                                    <a href="edit-car.php" class="car-img">
                                        <img src="images/cars/car-2.jpg">
                                        <span class="car-status car-status-1">Rented</span>
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
                            <div class="col-lg-4 col-sm-6 result show">
                                <div class="car">
                                    <a href="edit-car.php" class="car-img">
                                        <img src="images/cars/car-3.jpg">
                                        <span class="car-status car-status-1">Rented</span>
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
                            <div class="col-lg-4 col-sm-6 result show">
                                <div class="car">
                                    <a href="edit-car.php" class="car-img">
                                        <img src="images/cars/car-4.jpg">
                                        <span class="car-status car-status-1">Rented</span>
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
                            <div class="col-lg-4 col-sm-6 result show">
                                <div class="car">
                                    <a href="edit-car.php" class="car-img">
                                        <img src="images/cars/car-4.jpg">
                                        <span class="car-status car-status-2">Available</span>
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
                            <div class="col-lg-4 col-sm-6 result show">
                                <div class="car">
                                    <a href="edit-car.php" class="car-img">
                                        <img src="images/cars/car-4.jpg">
                                        <span class="car-status car-status-2">Available</span>
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
                            <div class="col-lg-4 col-sm-6 result">
                                <div class="car">
                                    <a href="edit-car.php" class="car-img">
                                        <img src="images/cars/car-4.jpg">
                                        <span class="car-status car-status-2">Available</span>
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
                            <div class="col-lg-4 col-sm-6 result">
                                <div class="car">
                                    <a href="edit-car.php" class="car-img">
                                        <img src="images/cars/car-4.jpg">
                                        <span class="car-status car-status-2">Available</span>
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
                        <button class="view-results text-1">View More  &nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require('footer.php') ?>
    