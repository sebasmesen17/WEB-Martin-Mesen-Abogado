<?php session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	public function __construct(){
		parent:: __construct();
		$this->load->model('Model');
        /* $this->load->library(array('session')); */
    }


	public function index()
	{
		if(isset($_SESSION['user'])){
			$username= $_SESSION['user'];
			$data['result']=$this->Model->getUser($username);
			$this->load->view('user', $data);
		}else{
			redirect("Login");
		}
	}

	public function edit($id){
		$data['row']= $this->Model->getData($id);
		$this->load->view('edit', $data);
	}

	public function update($id){
		$this->Model->updateData($id);
		redirect("User");
	}

	public function delete($id){
		$this->Model->deleteData($id);
		session_destroy();
        $_SESSION = array();
		redirect("Login");
	}
}
