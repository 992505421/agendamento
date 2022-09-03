<?php
class conectar{
    private $servidor = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $bd = "db_agenda";
    public function conexao(){
        $conexao = mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->bd) or die(mysqli_error());
        return $conexao;
    }
}
?>