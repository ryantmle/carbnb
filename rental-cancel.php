<?php require('renter-header.php') ?>
    
    <div class="container-fluid">
        <div class="shell section section-50">
            <a href="rentals.php" class="text-1"><i class="fa fa-angle-left" aria-hidden="true"></i>&nbsp; Back to Your Rentals</a>
            <div class="row" id="car-details-wrapper">
                <div class="col-lg-9 order-lg-1 order-2">
                    <h1>Confirm Cancellation</h1>
                    <div class="section-bottom-20">
                        <p>Please review the following information before proceeding to cancel your rental.</p>
                        <h3>Cancellation Policy</h3>
                        <ul class="list-1">
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                            <li>Donec eu sapien sed dolor accumsan malesuada blandit ac leo.</li>
                        </ul>
                    </div>
                    
                    <div class="section-20 border-top-gray car-owner">
                        <h3>Your Message to the Owner</h3>
                        <div class="car-owner-info">
                            <img src="images/user-1.jpg">
                            <h5>Hoa Dam<small class="text-1 mb-0">Member since Jan 2017</small></h5>
                        </div>
                        <form>
                            <label for="reason">Why do you need to cancel?</label>
                            <input type="text" class="form-input">
                            <label for="message">Your message to the owner</label>
                            <textarea name="describe-yourself" class="form-textarea" placeholder="I'm so sorry that I cannot proceed with this rental!"></textarea>
                        </form>
                    </div>
                    
                    <div class="section-20 border-top-gray">
                        <h3>Refund</h3>
                        <div class="row">
                        <div class="col-lg-6 col-md-8 py-0">
                            <form>
                                <p>
                                <label class="checkbox-container">Use my stored bank account
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                </p>
                                <label for="acc-number">Account Number</label>
                                <input type="text" name="acc-number" class="form-input" value="2189742378">
                                <label for="bsb">BSB</label>
                                <input type="text" name="bsb" class="form-input" value="082886">
                                <label for="acc-name">Account Name</label>
                                <input type="text" name="acc-name" class="form-input" value="Ryan Le">
                                <button type="submit" class="btn btn-1 mb-0">Confirm &amp; Cancel</button>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-2 order-1">
                    <div class="section-20 section-rent-form">
                        <div id="scroller-anchor"></div> 
                        <div id="rent-form-2">
                            <div class="rent-form-inner animated-short fadeInUp">
                                <div class="text-center">
                                    <a class="text-1 hide-rent-form">View Less &nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div style="clear:both"></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-6 py-0">
                                        <div class="rent-form-img">
                                            <img src="images/cars/car-1.jpg">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-6 py-0">
                                        <h5 style="margin-bottom: 5px">Toyota Camry</h5>
                                        <div class="small car-rating text-1">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>         
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        </div>
                                        <hr>
                                        <p class="font-weight-bold" style="margin-bottom: 5px">Pick-up Location</p>
                                        <div>Chicago, Illinois</div>
                                        <hr>
                                        <p class="font-weight-bold" style="margin-bottom: 5px">Renting Date</p>
                                        <div>21/03/2018 - 23/03/2018</div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="text-center">
                                <a class="text-1 view-rent-form">View Details &nbsp;<i class="fa fa-angle-up" aria-hidden="true"></i></a>
                                <div style="clear:both"></div>
                            </div>
                            
                            <p class="font-weight-bold mb-0">Amount Paid <span class="float-right">$534</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="scroller-anchor-2"></div>
    </div>

<?php require('footer.php') ?>
    