<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
		parent:: __construct();

		$this->load->model('city');
	}

	public function index() {
		$this->load->view('dashboard');
	}

	public function read_postcode() {
	    $q = $_REQUEST["q"];

	    $result = $this->city->select_where($q);

	    $json = array();

	    foreach($result as $value) {
	    	array_push($json, $value->postcode);
	    }

	    echo json_encode($json);
	}

	public function show_city() {
		$data['cities'] = $this->city->select_city($this->input->post('postcode'));

		$this->load->view('results', $data);
	}
}
