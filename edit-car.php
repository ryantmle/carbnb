<?php require('owner-header.php') ?>

    <div class="container-fluid">
        <div class="shell section section-50 profile">
            <div class="row">
                <div class="col-md-3 settings list-1">
                    <ul>
                        <li><a href="edit-car.php" class="active">Car Details</a></li>
                        <li><a href="edit-car-reviews.php">Rating &amp; Reviews</a></li>
                        <li><a href="listing.php">Back to Your Listing</a></li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <form action="edit-car.php">
                        <h3>Preview Photo(s)</h3>
                        <input type="file" name="photos" class="form-input" accept="image/*" multiple="multiple">
                        <h3>Car Details</h3>
                        <div class="row">
                            <div class="col-md-4 col-6 py-0">
                                <label for="make">Make</label>
                                <input type="text" name="make" class="form-input" value="Toyota">
                            </div>
                            <div class="col-md-4 col-6 py-0">
                                <label for="model">Model</label>
                                <input type="text" name="model" class="form-input" value="Camry">
                            </div>
                            <div class="col-md-4 col-6 py-0">
                                <label for="year">Year</label>
                                <input type="text" name="year" class="form-input" value="2015">
                            </div>
                            <div class="col-md-4 col-6 py-0">
                                <label for="location">Location</label>
                                <input type="text" name="location" class="form-input" value="Chicago, Illinois">
                            </div>
                        </div>
                        <label for="description">Description</label>
                        <textarea name="description" class="form-textarea">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu sapien sed dolor accumsan malesuada blandit ac leo. Proin vitae odio libero.</textarea>
                        <h3>Features &amp; Amenities</h3>
                        <div class="row">
                            <div class="col-md-4 col-6 py-0">
                                <label for="seats">Seats</label>
                                <input type="text" name="seats" class="form-input" value="4">
                            </div>
                            <div class="col-md-4 col-6 py-0">
                                <label for="doors">Doors</label>
                                <input type="text" name="doors" class="form-input" value="4">
                            </div>
                            <div class="col-md-4 col-6 py-0">
                                <label for="transmission">Transmission</label>
                                <select class="form-select" name="transmission">
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-6 py-0">
                                <label for="aircon">Air Conditioner</label>
                                <select class="form-select" name="aircon">
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-6 py-0">
                                <label for="spare-tire">Spare Tire</label>
                                <select class="form-select" name="spare-tire">
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-6 py-0">
                                <label for="bluetooth">Bluetooth</label>
                                <select class="form-select" name="bluetooth">
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-6 py-0">
                                <label for="airbags">Curtain Airbags</label>
                                <select class="form-select" name="airbags">
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-6 py-0">
                                <label for="pet">Pet Friendly</label>
                                <select class="form-select" name="pet">
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-1 mb-0">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php require('footer.php') ?>
    