<?php session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Cerrar extends CI_Controller {

	public function index()
	{
        session_destroy();
        $_SESSION = array();
		redirect("Login");
	}
}
