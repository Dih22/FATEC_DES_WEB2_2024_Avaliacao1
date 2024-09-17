<?php

session_start();
$_SESSION['usuario'] = 'comun';
header("location:registrar.php");




?>