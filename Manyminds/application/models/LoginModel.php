<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class LoginModel extends CI_Model{

	public function store($login, $senha)
	{
		$this->db->where("login", $login);
		$this->db->where("senha", $senha);
		$user = $this->db->get("usuario")->row_array();

		return $user;
	}
}
