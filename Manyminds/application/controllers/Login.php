<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function novo()
	{
		$this->load->view('login');
	}

	public function store(){

		$this->load->model('LoginModel');

		$login = $_POST['inputLogin'];
		$senha = md5($_POST['inputSenha']);

		$user = $this->LoginModel->store($login, $senha);

		if($user){
			$this->session->set_userdata("usuario_logado", $user);
			redirect('menu');
		}else{
			redirect('welcome');
		}
	}

	public function logOut(){
		$this->session->unset_userdata("usuario_logado");
		redirect('welcome');
	}
}
