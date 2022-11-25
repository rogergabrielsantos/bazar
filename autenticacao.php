<?php
session_start();
require 'classes/conexao.php';
require 'classes/usuarios.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>autenticacao de login</title>

        <script type="text/javascript">
            function login() {
              setTimeout("window.location='menu.php'");

            }

        </script>

    </head>
    <body>

    <?php
    
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
		
        //teste sql injection
        if (strlen($usuario) > 13 OR strlen($senha) > 6) {
            echo ("<script type='text/javascript'> location.href='index.php';</script>");
            $_SESSION['msg'] = "<div class='alert alert-success'>Usuário ou senha incorretos !!!</div>";
        } else{

			
$A = new usuarios("","","","","","");
$A->mostra($conexao, $usuario,$senha);

if($A->getUsuario()){
                $_SESSION['usuario'] = $A->getUsuario();
                $_SESSION['perfil'] = $A->getPerfil();
                $_SESSION['nome'] = $A->getNome();
                echo "<script>login()</script>";
                
                         } 
				else {

                echo ("<script type='text/javascript'> location.href='index.php';</script>");
                $_SESSION['msg'] = "<div class='alert alert-success'>Usuário ou senha incorretos!!!</div>";
            }
		}
        
        ?>

    </body>
</html>