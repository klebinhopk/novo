<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class Login extends CI_Controller {  
	public function index(){
		if($this->session->has_userdata('usuario')) {
			redirect('admin/home');
		}

		$this->load->view('login');
	}

	public function autenticar() {
		$email = $this->input->post('login');	
		$senha = $this->input->post('senha');	

		$this->load->model('Usuario_model');

		$Usuario = new Usuario_model();

		$user = $Usuario->getUsuario($email, $senha);

		if($user) {
			redirect('admin/home');
		}else {
			echo "usuario nao existe...";
		}
	}

	public function logout() {
		session_destroy();
		redirect('admin/home');
	}
}


