<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Clientes</title> 
    <?php require_once "menu.php"; ?>
</head>
<body >
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <label>
                    <img src="../imagens/cli.jpg" width=100 height="100" />
                </label>
                <form id="formulario">
                    <label for="nom_cl">Nome</label>
                    <input type="text" class="form-control input-sm" id="nom_cl" name="nom_cl">
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="cel_cl">Celular</label>
                            <input type="text" class="form-control input-sm" id="cel_cl" name="cel_cl">
                        </div>
                        <div class="col-sm-6">
                            <label for="fon_cl">Telefone</label>
                            <input type="text" class="form-control input-sm" id="fon_cl" name="fon_cl">
                        </div>
                    </div>
                    <label for="ema_cl">EMail</label>
                    <input type="text" class="form-control input-sm" id="ema_cl" name="ema_cl">
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="cpf_cl">CPF/CNPJ</label>
                            <input type="text" class="form-control input-sm" id="cpf_cl" name="cpf_cl">
                        </div>
                        <div class="col-sm-6">
                            <label for="ies_cl">Insc. Estadual</label>
                            <input type="text" class="form-control input-sm" id="ies_cl" name="ies_cl">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-9">
                            <label for="rua_cl">Endereço</label>
                            <input type="text" class="form-control input-sm" id="rua_cl" name="rua_cl">
                        </div>
                        <div class="col-sm-3">
                            <label for="num_cl">Número</label>
                            <input type="text" class="form-control input-sm" id="num_cl" name="num_cl">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="bai_cl">Bairro</label>
                            <input type="text" class="form-control input-sm" id="bai_cl" name="bai_cl">
                        </div>
                        <div class="col-sm-6">
                            <label for="com_cl">Complemento</label>
                            <input type="text" class="form-control input-sm" id="com_cl" name="com_cl">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <label for="cep_cl">CEP.</label>
                            <input type="text" class="form-control input-sm" id="cep_cl" name="cep_cl"     maxlength="10">
                        </div>
                        <div class="col-sm-3">
                            <label for="est_cl">Estado</label>
                            <input type="text" class="form-control input-sm" id="est_cl" name="est_cl" maxlength="2" value="GO">
                        </div>
                        <div class="col-sm-6">
                            <label for="cidades">Cidade</label>
                            <input type="text" class="form-control input-sm" id="cid_cl" name="cid_cl" list="cidades">
                        </div>
                    </div>
                    <p></p>
                    <span class="btn btn-primary" id="btnAdicionar">
                        Salvar
                    </span>
                </form>
            </div>
            <div class="col-sm-8">
                <div id="AbrirMenuDireita"></div>
            </div>
        </div>
    </div>
	
	<!-- Modal -->
	
	<div class="modal fade" id="abremodalClientes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" arial-label="close">
						<span arial-hidden=
							  "true">&times;
						</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Atualizar Informações</h4>
				</div>
				
				
				<div class="modal-body">
					<form id="formularioU">
						<input type="text" hidden="" id="id_clU" name="id_clU">
						<label for="nom_clU">Nome</label>
						<input type="text" class="form-control input-sm" id="nom_clU" name="nom_clU">
						<div class="row">
							<div class="col-sm-6">
								<label for="cel_clU">Celular</label>
								<input type="text" class="form-control input-sm" id="cel_clU" name="cel_clU">
							</div>
							<div class="col-sm-6">
								<label for="fon_clU">Telefone</label>
								<input type="text" class="form-control input-sm" id="fon_clU" name="fon_clU">
							</div>
						</div>
						<label for="ema_clU">EMail</label>
						<input type="text" class="form-control input-sm" id="ema_clU" name="ema_clU">
						<div class="row">
							<div class="col-sm-6">
								<label for="cpf_clU">CPF/CNPJ</label>
								<input type="text" class="form-control input-sm" id="cpf_clU" name="cpf_clU">
							</div>
							<div class="col-sm-6">
								<label for="ies_clU">Insc. Estadual</label>
								<input type="text" class="form-control input-sm" id="ies_clU" name="ies_clU">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-9">
								<label for="rua_clU">Endereço</label>
								<input type="text" class="form-control input-sm" id="rua_clU" name="rua_clU">
							</div>
							<div class="col-sm-3">
								<label for="num_clU">Número</label>
								<input type="text" class="form-control input-sm" id="num_clU" name="num_clU">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<label for="bai_clU">Bairro</label>
								<input type="text" class="form-control input-sm" id="bai_clU" name="bai_clU">
							</div>
							<div class="col-sm-6">
								<label for="com_clU">Complemento</label>
								<input type="text" class="form-control input-sm" id="com_clU" name="com_clU">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3">
								<label for="cep_clU">CEP.</label>
								<input type="text" class="form-control input-sm" id="cep_clU" name="cep_clU"     maxlength="10">
							</div>
							<div class="col-sm-3">
								<label for="est_clU">Estado</label>
								<input type="text" class="form-control input-sm" id="est_clU" name="est_clU" maxlength="2" value="GO">
							</div>
							<div class="col-sm-6">
								<label for="cidades">Cidade</label>
								<input type="text" class="form-control input-sm" id="cid_clU" name="cid_clU" list="cidades">
							</div>
						</div>
						<p></p>
					</form>
				</div>
				
				<div class="modal-footer">
					<button id="btnAlterarU" type="button" class="btn btn-primary" data-dismiss="modal">Atualizar</button>	
				</div>
				
			</div>
		</div>
	</div>
	
</body>
</html>

<script type="text/javascript">
    function editarDadosCliente(idcliente){
        $.ajax({
            type:"POST",
            data:"idcliente=" + idcliente,
            url:"../procedimentos/clientes/obterDados.php",
            success:function(r){
                if(r==1){
                    alertify.success("Sucesso!");
                    dado=jQuery.parseJSON(r);
                    $('#id_clU').val(dado['id_cl']);
                    $('#nom_clU').val(dado['nom_cl']);
                    $('#cel_clU').val(dado['cel_cl']);
                    $('#fon_clU').val(dado['fon_cl']);
                    $('#ema_clU').val(dado['ema_cl']);
                    $('#cpf_clU').val(dado['cpf_cl']);
                    $('#ies_clU').val(dado['ies_cl']);
                    $('#rua_clU').val(dado['rua_cl']);
                    $('#num_clU').val(dado['num_cl']);
                    $('#bai_clU').val(dado['bai_cl']);
                    $('#com_clU').val(dado['com_cl']);
                    $('#cep_clU').val(dado['cep_cl']);
                    $('#cid_clU').val(dado['cid_cl']);
                    $('#est_clU').val(dado['est_cl']);
                }else{
                    alertify.error("Não foi possivel pegar!!!");
                }                
            }
        });
    }
</script>

<script type="text/javascript">
    $('#AbrirMenuDireita').load("clientes/tabela.php");
</script>


<script type="text/javascript">
	function adicionarDadosCliente(idcliente){
		alertify.confirm('Deseja realmente alterar?', function(){
			$.ajax({
				type:"POST",
				data:"idcliente=" + idcliente,
				url:"../procedimentos/clientes/obeterDados.php",
				success:function(r){
					
					if(r==1){
						$('#AbrirMenuDireita').load("clientes/tabela.php");
						alertify.success("Excluido com Sucesso!");
					}else{
						alertify.error("Não foi possivel excluir!!!");
					}
				}
			});
		}, function(){
			alertify.error('Cancelado!')
		});
	}
</script>


<script type="text/javascript">
	function apagarClientes(idcliente){
		alertify.confirm('Deseja realmente excluir?', function(){
			$.ajax({
				type:"POST",
				data:"idcliente=" + idcliente,
				url:"../procedimentos/clientes/excluir.php",
				success:function(r){
					
					if(r==1){
						$('#AbrirMenuDireita').load("clientes/tabela.php");
						alertify.success("Excluido com Sucesso!");
					}else{
						alertify.error("Não foi possivel excluir!!!");
					}
				}
			});
		}, function(){
			alertify.error('Cancelado!')
		});
	}
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#btnAdicionar').click(function(){
			dados=$('#formulario').serialize();
			$.ajax({
				type:"POST",
				data:dados,
				url:"../procedimentos/clientes/adicionar.php",
				success:function(r){
					if(r==1){
						$('#formulario')[0].reset();
						$('#AbrirMenuDireita').load("clientes/tabela.php");
						alertify.success("Cliente Adicionado");
					}else{
						alertify.error("Não foi possivel adicionar");
				   }
			}
			});
		});
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){
		$('#btnAlterarU').click(function(){
			dados=$('#formularioU').serialize();
			$.ajax({
				type:"POST",
				data:dados,
				url:"../procedimentos/clientes/atualizar.php",
				success:function(r){
					if(r==1){
						$('#formulario')[0].reset();
						$('#AbrirMenuDireita').load("clientes/tabela.php");
						alertify.success("Cliente Alterado com Sucesso!!!");
					}else{
						alertify.error("Não foi possivel Alterar");
				   }
			}
			});
		});
    });
</script>