<?php require('header.php') ?>

<?php
    $searchText = $pickUpLocation = $pickUpDate = $returnDate = "";
    if (isset($_GET['submit'])) {
        $searchText = $_GET['searchText'];
        $pickUpLocation = $_GET['pickUpLocation'];
        $pickUpDate = $_GET['pickUpDate'];
        $returnDate = $_GET['returnDate'];
    }
    
?>
    
    <div class="container-fluid">
        <div class="inner-banner bg-banner-1">
            <div class="shell section text-white">
                <form class="car-search" action="results.php">
                    <div class="row no-margin">
                        <div class="col-md-4 col-sm-6 pl-0 pr-0">
                            <input type="text" class="form-input" name="searchText" placeholder="I'm looking for..." value="<?php echo $searchText; ?>">
                        </div>
                        <div class="col-md-3 col-sm-6 pl-0 pr-0">
                            <input type="text" class="form-input" name="pickUpLocation" placeholder="Pick-up location" value="<?php echo $pickUpLocation; ?>">
                        </div>
                        <div class="col-md-2 col-6 pl-0 pr-0">
                            <input placeholder="Pick-up date" class="form-input" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="pickUpDate" value="<?php echo $pickUpDate; ?>">
                        </div>
                        <div class="col-md-2 col-6 pl-0 pr-0">
                            <input placeholder="Return date" class="form-input" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="returnDate" value="<?php echo $returnDate; ?>">
                        </div>
                        <div class="col-md-1 pl-0 pr-0">
                            <button type="submit" class="btn btn-1 no-margin"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="shell section">
            <div class="section-50 border-top-gray">
                <div class="row">
                    <div class="col-md-3 list-1 search-filters">
                        <h5 class="no-margin">
                            <a data-toggle="collapse" href="#filters" role="button" aria-expanded="false" aria-controls="filters" class="show-filters">
                                <span class="text-1"><i class="fa fa-bars" aria-hidden="true"></i></span> &nbsp;Search Filters
                            </a>
                        </h5>
                        
                        <div class="collapse show" id="filters">
                            <div class="row">
                                <div class="col-md-12 col-sm-4 col-6">
                                    <li><a href="#">All <span class="small text-1" id="rtype1">(0)</span></a></li>
                                    <h5>Price</h5>
                                    <ul>
                                        <li><a href="#">Under $150 per day <span class="small text-1" id="rpricemark1">(1)</span></a></li>
                                        <li><a href="#">$150 - $250 per day <span class="small text-1" id="rpricemark2">(2)</span></a></li>
                                        <li><a href="#">Over $250 per day <span class="small text-1" id="rpricemark3">(3)</span></a></li>
                                    </ul>
                                </div>
                                <div class="col-md-12 col-sm-4 col-6">
                                    <h5>Categories</h5>
                                    <ul>
                                        <li><a href="#">Sports Cars <span class="small text-1" id="rtype1">(1)</span></a></li>
                                        <li><a href="#">Sedans <span class="small text-1" id="rtype2">(2)</span></a></li>
                                        <li><a href="#">Saloons <span class="small text-1" id="rtype3">(3)</span></a></li>
                                        <li><a href="#">minivans <span class="small text-1" id="rtype4">(4)</span></a></li>
                                        <li><a href="#">wagons <span class="small text-1" id="rtype5">(5)</span></a></li>
                                        <li><a href="#">suv <span class="small text-1" id="rtype6">(6)</span></a></li>
                                    </ul>
                                </div>
                                <div class="col-md-12 col-sm-4 col-6">
                                    <h5>Makes</h5>
                                    <ul>
                                        <li><a href="#" id="rmake1">rmake1 <span class="small text-1" id="rmnum1">(1)</span></a></li>
                                        <li><a href="#" id="rmake2">rmake2 <span class="small text-1" id="rmnum2">(2)</span></a></li>
                                        <li><a href="#" id="rmake3">rmake3 <span class="small text-1" id="rmnum3">(3)</span></a></li>
                                        <li><a href="#" id="rmake4">rmake4 <span class="small text-1" id="rmnum4">(4)</span></a></li>
                                        <li><a href="#" id="rmake5">rmake5 <span class="small text-1" id="rmnum5">(5)</span></a></li>
                                        <li><a href="#" id="rmake6">rmake6 <span class="small text-1" id="rmnum6">(6)</span></a></li>
                                        <li><a href="#" id="rmake7">rmake7 <span class="small text-1" id="rmnum7">(7)</span></a></li>
                                        <li><a href="#" id="rmake8">rmake8 <span class="small text-1" id="rmnum8">(8)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-6">
                                <p class="num-results">Results <span class="text-1" id="rnumres">(rnumres)</span></p>
                            </div>
                            <div class="col-6 text-right">
                                <select class="form-select sort-results" id="rrating">
                                    <option>Rating</option>
                                    <option>Price High to Low</option>
                                    <option>Price Low to High</option>
                                    <option>A-Z</option>
                                    <option>Z-A</option>
                                </select>
                            </div>
                        </div>
                        <div class="row results">
                            <div class="col-lg-4 col-sm-6 result show" id="rcar1block">
                                <div class="car">
                                    <a href="details.php" class="car-img">
                                        <img id="rcarimg1" src="images/cars/car-1.jpg">
                                    </a>
                                    <div class="car-info">
                                        <div class="car-info-inner animated-short fadeInDown">
                                            <h5 class="car-title" id="rcar1name">rcar1name</h5>
                                            <div class="row">
                                                <div class="col-8 pt-0 pb-0">
                                                    <small id="rcar1loc">rcar1loc</small>
                                                    <div class="small car-rating text-1" id="rcar1stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <div class="col-4 pt-0 pb-0 text-right">
                                                    <div class="car-price" id="rcarprice1">$1</div>
                                                    <small>per day</small>
                                                </div>
                                            </div>

                                            <button class="small text-black view-details">View Details</button>
                                        </div>

                                        <div class="animated-short fadeInUp car-details">
                                            <div class="row small">
                                                <div class="col-6 pt-0 pb-0">
                                                    <i class="fa fa-users" aria-hidden="true"></i><span id="rcarseats1">4 Seats</span><br/>
                                                    <i class="fa fa-window-restore" aria-hidden="true" id="rcardoors1"></i>4 Doors
                                                </div>
                                                <div class="col-6 pt-0 pb-0">
                                                    <i class="fa fa-snowflake-o" aria-hidden="true"></i><span id="rcarac1">A/C</span><br/>
                                                    <i class="fa fa-suitcase" aria-hidden="true"></i><span id="rcarstorage1">2 Large</span>
                                                </div>
                                            </div>
                                            <button class="small text-1 view-less">View Less</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 result show" id="rcar2block">
                                <div class="car">
                                    <a href="details.php" class="car-img">
                                        <img id="rcarimg2" src="images/cars/car-2.jpg">
                                    </a>
                                    <div class="car-info">
                                        <div class="car-info-inner animated-short fadeInDown">
                                            <h5 class="car-title" id="rcar2name">rcar2</h5>
                                            <div class="row">
                                                <div class="col-8 pt-0 pb-0">
                                                    <small id="rcar2loc">rcar2loc</small>
                                                    <div class="small car-rating text-1" id="rcar2stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <div class="col-4 pt-0 pb-0 text-right">
                                                    <div class="car-price" id="rcarprice2">$2</div>
                                                    <small>per day</small>
                                                </div>
                                            </div>

                                            <button class="small text-black view-details">View Details</button>
                                        </div>
                                        <div class="animated-short fadeInUp car-details">
                                            <div class="row small">
                                                <div class="col-6 pt-0 pb-0">
                                                    <i class="fa fa-users" aria-hidden="true"></i><span id="rcarseats2">4 Seats</span><br/>
                                                    <i class="fa fa-window-restore" aria-hidden="true" id="rcardoors2"></i>4 Doors
                                                </div>
                                                <div class="col-6 pt-0 pb-0">
                                                    <i class="fa fa-snowflake-o" aria-hidden="true"></i><span id="rcarac2">A/C</span><br/>
                                                    <i class="fa fa-suitcase" aria-hidden="true"></i><span id="rcarstorage2">2 Large</span>
                                                </div>
                                            </div>
                                            <button class="small text-1 view-less">View Less</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 result show" id="rcar3block">
                                <div class="car">
                                    <a href="details.php" class="car-img">
                                        <img id="rcarimg3" src="images/cars/car-3.jpg">
                                    </a>
                                    <div class="car-info">
                                        <div class="car-info-inner animated-short fadeInDown">
                                            <h5 class="car-title" id="rcar3name">rcar3</h5>
                                            <div class="row">
                                                <div class="col-8 pt-0 pb-0">
                                                    <small id="rcar3loc">rcar3loc</small>
                                                    <div class="small car-rating text-1" id="rcar3stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <div class="col-4 pt-0 pb-0 text-right">
                                                    <div class="car-price" id="rcarprice3">$3</div>
                                                    <small>per day</small>
                                                </div>
                                            </div>

                                            <button class="small text-black view-details">View Details</button>
                                        </div>
                                        <div class="animated-short fadeInUp car-details">
                                            <div class="row small">
                                                <div class="col-6 pt-0 pb-0">
                                                    <i class="fa fa-users" aria-hidden="true"></i><span id="rcarseats3">4 Seats</span><br/>
                                                    <i class="fa fa-window-restore" aria-hidden="true" id="rcardoors3"></i>4 Doors
                                                </div>
                                                <div class="col-6 pt-0 pb-0">
                                                    <i class="fa fa-snowflake-o" aria-hidden="true"></i><span id="rcarac3">A/C</span><br/>
                                                    <i class="fa fa-suitcase" aria-hidden="true"></i><span id="rcarstorage3">2 Large</span>
                                                </div>
                                            </div>
                                            <button class="small text-1 view-less">View Less</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 result show" id="rcar4block">
                                <div class="car">
                                    <a href="details.php" class="car-img">
                                        <img id="rcarimg4" src="images/cars/car-4.jpg">
                                    </a>
                                    <div class="car-info">
                                        <div class="car-info-inner animated-short fadeInDown">
                                            <h5 class="car-title" id="rcar4name">rcar4</h5>
                                            <div class="row">
                                                <div class="col-8 pt-0 pb-0">
                                                    <small id="rcar4loc">rcar4loc</small>
                                                    <div class="small car-rating text-1" id="rcar4stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <div class="col-4 pt-0 pb-0 text-right">
                                                    <div class="car-price" id="rcarprice4">$4</div>
                                                    <small>per day</small>
                                                </div>
                                            </div>

                                            <button class="small text-black view-details">View Details</button>
                                        </div>
                                        <div class="animated-short fadeInUp car-details">
                                            <div class="row small">
                                                <div class="col-6 pt-0 pb-0">
                                                    <i class="fa fa-users" aria-hidden="true"></i><span id="rcarseats4">4 Seats</span><br/>
                                                    <i class="fa fa-window-restore" aria-hidden="true" id="rcardoors4"></i>4 Doors
                                                </div>
                                                <div class="col-6 pt-0 pb-0">
                                                    <i class="fa fa-snowflake-o" aria-hidden="true"></i><span id="rcarac4">A/C</span><br/>
                                                    <i class="fa fa-suitcase" aria-hidden="true"></i><span id="rcarstorage4">2 Large</span>
                                                </div>
                                            </div>
                                            <button class="small text-1 view-less">View Less</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 result show" id="rcar5block">
                                <div class="car">
                                    <a href="details.php" class="car-img">
                                        <img id="rcarimg5" src="images/cars/car-4.jpg">
                                    </a>
                                    <div class="car-info">
                                        <div class="car-info-inner animated-short fadeInDown">
                                            <h5 class="car-title" id="rcar5name">rcar5</h5>
                                            <div class="row">
                                                <div class="col-8 pt-0 pb-0">
                                                    <small id="rcar5loc">rcar5loc</small>
                                                    <div class="small car-rating text-1" id="rcar5stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <div class="col-4 pt-0 pb-0 text-right">
                                                    <div class="car-price" id="rcarprice5">$5</div>
                                                    <small>per day</small>
                                                </div>
                                            </div>

                                            <button class="small text-black view-details">View Details</button>
                                        </div>
                                        <div class="animated-short fadeInUp car-details">
                                            <div class="row small">
                                                <div class="col-6 pt-0 pb-0">
                                                    <i class="fa fa-users" aria-hidden="true"></i><span id="rcarseats5">4 Seats</span><br/>
                                                    <i class="fa fa-window-restore" aria-hidden="true" id="rcardoors5"></i>4 Doors
                                                </div>
                                                <div class="col-6 pt-0 pb-0">
                                                    <i class="fa fa-snowflake-o" aria-hidden="true"></i><span id="rcarac5">A/C</span><br/>
                                                    <i class="fa fa-suitcase" aria-hidden="true"></i><span id="rcarstorage5">2 Large</span>
                                                </div>
                                            </div>
                                            <button class="small text-1 view-less">View Less</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 result show" id="rcar6block">
                                <div class="car">
                                    <a href="details.php" class="car-img">
                                        <img id="rcarimg6" src="images/cars/car-4.jpg">
                                    </a>
                                    <div class="car-info">
                                        <div class="car-info-inner animated-short fadeInDown">
                                            <h5 class="car-title" id="rcar6name">rcar6</h5>
                                            <div class="row">
                                                <div class="col-8 pt-0 pb-0">
                                                    <small id="rcar6loc">rcar6loc</small>
                                                    <div class="small car-rating text-1" id="rcar6stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <div class="col-4 pt-0 pb-0 text-right">
                                                    <div class="car-price" id="rcarprice6">$6</div>
                                                    <small>per day</small>
                                                </div>
                                            </div>

                                            <button class="small text-black view-details">View Details</button>
                                        </div>
                                        <div class="animated-short fadeInUp car-details">
                                            <div class="row small">
                                                <div class="col-6 pt-0 pb-0">
                                                    <i class="fa fa-users" aria-hidden="true"></i><span id="rcarseats6">4 Seats</span><br/>
                                                    <i class="fa fa-window-restore" aria-hidden="true" id="rcardoors6"></i>4 Doors
                                                </div>
                                                <div class="col-6 pt-0 pb-0">
                                                    <i class="fa fa-snowflake-o" aria-hidden="true"></i><span id="rcarac6">A/C</span><br/>
                                                    <i class="fa fa-suitcase" aria-hidden="true"></i><span id="rcarstorage6">2 Large</span>
                                                </div>
                                            </div>
                                            <button class="small text-1 view-less">View Less</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <button id="rnext6">next 6</button>
                        <div id="tempmodel"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>







/*
    var vehiclelink = new Firebase('https://carbnb-csit314gp.firebaseio.com.Vehicle');
 

 
function refreshUI(list) {
    var lis = '';
    for (var i = 0; i < list.length; i++) {
        lis += '<li data-key="' + list[i].key + '">' + list[i].model + '</li>';
    };
    document.getElementById('tempmodel').innerHTML = lis;
};
 
// this will get fired on inital load as well as when ever there is a change in the data
vehiclelink.on("value", function(snapshot) {
    var data = snapshot.val();
    var list = [];
    for (var key in data) {
        if (data.hasOwnProperty(key)) {
            model = data[key].model ? data[key].model : '';
            if (model.trim().length > 0) {
                list.push({
                    model: model,
                    key: key
                })
            }
        }
    }
    // refresh the UI
    refreshUI(list);
});
*/



    
            var currentcar;

    
        var numrestemp=0;
          /*var ref = firebase.database().ref();
          console.log(ref);
            ref.on("value", function(snapshot) {
               console.log(snapshot.val());
            }, function (error) {
               console.log("Error: " + error.code);
            });*/
            var playersRef = firebase.database().ref("Vehicle/");
            var temp = 1;
            var calltemp = temp;
            playersRef.on("child_added", function(data, prevChildKey) {
            var newPlayer = data.val();

                console.log("make: " + newPlayer.make);
                console.log("model: " + newPlayer.model);
                console.log("year: " + newPlayer.year);
                console.log("airCon: " + newPlayer.airCon);
                console.log("ownerID: " + newPlayer.ownerID);
                console.log("petsAllowed: " + newPlayer.petsAllowed);
                console.log("seats: " + newPlayer.seats);
                console.log("transmission: " + newPlayer.transmission);
                console.log("type: " + newPlayer.type);
                console.log("location: " + newPlayer.location);
                console.log("price: " + newPlayer.price);

                if(temp < calltemp + 6){
                    var rnametemp = "rcar" + temp + "name";
                    var rlnametemp = "rcar" + temp + "loc";
                    var rpricetemp = "rcarprice" + temp;
                    var rseatstemp = "rcarseats" + temp;
                    document.getElementById(rnametemp).innerHTML=newPlayer.make + " " + newPlayer.model;
                    document.getElementById(rlnametemp).innerHTML=newPlayer.location;
                    document.getElementById(rpricetemp).innerHTML="$" + newPlayer.price;
                    document.getElementById(rseatstemp).innerHTML=newPlayer.seats + " Seats";
                }

                temp += 1;
                numrestemp = temp;
                numrestemp -= 1;
                console.log(numrestemp + " " + temp);
                document.getElementById('rnumres').innerHTML="(" + numrestemp + ")";
                currentcar = temp;
                console.log(currentcar);
                for(j=1;j<7;j++){
                    var rcartempblock
                    if(currentcar == j){
                        rcartempblock = "rcar" + j + "block";
                    document.getElementById(rcartempblock).style.display = 'none';
                    }
                    if(currentcar == j+1){
                        rcartempblock = "rcar" + j + "block";
                        document.getElementById(rcartempblock).style.display = 'block';
                    }
                }  
                console.log(numrestemp); 
            });
            console.log("currentcar=" + currentcar);
            console.log(numrestemp);
            document.getElementById('rnext6').onclick = function() {
                temp -=1;
                var calltemp = temp;
                temp = 1;
                console.log(calltemp);
            playersRef.on("child_added", function(data, prevChildKey) {
            var newPlayer = data.val();

                console.log("make: " + newPlayer.make);
                console.log("model: " + newPlayer.model);
                console.log("year: " + newPlayer.year);
                console.log("airCon: " + newPlayer.airCon);
                console.log("ownerID: " + newPlayer.ownerID);
                console.log("petsAllowed: " + newPlayer.petsAllowed);
                console.log("seats: " + newPlayer.seats);
                console.log("transmission: " + newPlayer.transmission);
                console.log("type: " + newPlayer.type);
                console.log("location: " + newPlayer.location);
                console.log("price: " + newPlayer.price);

                if(calltemp <= temp && temp < calltemp + 6){
                    console.log("calltemp then temp" + temp + " " + calltemp);
                    var rnametemp = "rcar" + (temp-calltemp+1) + "name";
                    var rlnametemp = "rcar" + (temp-calltemp+1) + "loc";
                    var rpricetemp = "rcarprice" + (temp-calltemp+1);
                    var rseatstemp = "rcarseats" + (temp-calltemp+1);
                    document.getElementById(rnametemp).innerHTML=newPlayer.make + " " + newPlayer.model;
                    document.getElementById(rlnametemp).innerHTML=newPlayer.location;
                    document.getElementById(rpricetemp).innerHTML="$" + newPlayer.price;
                    document.getElementById(rseatstemp).innerHTML=newPlayer.seats + " Seats";
                }

                temp += 1;
                for(i=6;i>0;i--){
                    var hidetemp = "rcar" + i + "block"
                    var it = i + currentcar -1;
                    console.log(temp + " "+ it);
                    if(it>temp){
                        
                        document.getElementById(hidetemp).style.display = 'none';
                    }else{
                        document.getElementById(hidetemp).style.display = 'block';
                    }


                }
                /*
                numrestemp = temp;
                numrestemp -= 1;
                console.log(numrestemp + " " + temp);
                document.getElementById('rnumres').innerHTML="(" + numrestemp + ")";
                currentcar = temp;
                console.log(currentcar);
                for(j=1;j<7;j++){
                    var rcartempblock
                    if(currentcar == j){
                        rcartempblock = "rcar" + j + "block";
                    document.getElementById(rcartempblock).style.display = 'none';
                    }
                    if(currentcar == j+1){
                        rcartempblock = "rcar" + j + "block";
                        document.getElementById(rcartempblock).style.display = 'block';
                    }
                }  
                console.log(numrestemp); */

            });
            }

            
                
                
    
</script>
<?php require('footer.php') ?>
    