<?php

function permission(){
	$ci = get_instance();
	$loggedUser = $ci->session->userdata("usuario_logado");

	if (!$loggedUser) {
		$ci->session->set_flashdata("danger", "Você precisa estar logado para acessar essa página");
		redirect("welcome");
	}
	return $loggedUser;
}
