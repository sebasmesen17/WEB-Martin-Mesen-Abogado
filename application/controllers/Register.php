<?php session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->database();
        /* $this->load->library(array('session')); */
    }

	public function index()
	{
		if(isset($_SESSION['user'])){
			redirect("IndexPage");
			/* $this->load->view('index'); */
		}

		$this->load->view('register');

		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$username = filter_var(strtolower($_POST['username']), FILTER_SANITIZE_STRING);
			$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
			$password = $_POST['password'];
			$password2 = $_POST['password2'];

			/* echo "$username . $email . $password . $password2"; */

			/* $errores= ''; */

			if (empty($username) or empty($email) or empty($password) or empty($password2)) {
				echo "<script>alert('Llene todos los campos');</script>";
				/* redirect('Register', 'refresh'); */
				/* $errores .= '<li>¡Campos vacios!¡Por favor llene todos los campos!</li>';  */
			}else {
				$query= $this->db->query('SELECT username FROM users ');

				foreach ($query->result() as $row) {
					if ($row->username == $username) {
						$resultado = $row->username;
					}
				}
				
				
				if (!empty($resultado) == $username) {
					echo "<script>alert('¡El nombre de usuario ya existe!');</script>";

				}
				elseif ($password == $password2) {
					/* $password= hash('sha512', $password); */
					$data= array('username'=>$username, 'email'=> $email, 'pass'=>$password);
					$this->db->insert('users',$data);
					redirect("Login");
				}else {
					echo "<script>alert('¡Las contraseñas NO coinciden!');</script>";
				}
				

				

				/* if($password == $password2){
					$password= hash('sha512', $password);
					$data= array('username'=>$username, 'email'=> $email, 'password'=>$password);
					$this->db->insert('users',$data);
					redirect("Login");
					
				}else{
					echo "<script>alert('¡Las contraseñas NO coinciden!');</script>";
				} */
				

			}
		}
	}

}
