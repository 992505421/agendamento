<?php
	require_once "../../classes/conexao.php";
	require_once "../../classes/clientes.php";
	$obj = new clientes();
	$dados=array(
		$_POST['id_clU'],
		$_POST['nom_clU'],
		$_POST['cel_clU'],
		$_POST['fon_clU'],
		$_POST['ema_clU'],
		$_POST['cpf_clU'],
		$_POST['ies_clU'],
		$_POST['rua_clU'],
		$_POST['num_clU'],
		$_POST['bai_clU'],
		$_POST['com_clU'],
		$_POST['cep_clU'],
		$_POST['est_clU'],
		$_POST['cid_clU']
	);
	echo $obj->atualizarClientes($dados);
?>