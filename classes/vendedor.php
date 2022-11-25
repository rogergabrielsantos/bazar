<?php

class vendedor {

    private $codigo;
    private $nome;
    private $email;
    private $telefone;
	
  	
	function __construct($codigo, $nome, $email, $telefone) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        
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

 

    
    function mostra($conexao, $nome,$senha) {
		$query = "select * from Vendedores where nome ='$nome' ";
        $stmt = $conexao->query($query);
		$user = $stmt->fetch(PDO::FETCH_OBJ);
		
		$this->nome = $user->Nome;
		
		
    }

		
    
function insere($conexao) {
	
$query = "INSERT INTO Vendedores(nome, email, telefone) VALUES ('$this->nome','$this->email','$this->telefone')";
$conexao->query($query);


}
function deletar($conexao, $cod) {

$query = "delete from usuarios where cod= '$cod'";
$stmt=$conexao->prepare($query);

$stmt->execute();


}
   


}