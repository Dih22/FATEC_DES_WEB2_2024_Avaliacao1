<?php
include("naoLogado.php");


if(isset($_POST['sair'])){
    session_unset();

    session_destroy();
    header("location:index.html");
}



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="menu">
        <ul>
            <li><a href="verificar.php" class="btM">VERIFICAR</a></li>
            <li><a href="registrar.php" class="btM">REGISTRAR</a></li>
            <li><a href="logaut.php" class="btM">LOGAUT</a></li>
        </ul>
    </div>

    <form action="#" method="POST">

       <label >Deseja sair de sua conta? </label>
       <input type="hidden" name="sair">
       <input type="submit" value="sim" >

    </form>
    
</body>
</html>



