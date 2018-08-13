<?php require('owner-header.php') ?>

    <div class="container-fluid">
        <div class="shell section section-50 profile">
            <h1 class="text-center">Add a Car</h1>
            <hr class="hr-1">
            <form action="listing.php">
                <h3>Preview Photo(s)</h3>
                <input type="file" name="photos" class="form-input" accept="image/*" multiple="multiple">
                <h3>Car Details</h3>
                <div class="row">
                    <div class="col-md-3 col-6 py-0">
                        <label for="make">Make</label>
                        <input type="text" name="make" class="form-input">
                    </div>
                    <div class="col-md-3 col-6 py-0">
                        <label for="model">Model</label>
                        <input type="text" name="model" class="form-input">
                    </div>
                    <div class="col-md-3 col-6 py-0">
                        <label for="year">Year</label>
                        <input type="text" name="year" class="form-input">
                    </div>
                    <div class="col-md-3 col-6 py-0">
                        <label for="location">Location</label>
                        <input type="text" name="location" class="form-input">
                    </div>
                </div>
                <label for="description">Description</label>
                <textarea name="description" class="form-textarea"></textarea>
                <h3>Features &amp; Amenities</h3>
                <div class="row">
                    <div class="col-md-3 col-6 py-0">
                        <label for="seats">Seats</label>
                        <input type="text" name="seats" class="form-input">
                    </div>
                    <div class="col-md-3 col-6 py-0">
                        <label for="doors">Doors</label>
                        <input type="text" name="doors" class="form-input">
                    </div>
                    <div class="col-md-3 col-6 py-0">
                        <label for="transmission">Transmission</label>
                        <select class="form-select" name="transmission">
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                    <div class="col-md-3 col-6 py-0">
                        <label for="aircon">Air Conditioner</label>
                        <select class="form-select" name="aircon">
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                    <div class="col-md-3 col-6 py-0">
                        <label for="spare-tire">Spare Tire</label>
                        <select class="form-select" name="spare-tire">
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                    <div class="col-md-3 col-6 py-0">
                        <label for="bluetooth">Bluetooth</label>
                        <select class="form-select" name="bluetooth">
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                    <div class="col-md-3 col-6 py-0">
                        <label for="airbags">Curtain Airbags</label>
                        <select class="form-select" name="airbags">
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                    <div class="col-md-3 col-6 py-0">
                        <label for="pet">Pet Friendly</label>
                        <select class="form-select" name="pet">
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                </div>
                <div class="text-center add-car-btns">
                    <a href="listing.php" class="btn btn-gray mb-0">Cancel</a><button type="submit" class="btn btn-1 mb-0">Save</button>
                </div>
            </form>
        </div>
</div>

<?php require('footer.php') ?>
    