<?php

class usuarios {

    private $codigo;
    private $nome;
    private $usuario;
    private $senha;
    private $perfil;
  	
	function __construct($codigo, $nome, $usuario, $senha, $perfil) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->usuario = $usuario;
        $this->senha = $senha;
        $this->perfil = $perfil;
  
    }
	
 
    function getCodigo() {
        return $this->codigo;
    }
	
    function getNome() {
        return $this->nome;
    }
	function getUsuario() {
        return $this->usuario;
    }
 function getSenha() {
        return $this->senha;
    }
    function getPerfil() {
        return $this->perfil;
    }

    

 
function setCodigo($codigo) {
        $this->codigo = $codigo;
    }
function setNome($nome) {
        $this->nome = $nome;
    }	
function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }
	

    
    function mostra($conexao, $usuario,$senha) {
		$query = "select * from usuario where usuario ='$usuario' and senha = '$senha'";
        $stmt = $conexao->query($query);
		$user = $stmt->fetch(PDO::FETCH_OBJ);
		$this->usuario = $user->usuario;
		$this->perfil = $user->perfil;
		$this->nome = $user->Nome;
		
		
    }

		
    
function insere($conexao) {
$query = "INSERT INTO usuarios(usuario, senha, perfil, nome,status) VALUES ('$this->usuario','$this->senha','$this->perfil','$this->nome','Ativo')";
$conexao->query($query);

}
function deletar($conexao, $cod) {

$query = "delete from usuarios where cod= '$cod'";
$stmt=$conexao->prepare($query);

$stmt->execute();


}
   


}