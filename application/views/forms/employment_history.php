<section>
    <div class="container">
        <h1 class="text-center">Employment History</h1>

        <div id="work_history_entry" class="work_history_entry">
            <div class="col-md-12 text-right">
                <button type="button" class="btn-remove close">
                    <span class="fa fa-2x fa-times"></span>
                </button>
            </div>
            <div id="work_history_entry" class="work_history_entry">
                <div class="form-group col-md-6 col-sm-12 work_history_job_title optional">
                    <label>Job Title</label>
                    <input class="form-control" type="text" name="work[history_job_title][]" id="work_history_job_title" value="">
                </div>

                <div class="form-group col-md-6 col-sm-12 work_history_company optional">
                    <label>Company</label>
                    <input class="form-control" type="text" name="work[history_company][]" id="work_history_company" value="">
                </div>

                <div class="form-group col-md-6 col-sm-12 work_history_business_focus optional">
                    <label>Core Business Focus</label>
                    <select class="form-control" name="work[history_business_focus][]" id="work_history_business_focus">
                        <option value="">Choose</option>
                        <option>Accounting and Auditing Services</option>
                        <option>Advertising and PR Services</option>
                        <option>Aerospace and Defense</option>
                        <option>Agriculture/Forestry/Fishing</option>
                        <option>Architectural and Design Services</option>
                        <option>Automotive and Parts Mfg</option>
                        <option>Automotive Sales and Repair Services</option>
                        <option>Banking</option>
                        <option>Biotechnology/Pharmaceuticals</option>
                        <option>Broadcasting, Music, and Film</option>
                        <option>Business Services - Other</option>
                        <option>Chemicals/Petro-Chemicals</option>
                        <option>Clothing and Textile Manufacturing</option>
                        <option>Computer Hardware</option>
                        <option>Computer Software</option>
                        <option>Computer/IT Services</option>
                        <option>Construction - Industrial Facilities and Infrastructure</option>
                        <option>Construction - Residential &amp; Commercial/Office</option>
                        <option>Consumer Packaged Goods Manufacturing</option>
                        <option>Education</option>
                        <option>Electronics, Components, and Semiconductor Mfg</option>
                        <option>Energy and Utilities</option>
                        <option>Engineering Services</option>
                        <option>Entertainment Venues and Theaters</option>
                        <option>Financial Services</option>
                        <option>Food and Beverage Production</option>
                        <option>Government and Military</option>
                        <option>Healthcare Services</option>
                        <option>Hotels and Lodging</option>
                        <option>Insurance</option>
                        <option>Internet Services</option>
                        <option>Legal Services</option>
                        <option>Management Consulting Services</option>
                        <option>Manufacturing - Other</option>
                        <option>Marine Mfg &amp; Services</option>
                        <option>Medical Devices and Supplies</option>
                        <option>Metals and Minerals</option>
                        <option>Nonprofit Charitable Organizations</option>
                        <option>Other/Not Classified</option>
                        <option>Performing and Fine Arts</option>
                        <option>Personal and Household Services</option>
                        <option>Printing and Publishing</option>
                        <option>Real Estate/Property Management</option>
                        <option>Rental Services</option>
                        <option>Restaurant/Food Services</option>
                        <option>Retail</option>
                        <option>Security and Surveillance</option>
                        <option>Sports and Physical Recreation</option>
                        <option>Staffing/Employment Agencies</option>
                        <option>Telecommunications Services</option>
                        <option>Transport and Storage - Materials</option>
                        <option>Travel, Transportation and Tourism</option>
                        <option>Waste Management</option>
                        <option>Wholesale Trade/Import-Export</option>

                    </select>
                </div>

                <div class="form-group col-md-6 col-sm-12 work_history_date">
                    <label class="form-group col-md-12">Dates Employed</label>
                    <div class="form-group col-md-6 col-sm-12 work_history_start_date optional">
                        <label>From</label>
                        <input class="form-control form-date" type="text" name="work[history_start_date][]" id="work_history_start_date" value="">
                    </div>

                    <div class="form-group col-md-6 col-sm-12 work_history_end_date optional">
                        <label>To</label>
                        <input class="form-control form-date" type="text" name="work[history_end_date][]" id="work_history_end_date" value="">
                    </div>
                </div>

                <div class="form-group col-md-6 col-sm-12 work_history_address optional">
                    <label>Address</label>
                    <textarea class="form-control" type="text" name="work[history_address][]" id="work_history_address" value=""></textarea>
                </div>

                <div class="form-group col-md-6 col-sm-12 work_history_phone optional">
                    <label>Telephone Number</label>
                    <input class="form-control" type="text" name="work[history_phone][]" id="work_history_phone" value="">
                </div>

                <div class="form-group col-md-6 col-sm-12 work_history_supervisor optional">
                    <label>Supervisor</label>
                    <input class="form-control" type="text" name="work[history_supervisor][]" id="work_history_supervisor" value="">
                </div>

                <div class="form-group col-md-6 col-sm-12 work_history_work_performed optional">
                    <label>Work Performed</label>
                    <textarea class="form-control" name="work[history_work][]" id="work_history_work"></textarea>
                </div>

                <div class="form-group col-md-6 col-sm-12 work_history_reason_for_leaving optional">
                    <label>Reason for Leaving</label>
                    <textarea class="form-control" name="work[history_reason][]" id="work_history_reason"></textarea>
                </div>
            </div>
        </div>

        <button type="button" 
            class="center-block btn btn-lg btn-repeat btn-clone" 
            data-clone=".work_history_entry" >Add Entry</button>

    </div>
</section>