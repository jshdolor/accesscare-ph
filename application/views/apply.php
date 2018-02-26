<?php
    $this->load->view('partials/header', $header);
    $this->load->view('partials/application_nav');
    echo '<div class="container-fluid">';
    echo     '<div class="row">';
    echo        '<form method="post" action="'.$submit_url.'">';
                    $this->load->view('forms/contact_information');
                    $this->load->view('forms/application');
                    $this->load->view('forms/education');
                    $this->load->view('forms/emergency');
                    $this->load->view('forms/employment_history');
                    $this->load->view('forms/language');
                    $this->load->view('forms/health');
    echo            '<br><div class="form-group col-md-12">';
    echo                '<input type="submit" value="Submit Application Form" class=" col-md-12 btn btn-lg btn-primary" name="submit_btn">';                
    echo            '</div>';
    echo        '</form>';
    echo    '</div>';
    echo '</div>';
    $this->load->view('partials/footer', $footer);
?>