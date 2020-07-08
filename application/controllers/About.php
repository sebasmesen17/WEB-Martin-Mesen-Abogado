<?php session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		if (isset($_SESSION['user'])) {
			$this->load->view('about');
		}
		else{
			redirect("Login");
		}
	}
}