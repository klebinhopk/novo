<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class Home extends CI_Controller {  


public function index(){
	 if(!$this->session->has_userdata('usuario')){
	 	redirect('admin/login');
	 }

	echo "logado...";


}



public function logar(){
	$this->session->set_userdata('usuario', 'julio');
	 if($this->session->has_userdata('usuario')){
	 	echo "session criado com sucesso!";
	 }else{
	 	echo "deu merda...";
	 }
}

}
