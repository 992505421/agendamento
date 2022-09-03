<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Crisley</title>
    <?php require_once "menu.php"; ?>
</head>
    <?php
        require_once "../classes/conexao.php";
        $c = new conectar();
        $conexao=$c->conexao();
        $sql = "select * from cidades where uf='RJ'";
        $result = mysqli_query($conexao, $sql);
    ?>
<body>
    <table class="table table-condensed table-bordered">
    <tr bgcolor="#0F79B3" style="color: #fff; font-weight: bold; text-shadow: 0.1em 0.1em #000">
        <td>Identificação</td>
        <td>Cidade</td>
        <td>Estado</td>
        <td>Estado</td>
        <td>Editar</td>
        <td>Excluir</td>
    </tr>
    <?php
    while($mostrar = mysqli_fetch_row($result)):
            $id=($mostrar[0]);
            $uf=($mostrar[1]);
            $estado=($mostrar[2]);
            $nom = ($mostrar[3]);
    ?>
    <tr>
        <td style="text-align:center"><?php echo $id; ?></td>
        <td><?php echo $nom; ?></td>
        <td><?php echo $uf; ?></td>
        <td style="text-align:center"><?php echo $estado; ?></td>
        <td style="text-align:center"><span class="btn btn-warning btn-xs"> <span class="glyphicon glyphicon-pencil"></span></span></td>
        <td style="text-align:center"><span class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-remove"></span></span></td>
    </tr>
    <?php
        endwhile;
    ?>
    </table>
</body>
</html>