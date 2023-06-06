<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		permission();
		$this->load->model("ClientesModel");
	}

	public function tabela_ativos(){
		$data['clientes'] = $this->ClientesModel->listar_todos();
		$this->load->view("clientes/tabela_ativos", $data);
	}

	public function tabela_inativos(){
		$data['clientes'] = $this->ClientesModel->listar_inativos();
		$this->load->view("clientes/tabela_inativos", $data);
	}

	public function cadastro()
	{
		$this->load->view('clientes/cadastro');
	}

	public function store()
	{
		$cliente = $_POST;
		$this->ClientesModel->store($cliente);

		$this->session->set_flashdata('msg', 'Cliente cadastrado com sucesso!');
		redirect('clientes/cadastro');
	}

	public function novo()
	{
		$this->load->view('clientes/cadastro');
	}

	public function edit($id){
		$data['cliente'] = $this->ClientesModel->show($id);
		$this->load->view('clientes/cadastro', $data);
	}

	public function update($id){
		$cliente = $_POST;
		$this->ClientesModel->update($id, $cliente);
		$this->session->set_flashdata('msg', 'Cliente editado com sucesso!');
		redirect("clientes/tabela_ativos");
	}

	public function delete($id){
		$_POST = '1';
		$cliente['excluido'] = $_POST;
		$this->ClientesModel->update($id, $cliente);
		redirect("clientes/tabela_ativos");
	}

	public function ativar($id){
		$_POST = '0';
		$cliente['excluido'] = $_POST;
		$this->ClientesModel->update($id, $cliente);
		redirect("clientes/tabela_inativos");
	}
}
