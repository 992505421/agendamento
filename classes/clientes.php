<?php 
header('Content-type: text/html; charset=UTF-8');
class clientes{
    
	public function adicionarClientes($dados){
		$c = new conectar();
		$conexao=$c->conexao();
		$sql= "INSERT INTO cliente 
		(nom_cl, cel_cl, fon_cl, ema_cl, cpf_cl, ies_cl, rua_cl, num_cl, bai_cl, com_cl, cep_cl, est_cl,cid_cl)
		VALUES
		('$dados[0]', '$dados[1]', '$dados[2]', '$dados[3]', '$dados[4]', '$dados[5]', '$dados[6]', '$dados[7]', '$dados[8]', '$dados[9]', '$dados[10]', '$dados[11]', '$dados[12]')";
		return mysqli_query($conexao, $sql);
	}
	
	
	public function excluirClientes($id){
		$c = new conectar();
		$conexao=$c->conexao();
		$sql= "DELETE FROM cliente WHERE id_cl = '$id'"; 
		return mysqli_query($conexao, $sql);
	}


	public function atualizarClientes($dados){
		$c = new conectar();
		$conexao=$c->conexao();
		$sql= "UPDATE cliente SET
		nom_cl='$dados[1]', 
		cel_cl='$dados[2]', 
		fon_cl='$dados[3]', 
		ema_cl='$dados[4]', 
		cpf_cl='$dados[5]', 
		ies_cl='$dados[6]', 
		rua_cl='$dados[7]', 
		num_cl='$dados[8]', 
		bai_cl='$dados[9]', 
		com_cl='$dados[10]', 
		cep_cl='$dados[11]', 
		est_cl='$dados[12]',
		cid_cl='$dados[13]'
		where id_cl = '$dados[0]'";
		echo mysqli_query($conexao, $sql);
	}
    
    
    public function obterDadosCliente($id){
        $c = new conectar();
		$conexao=$c->conexao();
        $sql = "SELECT * FROM cliente WHERE id_cl='$id'";
        $result = mysqli_query($conexao, $sql);
        $mostrar = mysqli_fetch_row($result);
        
        $dados = array(
            'id_cl' => $mostrar[0],
            'nom_cl' => $mostrar[1],
            'tip_cl' => $mostrar[2],
            'cel_cl' => $mostrar[3],
            'fon_cl' => $mostrar[4],
            'ema_cl' => $mostrar[5],
            'cpf_cl' => $mostrar[6],
            'ies_cl' => $mostrar[7],
            'rua_cl' => $mostrar[8],
            'num_cl' => $mostrar[9],
            'bai_cl' => $mostrar[10],
            'com_cl' => $mostrar[11],
            'cep_cl' => $mostrar[12],
            'cid_cl' => $mostrar[13],
            'est_cl' => $mostrar[14],
        );
        return $dados;
        echo $dados;
    }

}
?>