<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootnavbar.css">
	<style>
		 @keyframes fa-blink {
			 10% { opacity: 0.1; }
			 50% { opacity: 0.5; }
			 90% { opacity: 0.9; }
		 }
		.fa-blink {
		   -webkit-animation: fa-blink .75s linear infinite;
		   -moz-animation: fa-blink .75s linear infinite;
		   -ms-animation: fa-blink .75s linear infinite;
		   -o-animation: fa-blink .75s linear infinite;
		   animation: fa-blink 1.99s linear infinite;
		}	
	</style>
</head>
<?php
	date_default_timezone_set('America/Sao_Paulo');
	require_once "dependencias.php";
?>
<body>
<div class="col-sm-12">
    <nav class="navbar navbar-inverse navbar-fixed-top navbar-expand-lg" id="main_navbar">
		<div class="container dropleft">
		    <ul class="nav navbar-nav navbar-right">
				<li>
                    <a href="inicio.php">
                        <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                    </a>
                </li>
				<li title="Cadastros gerais do sistema." class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Gerais
                    </a>
					<ul class="dropdown-menu">
						<li title="Cadastro dos clientes do Sistema."><a href="clientes.php" title="Cleintes">Cliente</a></li>
					    <li title="Cadastro dos Fornecedores do Sistema."><a href="fornecedores.php">Fornecedores</a></li>
					    <li title="Cadastro dos Usuários do Sistema."><a href="usuarios.php">Usuarios</a></li>
				    </ul>
				</li>
            	<li class="dropdown" >
					<a href="../procedimentos/sair.php" style="color: red"><span class="glyphicon glyphicon-log-out"></span></a>
				</li>
            </ul>
        </div>
    </nav>
</div>
</body>
<script src="../js/bootstrap.bundle.min.js"
	integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>
<script src="../js/bootnavbar.js"></script>
<script>
	new bootnavbar();
	// (function () {
	// });
</script>

<script type="text/javascript">
	$(window).scroll(function() {
		if ($(document).scrollTop() >= 120) {
			$('.logo').width(40);
			$('.logo').height(60);
		}else {
			$('.logo').height(40);
			$('.logo').width(60);
		}
	});
</script>