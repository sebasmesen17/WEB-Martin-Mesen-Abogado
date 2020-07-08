<?php session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->database();
    }

	public function index()
	{
		if(isset($_SESSION['user'])){
			/* $this->load->view('index'); */
			redirect("IndexPage");
		}
		else{
			$this->load->view('login');

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$username = filter_var(strtolower($_POST['username']), FILTER_SANITIZE_STRING);
				$password = $_POST['password'];
				/* $password = hash('sha512',$password); */

				/* echo "$username . $password"; */

				if(empty($username) and empty($password) xor empty($username) or !empty($password) xor !empty($username) or empty($password)){
					echo "<script>alert('Debe ingresar un usuario y una contraseña');</script>";
				}
				else {
					/* echo "<script>alert('Se prosigue con el logueo');</script>"; */
					$query= $this->db->query("SELECT username, pass FROM users WHERE username='$username'");
					$filas= $query->num_rows();

					/* echo $filas; */

					foreach($query->result() as $row){

						if($row->username == $username){
							$resultado = $row->pass;
						}
					}

					/* $password = hash('sha512',$password); */
					/* echo $resultado; */
					if($filas >0 and $password == $resultado ){
						/* echo "<script>alert('Exito');</script>"; */
						$_SESSION['user'] = $username;
						redirect("IndexPage");
					}else{
						echo "<script>alert('Datos incorrectos');</script>";
					}
				}
			}
		}
	}
}
