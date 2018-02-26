<?php
    $this->load->view('partials/header', $header);
    $this->load->view('partials/nav');

    $this->load->view('sections/slides', $slides);
    $this->load->view('sections/about');
    $this->load->view('sections/services');
    $this->load->view('sections/team');
    $this->load->view('sections/contact', $contact);
    
    $this->load->view('partials/footer', $footer);
?>