<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Application extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->data["header"] = array(
			 "title" => "ACMC"
			,"styles" => [
				 base_url()."assets/css/font-awesome.min.css"
				,base_url()."assets/css/bootstrap.min.css"
				,base_url()."assets/css/style.css"
				,base_url()."assets/css/application.css"
				,base_url()."assets/css/datepicker.css"
				,"http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300"
				,"http://fonts.googleapis.com/css?family=BenchNine:300,400,700"
			],
		);

		$this->data["footer"] = array(
			"scripts" => [
				 base_url()."assets/js/jquery-2.1.1.js"
			    ,"http://maps.google.com/maps/api/js?sensor=true"
			    ,base_url()."assets/js/gmaps.js"
			    ,base_url()."assets/js/smoothscroll.js"
			    ,base_url()."assets/js/bootstrap.min.js"
			    ,base_url()."assets/js/datepicker.js"
			    ,base_url()."assets/js/custom.js"
			    ,base_url()."assets/js/script.js"
			],
		);

		// $this->load->library('pdfgenerator');

	}

	public function index()
	{	
		$this->data['submit_url'] = base_url('apply');
		if(isset($_POST['submit_btn'])){
			$this->process_submission();
		}
		$this->load->view('apply',$this->data);
	}

	private function process_submission(){
		$data = [];
		
		foreach($_POST as $key => $post){
			if($key === 'submit_btn' || $post === '')
			{
				continue;
			}

			if(is_array($post)){

				array_push($data, $this->groupHandler($post,$key));

			}else
			{
				array_push($data, $key."*,!,*".$post);
			}
		}
		$this->toPDF($data);
		// $this->toCsv($data);
	}

	private function toPDF($data){

		$html = "";
		foreach ($data as $key => $data_value) {
			if( is_array( $data_value)){
				foreach ($data_value as $vkey => $vvalue) {
					$explode = explode("*,!,*", $vvalue);
					$label = $explode[0];
					$value = $explode[1];
					$html .= "<h1>".$this->makeLabel($label).":".$value."</h1>";
				}
			}else
			{
				$explode = explode("*,!,*", $data_value);
				$label = $explode[0];
				$value = $explode[1];
				$html .= "<h1>".$this->makeLabel($label).":".$value."</h1>";
			}
			
		}
		dd($html);
		$this->pdfgenerator->generate($html,$this->getFileName());
	}

	private function makeLabel($label){
		return ucwords(str_replace("_", " ", $label));
	}

	private function groupHandler($group, $identifier){
		
		$grouped = array();
		$keys = array_keys($group);
		$size = sizeof($group[$keys[0]]);

		$i = 0;
		while ($i < $size) {
			foreach ($keys as $key => $value) {
				array_push($grouped, $identifier.'_'.$value.'_'.$i."*,!,*".$group[$value][$i]);
			}
			$i++;
		}
		return $grouped;
	}

	

	private function getFileName(){
		return 
			$this->input->post('last_name')
			.', '
			.$this->input->post('first_name')
			.' '
			.$this->input->post('middle_name')
			.'_'
			.time();
	}
}
