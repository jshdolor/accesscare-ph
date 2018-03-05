<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->library('session');

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
				,"https://unpkg.com/sweetalert/dist/sweetalert.min.js"
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
					"content" => "<span>Monday - Friday 8:00 AM - 5:00 PM"
				]
				,[
					"icon" => "map-marker",
					"content" => "<span>Address:</span> Blk 63 Lot 9 Asia I, Kapayapaan Village, Brgy. Canlubang, Calamba City, Laguna 4028"
				]
				,[
					"icon" => "phone",
					"content" => "<span>Phone:</span> (054) 530-8704"
				]
				,[
					"icon" => "envelope",
					"content" => "<span>Email:</span> acmcofficial@gmail.com"
				]
			]
		);

		$this->data["slides"] = array(
			"slides" => [
				[
					 "img" => base_url()."assets/img/slide-one.jpg"
					,"title" => "HOSPICE SURVEY CONSULTANCING?"
					,"subtitle" => ""
					,"btn_link" => '#service'
					,"btn_msg" => "Learn More"
				]
				,[
					 "img" => base_url()."assets/img/slide-two.jpg"
					,"title" => "HOME HEALTH CONSULTANCING?"
					,"subtitle" => ""
					,"btn_link" => '#service'
					,"btn_msg" => "Learn More"
				]
				,[
					 "img" => base_url()."assets/img/slide-three.jpg"
					,"title" => "WHAT IS CLINICAL AUDITING?"
					,"subtitle" => ""
					,"btn_link" => '#service'
					,"btn_msg" => "Learn More"
				]
			],
		);

		$this->admin_email_address = 'dolorjsh@gmail.com';
		// $this->admin_email_address = 'acmcofficial@gmail.com';
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
        $config['overwrite'] 			= TRUE;
        $config['file_name'] 			= "latest_file";

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('file'))
        {
            $msg = $this->prepare_msg();

        	if(!mail($this->admin_email_address, 'ACMC - Leave a msg', $msg)){
                $this->session->set_flashdata('success',true);
        	}else
        	{
	        	$this->session->set_flashdata('error',true);
        	}
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());

                $msg = $this->prepare_msg();
				
				$upload_data = $this->upload->data();
				$file_name = $upload_data['file_name'];
                
                if($this->send_email($msg, $file_name)){
                	$this->session->set_flashdata('success',true);
                }else
                {
	                $this->session->set_flashdata('error',true);
                }
        }
        redirect('');
	}

	private function prepare_msg(){
		$name = $this->input->post('name')? : '';
        $email = $this->input->post('email')? : '';
        $phone = $this->input->post('phone')? : '';
        $message = $this->input->post('message')? : '';

        $msg = "Name: ".$name;
        $msg .= "\r\n Email: ".$email;
        $msg .= "\r\n Phone: ".$phone;
        $msg .= "\r\n Message: ".$message;

        return $msg;
	}

	private function send_email($message,$filename){
		$path = "./uploads/";
		$file = $path.$filename;
		$content = file_get_contents( $file);
		$content = chunk_split(base64_encode($content));
		$uid = md5(uniqid(time()));
		$name = basename($file);

		// header
		$header = "From: accesscare-ph.com <admin@accesscare-ph.com>\r\n";
		$header .= "Reply-To: noreply@accesscare-ph.com \r\n";
		$header .= "MIME-Version: 1.0\r\n";
		$header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";

		// message & attachment
		$nmessage = "--".$uid."\r\n";
		$nmessage .= "Content-type:text/plain; charset=iso-8859-1\r\n";
		$nmessage .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
		$nmessage .= $message."\r\n\r\n";
		$nmessage .= "--".$uid."\r\n";
		$nmessage .= "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n";
		$nmessage .= "Content-Transfer-Encoding: base64\r\n";
		$nmessage .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
		$nmessage .= $content."\r\n\r\n";
		$nmessage .= "--".$uid."--";


		if (mail($this->admin_email_address, 'ACMC - Leave a msg', $nmessage,$header)) {
		    return true; // Or do something here
		} else {
		  return false;
		}
	}

}
