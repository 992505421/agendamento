<?php
require_once "../../classes/conexao.php";
require_once "../../classes/clientes.php";
	$obj = new clientes();
	$dados=array(
		$_POST['nom_cl'],
		$_POST['cel_cl'],
		$_POST['fon_cl'],
		$_POST['ema_cl'],
		$_POST['cpf_cl'],
		$_POST['ies_cl'],
		$_POST['rua_cl'],
		$_POST['num_cl'],
		$_POST['bai_cl'],
		$_POST['com_cl'],
		$_POST['cep_cl'],
		$_POST['est_cl'],
		$_POST['cid_cl']
	);
	echo $obj->adicionarClientes($dados);
?>