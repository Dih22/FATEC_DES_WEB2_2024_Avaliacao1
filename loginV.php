<?php

$nome = $_POST['nome'];
$senha = $_POST['senha'];
session_start();

if($nome == "coordenacao" && $senha == "coordenacao"){
    $_SESSION["usuario"] = "codenador";
    header("location:home.php");


}else if($nome == "tecnicos" && $senha == "tecnicos"){
    $_SESSION["usuario"] = "tecnico";
    header("location:home.php");


}else{
    header("location:index.html?mensagem=User ou password invalidos!");
}


?>