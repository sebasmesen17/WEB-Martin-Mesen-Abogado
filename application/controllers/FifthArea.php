<?php session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class FifthArea extends CI_Controller {

	
	public function index()
	{
		if (isset($_SESSION['user'])) {
			$this->load->view('fifthArea');
		}
		else{
			redirect("Login");
		}
	}
}
