
<?php

include("naoLogado.php");

?>
<!DOCTYPE html>
<html lang="en">
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

    <?php
    
  
$filename = "registro.txt";

if (file_exists($filename)) {
    $conteudo = file_get_contents($filename);
    
    echo "<pre>" . htmlspecialchars($conteudo) . "</pre>";
} else {
    echo "O arquivo não existe.";
}
?>


    
</body>
</html>