<?php require('renter-header.php') ?>
    
    <div class="container-fluid">
        <div class="shell section section-30">
            <div class="row" id="car-details-wrapper">
                <div class="col-lg-9 order-lg-1 order-2">
                    <div class="section-20">
                        <h1>Review Details</h1>
                        <p>Please review the following information before proceeding to your payment.</p>
                        <h3>Terms &amp; Conditions</h3>
                        <ul class="list-1">
                            <li>Car must be return with full tank</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                            <li>Donec eu sapien sed dolor accumsan malesuada blandit ac leo.</li>
                        </ul>
                    </div>
                    
                    <div class="section-20 border-top-gray car-owner">
                        <h3>About the Owner</h3>
                        <div class="car-owner-info">
                            <img src="images/user-1.jpg">
                            <h5>Hoa Dam<small class="text-1 mb-0">Member since Jan 2017</small></h5>
                        </div>
                        
                        <small class="contact">
                            <a href="mailto:hoadam@gmail.com">
                                <i class="fa fa-phone" aria-hidden="true"></i>0123 456 789
                            </a>
                            <br>
                            <a href="tel:0123456789">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>hoadam@gmail.com
                            </a>
                        </small>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu sapien sed dolor accumsan malesuada blandit ac leo. Proin vitae odio libero.</p>
                        <a href="#" class="btn btn-1 mt-0">Send Message</a>
                    </div>
                        
                    <div class="section-20 border-top-gray">
                        <h3>Who's Renting?</h3>
                        <p>Please describe a little bit about yourself to the owner.</p>
                        <textarea name="describe-yourself" class="form-textarea" placeholder="Hi there! I'm looking forward to renting your car!"></textarea>
                    </div>   
                    
                    <div class="section-20 border-top-gray">
                        <h3>Payment</h3>
                        <div class="row">
                        <div class="col-lg-6 col-md-8 py-0">
                            <form>
                                <p>
                                <label class="checkbox-container">Use my stored card
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                </p>
                                <label for="card-number">Card Number</label>
                                <input type="text" name="card-number" class="form-input" value="2134 1234 4321 3214" readonly>
                                <label for="card-name">Name on Card</label>
                                <input type="text" name="card-name" class="form-input" value="Ryan Le" readonly>
                                <div class="row">
                                    <div class="col-6 py-0">
                                        <label for="expire-month">Expiration Date</label>
                                        <div class="row">
                                            <div class="col-6 py-0">
                                                <select class="form-select" name="expire-month" disabled>
                                                    <option>Month</option>
                                                    <option>01</option>
                                                    <option selected>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="col-6 py-0">
                                                <select class="form-select" name="expire-year" disabled>
                                                    <option>Year</option>
                                                    <option>2018</option>
                                                    <option>2019</option>
                                                    <option>2020</option>
                                                    <option>2021</option>
                                                    <option>2022</option>
                                                    <option>2023</option>
                                                    <option>2024</option>
                                                    <option>2025</option>
                                                    <option>2026</option>
                                                    <option>2027</option>
                                                    <option>2028</option>
                                                    <option>2029</option>
                                                    <option>2030</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 py-0">
                                        <label for="security-code">Security Code</label>
                                        <input type="text" name="security-code" class="form-input">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-1 mb-0">Confirm &amp; Pay</button>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-2 order-1">
                    <div class="section-50 section-rent-form">
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
                                            <i class="fa fa-star" aria-hidden="true"></i>
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
                            
                            <p class="font-weight-bold mb-0">Total (GST included) <span class="float-right">$534</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="scroller-anchor-2"></div>
    </div>

<?php require('footer.php') ?>
    