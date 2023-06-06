
<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class ClientesModel extends CI_Model{

	public function listar_todos()
	{

		return $this->db->get_where("clientes WHERE excluido = '0'")->result_array();

	}

	public function listar_inativos()
	{

		return $this->db->get_where("clientes WHERE excluido = '1'")->result_array();

	}

	public function store($cliente){
		$this->db->insert("clientes", $cliente);
	}

	public function show($id){
		return $this->db->get_where("clientes", array(
			"id_cliente" => $id
		))->row_array();
	}

	public function update($id, $cliente){
		$this->db->where("id_cliente", $id);
		return $this->db->update("clientes", $cliente);
	}
}
