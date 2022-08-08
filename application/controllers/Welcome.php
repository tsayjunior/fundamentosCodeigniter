<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['first_name'] = 'john';
		$this->load->view('welcome_message', $data);
	}
}
