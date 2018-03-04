<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->data["header"] = array(
			 "title" => "Access Care Management Consultancy"
			,"styles" => [
				 base_url()."assets/css/font-awesome.min.css"
				,base_url()."assets/css/bootstrap.min.css"
				,base_url()."assets/css/style.css"
				,base_url()."assets/css/datepicker.css"
				,"http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300"
				,"http://fonts.googleapis.com/css?family=BenchNine:300,400,700"
			],
		);

		$this->data["footer"] = array(
			"scripts" => [
				"https://maps.googleapis.com/maps/api/js?sensor=true&key=AIzaSyDskvgeVd_YZyRbF7EJnoJh4IV6eWzfozg&callback=initMap"
				,base_url()."assets/js/jquery-2.1.1.js"
			    ,base_url()."assets/js/gmaps.js"
			    ,base_url()."assets/js/smoothscroll.js"
			    ,base_url()."assets/js/bootstrap.min.js"
			    ,base_url()."assets/js/custom.js"
			    ,base_url()."assets/js/datepicker.js"
			    ,base_url()."assets/js/script.js"
			],
		);

		$this->data["contact"] = array(
			 "form_url" => base_url("upload")
			,"infos" => [
				[
					"icon" => "calendar",
					"content" => "<span>Monday - Friday:</span> 9:30 AM to 6:30 PM"
				]
				,[
					"icon" => "map-marker",
					"content" => "<span>Address:</span> Blk 63 Lot 9 Asia I, Kapayapaan Village, Brgy. Canlubang, Calamba City, Laguna 4028"
				]
				,[
					"icon" => "phone",
					"content" => "<span>Phone:</span> (032) 987-1235"
				]
				,[
					"icon" => "fax",
					"content" => "<span>Fax:</span> (123) 984-1234"
				]
				,[
					"icon" => "envelope",
					"content" => "<span>Email:</span> info@doctor.com"
				]
			]
		);

		$this->data["slides"] = array(
			"slides" => [
				[
					 "img" => base_url()."assets/img/slide-one.jpg"
					,"title" => "Sample 1"
					,"subtitle" => "Sample Subtitle"
					,"btn_msg" => "Learn More"
				]
				,[
					 "img" => base_url()."assets/img/slide-two.jpg"
					,"title" => "Sample 2"
					,"subtitle" => "Sample Subtitle"
					,"btn_msg" => "Learn More"
				]
				,[
					 "img" => base_url()."assets/img/slide-three.jpg"
					,"title" => "Sample 3"
					,"subtitle" => "Sample Subtitle"
					,"btn_msg" => "Learn More"
				]
				,[
					 "img" => base_url()."assets/img/slide-four.jpg"
					,"title" => "Sample 4"
					,"subtitle" => "Sample Subtitle"
					,"btn_msg" => "Learn More"
				]
			],
		);
	}

	public function index()
	{
		$this->load->view('home',$this->data);
	}

	public function upload(){
		if(!isset($_POST['btn'])){
			redirect();
		}

		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|docx|pdf|doc';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('file'))
        {
                $errors = array('error' => $this->upload->display_errors());
                $this->data['contact']['errors'] = $errors;
                $this->load->view('home', $this->data);
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());
                $this->data['contact']['success'] = "Successfully sent!";
                $this->load->view('home', $this->data);
        }
	}
}
