<?php

class comprador {

    private $codigo;
    private $nome;
    private $email;
    private $telefone;
	private $senacoin;
  	
	function __construct($codigo, $nome, $email, $telefone, $senaccoin) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->senacoin = $senacoin;
    }
	 
    function getCodigo() {
        return $this->codigo;
    }
	
    function getNome() {
        return $this->nome;
    }
	function getEmail() {
        return $this->email;
    }
 function getTelefone() {
        return $this->telefone;
    }
    function getSenaccoin() {
        return $this->senaccoin;
    }

    

 
function setCodigo($codigo) {
        $this->codigo = $codigo;
    }
function setNome($nome) {
        $this->nome = $nome;
    }	
function setEmail($email) {
        $this->email = $email;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setSenaccoin($senaccoin) {
        $this->senaccoin = $senaccoin;
    }
	

    
    function mostra($conexao, $usuario,$senha) {
		$query = "select * from Comprador where usuario ='$usuario' and senha = '$senha'";
        $stmt = $conexao->query($query);
		$user = $stmt->fetch(PDO::FETCH_OBJ);
		$this->usuario = $user->usuario;
		$this->perfil = $user->perfil;
		$this->nome = $user->Nome;
		
		
    }

		
    
function insere($conexao) {
	
$query = "INSERT INTO comprador(nome, email, telefone,senacoin) VALUES ('$this->nome','$this->email','$this->telefone','$this->senaccoin')";
$conexao->query($query);


}
function deletar($conexao, $cod) {

$query = "delete from usuarios where cod= '$cod'";
$stmt=$conexao->prepare($query);

$stmt->execute();


}
   


}