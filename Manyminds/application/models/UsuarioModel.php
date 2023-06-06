<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class UsuarioModel extends CI_Model{

	public function inserir($nome, $login, $senha)
	{
		$sql = "INSERT INTO usuario (nome, login, senha) VALUES (?, ?, ?)";
		$dados = array($nome, $login, $senha);
		$this->db->query($sql, $dados);
	}
}
