<?php session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class IndexPage extends CI_Controller {

	public function index()
	{
		if(isset($_SESSION['user'])){
			$this->load->view('index');
		}else{
			redirect("Login");
		}
	}
}