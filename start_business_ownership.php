<div id="second-b" class="business-ownership">
    <h4 class="test-center  p-2 rounded text-dark">Business Ownership</h4>
    <div class="form-group">
        <label for="owner[]"><b>Who Owns Your Business?</b></label>
        <input type="text" class="form-control" name="owner[]" placeholder="owners[0][<?php echo $db_fields_owners['owner_title']['code']; ?>]" id="owner[]">
        <b></b>
    </div>

    <div class="form-group business-owner-fields" data-owner_counter="0">
        <div class="row">
            <div class="col"> <input type="text" class="form-control" name="owners[0][<?php echo $db_fields_owners['owner_title']['code']; ?>]" placeholder="Title" id="title[]">
            </div>
            <div class="col"><input type="text" class="form-control" name="owners[0][<?php echo $db_fields_owners['owner_percent']['code']; ?>]" placeholder="Owner %" id="owner_percentage[]"></div>
        </div>
        <br><input type="text" class="form-control" name="owners[0][<?php echo $db_fields_owners['owner_ssn']['code']; ?>]" placeholder="Owner SSN" id="ein[]">
        <p>Please enter owner SSN unless owner is a business then enter TIN</p>
        <input type="text" class="form-control" name="address[]" placeholder="Address" id="owners[0][<?php echo $db_fields_owners['owner_address']['code']; ?>]">
        <br><input type="text" class="form-control" name="owners[0][<?php echo $db_fields_owners['owner_address_2']['code']; ?>]" placeholder="Address 2" id="address_own_2[]">
        <br><input type="text" class="form-control" name="owners[0][<?php echo $db_fields_owners['owner_city']['code']; ?>]" placeholder="City" id="owner_city[]">

        <div class="row">
            <div class="col"><br><input type="text" class="form-control" name="owners[0][<?php echo $db_fields_owners['owner_state']['code']; ?>]" placeholder="State" id="owner_state[]"></div>
            <div class="col"><br><input type="text" class="form-control" name="owners[0][<?php echo $db_fields_owners['owner_zip']['code']; ?>]" placeholder="Zip" id="owner_zip[]"></div>
        </div>
    </div>
    <div class="appending_div"></div>
    <div class="add-owner">
        <br>
        <a href="#" class="btn btn-success add" id="add-owner">+ Add Owner</a>
        <br>
    </div>



    <div class="form-group">
        <a href="#" class="btn btn-default" id="prev-2-b">Previous</a>
        <a href="#" class="btn btn-primary" id="next-3">Continue</a>
    </div>
</div>