<?php

class entrada {

    private $codigo;
    private $codProduto;
    private $codComprador;
	private $codVendedor;
    private $data;
	private $quantidade;
  	
	function __construct($codigo, $codProduto, $codComprador,$codVendedor,$data ,$quantidade) {
        $this->codigo = $codigo;
        $this->codProduto = $codProduto;
        $this->codComprador = $codComprador;
		$this->codVendedor = $codVendedor;
		$this->data = $data;
        $this->quantidade = $quantidade;
		
        
    }
	 
    function getCodigo() {
        return $this->codigo;
    }
    function getDescricao() {
        return $this->descricao;
    }
	function getValor() {
        return $this->valor;
    }
 function getQuantidade() {
        return $this->quantidade;
    }
  function getObs() {
        return $this->obs;
    }  
    

 
function setCodigo($codigo) {
        $this->codigo = $codigo;
    }
function setDescricao($descricao) {
        $this->descricao = $descricao;
    }	
function setValor($valor) {
        $this->valor = $valor;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }
 function setObs($obs) {
        $this->obs = $obs;
    }
 

    
    function mostra($conexao, $nome,$senha) {
		$query = "select * from estranda where nome ='$nome' ";
        $stmt = $conexao->query($query);
		$user = $stmt->fetch(PDO::FETCH_OBJ);
		
		$this->nome = $user->Nome;
		
		
    }

		
    
function insere($conexao) {
	
$query = "INSERT INTO entrada(codProduto, codComprador,codVendedor,data,quantidade) VALUES ('$this->codProduto','$this->codComprador','$this->codVendedor','$this->data','$this->quantidade')";
$conexao->query($query);


}
function deletar($conexao, $cod) {

$query = "delete from entrada where cod= '$cod'";
$stmt=$conexao->prepare($query);

$stmt->execute();


}
   


}