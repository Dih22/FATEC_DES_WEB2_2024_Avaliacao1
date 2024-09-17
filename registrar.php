
<?php

include("naoLogado.php");


if(isset($_POST['laboratorios']) && isset($_POST['data']) && isset($_POST['conteudo']) && isset( $_POST['curso']) ){

    $laboratorio = $_POST['laboratorios'];
    $data = $_POST['data'];
    $conteudo = $_POST['conteudo'];
    $curso = $_POST['curso'];
   
    echo $laboratorio." | ". $data." | ". $conteudo." | ". $curso;

    $arquivo = fopen("registro.txt", "a");
    $envia =
    fwrite($arquivo, $laboratorio." | ". $data." | ". $conteudo."\n");
    fclose($arquivo);
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
            <li><a href="verificar" class="btM">VERIFICAR</a></li>
            <li><a href="registrar.php" class="btM">REGISTRAR</a></li>
            <li><a href="logaut.php" class="btM">LOGAUT</a></li>
        </ul>
    </div>

    <h1>Registrar solicitação</h1>

    <form action="#" method="post">
    <label >Laboratório</label><br>
     <select name="laboratorios">
        <option value="laboratorio1">Laboratório 1</option>
        <option value="laboratorio2">Laboratório 2</option>
        <option value="laboratorio3">Laboratório 3</option>
     </select>
     <br><br>
     <label >Plazo limite</label><br>
     <input type="date" name="data">
     <br><br>
     <label >solicitação</label><br>
     <input type="text" name="conteudo">
     <br><br>
     <label >curso atendido</label><br>
     <select name="curso">
        <option value="">DSM ou GE</option>
        <option value="DSM">DSM</option>
        <option value="GE">GE</option>
     </select>
     <br><br>
     <input type="submit" value="Enviar">

    </form>
    
</body>
</html>