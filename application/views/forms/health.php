<section>
    <div class="container">
        <h1 class="text-center">Health Information</h1>

        <div class="form-group col-md-6 col-sm-12 medical_condition optional">
            <label>Do you have any special medical condition?</label>
            <select class="form-control" name="medical_condition" id="medical_condition">
                <option value="">Choose</option>
                <option>None</option>
                <option>Yes</option>

            </select>
        </div>

        <div class="form-group col-md-6 col-sm-12 medical_condition_detail optional">
            <label>If Yes, provide more details.</label>
            <input class="form-control" type="text" name="medical_condition_detail" value="">
        </div>

        <div class="form-group col-md-6 col-sm-12 undergone_surgery optional">
            <label>Have you undergone surgery?</label>
            <select class="form-control" name="undergone_surgery" id="undergone_surgery">
                <option value="">Choose</option>
                <option>No</option>
                <option>Yes</option>

            </select>
        </div>

        <div class="form-group col-md-6 col-sm-12 undergone_surgery_detail optional">
            <label>If Yes, provide more details.</label>
            <input class="form-control" type="text" name="undergone_surgery_detail" value="">
        </div>

        <div class="form-group col-md-6 col-sm-12 hospital_admittance optional">
            <label>Were you admitted to a hospital within the past 12 months?</label>
            <select class="form-control" name="hospital_admittance_within_12_months" id="hospital_admittance">
                <option value="">Choose</option>
                <option>No</option>
                <option>Yes</option>

            </select>
        </div>

        <div class="form-group col-md-6 col-sm-12 hospital_admittance_detail optional">
            <label>If Yes, provide more details.</label>
            <input class="form-control" type="text" name="hospital_admittance_within_12_months_detail" value="">
        </div>

        <div class="form-group col-md-6 col-sm-12 allergies optional">
            <label>Do you have any allergies?</label>
            <select class="form-control" name="allergies" id="allergies">
                <option value="">Choose</option>
                <option>No</option>
                <option>Yes</option>

            </select>
        </div>

        <div class="form-group col-md-6 col-sm-12 allergies_detail optional">
            <label>If Yes, provide more details.</label>
            <input class="form-control" type="text" name="allergies_detail" value="">
        </div>
    </div>
</section>