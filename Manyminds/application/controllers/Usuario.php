<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function novo()
	{
		$this->load->view('usuario/registrar');
	}

	public function registrar()
	{
		$nome = $this->input->post('nome');
		$login = $this->input->post('login');
		$senha = $this->input->post('senha');

		$this->load->model('UsuarioModel');
		$this->UsuarioModel->inserir($nome, $login, md5($senha));

		$this->session->set_flashdata('msg', 'Usuário cadastrado com sucesso!');
		redirect('welcome');
	}

}
