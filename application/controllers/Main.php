<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class Main extends CI_Controller {  

	function login() {  
		$data['title'] = 'CodeIgniter Simple Login Form With Sessions';  
		$this->load->view("login", $data);  
	}  

	function login_validation() {
		$this->load->library('form_validation');  
		$this->form_validation->set_rules('username', 'Username', 'required');  
		$this->form_validation->set_rules('password', 'Password', 'required');  

		if($this->form_validation->run()) {  
			$username = $this->input->post('username');  
			$password = $this->input->post('password');  

			$this->load->model('main_model');

			if($this->main_model->can_login($username, $password)) {  
				$session_data = array(  
					'username' => $username  
				);  
				$this->session->set_userdata($session_data);
				redirect(base_url() . 'main/logado');  
			}else {  
				$this->session->set_flashdata('error', 'Invalid Username and Password');  
				redirect(base_url() . 'main/login');  
			}  
		}else {
			$this->login();  
		}
	}

	function logado() {
		if($this->session->userdata('username') != '') {
			$this->load->view("dashboard");
		}else {
			redirect(base_url() . 'main/login');  
		}  
	}

	function logout() {  
		$this->session->unset_userdata('username');  
		redirect(base_url() . 'main/login');  
	}  
}