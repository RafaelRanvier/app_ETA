<?php 

class conectar{
	private $servidor = "localhost";
	private $usuario = "root";
	private $senha = "1234";
	private $bd = "sistema";

	public function conexao(){
		$conexao = mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->bd);

		return $conexao;
	}
}

 ?>
