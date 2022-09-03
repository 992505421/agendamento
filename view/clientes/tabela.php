<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<?php 
session_start();
require_once "../../classes/conexao.php";
	$c = new conectar();
	$conexao=$c->conexao();
	$sql = "SELECT id_cl, nom_cl, cel_cl, fon_cl, ema_cl, cid_cl FROM cliente WHERE ati_cl = 'A' ORDER BY nom_cl";
	$result = mysqli_query($conexao, $sql);
?>

<table class="table table-condensed table-bordered">
	<caption><label><h2>Clientes</h2></label></caption>
	<tr bgcolor="#0F79B3" style="color: #FFF; font-weight:bold; text-shadow: 0.1em 0.1em #000; text-align:center">
			<td>Código</td>
			<td>Nome</td>
	 		<td>Telefone</td>
	 		<td>EMail</td>
	 		<td>Cidade</td>
			<td>Editar</td>
			<td>Excluir</td>
	</tr>
	<?php while($mostrar = mysqli_fetch_row($result)): 
		$nomcl = mb_strtoupper($mostrar[1]);
		$emacl = mb_strtolower($mostrar[4]);
		$cidcl = mb_strtoupper($mostrar[5]);
	?>
	<tr style="vertical-align:middle">
		<td><?php echo $mostrar[0]; ?></td>
		<td><?php echo  utf8_encode($nomcl); ?></td>
		<td><?php echo $mostrar[2].'-'.$mostrar[3]; ?></td>
		<td><?php echo $emacl; ?></td>
		<td><?php echo  utf8_encode($cidcl); ?></td>
			<td style="vertical-align:middle; text-align:center">
				<span class="btn btn-warning btn-xs" data-toggle="modal" data-target="#abremodalClientes" onClick="editarDadosCliente('<?php echo $mostrar[0]; ?>')">
					<span class="glyphicon glyphicon-pencil"></span>
				</span>
			</td>
			<td style="vertical-align:middle; text-align:center">
				<span class="btn btn-danger btn-xs" onClick="apagarClientes('<?php echo $mostrar[0]; ?>')">
					<span class="glyphicon glyphicon-remove"></span>
				</span>
			</td>
	</tr>
<?php endwhile; ?>
</table>
</html>