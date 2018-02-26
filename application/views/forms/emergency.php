<section>
    <div class="container">
        <h1 class="text-center">Emergency Contact</h1>
        <div class="emergency_entry">
            <div class="col-md-12 text-right">
                <button type="button" class="btn-remove close">
                    <span class="fa fa-2x fa-times"></span>
                </button>
            </div>
            <div class="form-group col-md-6 col-sm-12 last_name optional"> 
                <label>Last Name</label> 
                <input class="form-control" type="text" name="emergency[contact_last_name][]" value=""> 
            </div> 

            <div class="form-group col-md-6 col-sm-12 first_name optional"> 
                <label>First Name</label> 
                <input class="form-control" type="text" name="emergency[contact_first_name][]" value=""> 
            </div>

            <div class="form-group col-md-6 col-sm-12 phone print_break optional">
                <label>Telephone Number</label>
                <input class="form-control" type="number" name="emergency[contact_phone][]" value="">
            </div>

            <div class="form-group col-md-6 col-sm-12 phone optional">
                <label>Secondary Telephone Number</label>
                <input class="form-control" type="number" name="emergency[contact_secondary_phone][]" value="">
            </div>

            <div class="form-group col-md-6 col-sm-12 address optional">
                <label>Address</label>
                <input class="form-control" type="text" name="emergency[contact_address][]" value="">
            </div>

            <div class="form-group col-md-6 col-sm-12 contact_relationship optional">
                <label>Relationship to Applicant</label>
                <input class="form-control" type="text" name="emergency[contact_relationship][]" value="">
            </div>
        </div>
        <button type="button" 
            class="center-block btn btn-lg btn-repeat btn-clone" 
            data-clone=".emergency_entry" >Add Entry</button>
    </div>
</section>