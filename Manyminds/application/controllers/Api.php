<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("ClientesModel");
	}

	// public function users_get(){
	// 	$id = $this->get('id_cliente');

	// 	if($id === null) {
	// 		$users = $this->user->get();
	// 		$this->response($users, 200);
	// 	}else{
	// 		$user = $this->user->get($id);
	// 		if ($user) {
	// 			$this->response($user, 200);
	// 		}else{
	// 			$this->response([
	// 				'status' => false,
	// 				'message' => 'Usuario não encontrado'
	// 			], 404);
	// 		}
	// 	}
	// }
}
