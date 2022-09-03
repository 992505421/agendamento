<?php
	require_once "classes/conexao.php";
	$obj = new conectar();
	$conexao = $obj->conexao();
	$sql = "SELECT * from usuarios";
	$result = mysqli_query($conexao, $sql);
?>