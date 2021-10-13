<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
<?php
$usuario="";
$contrasenya="";
$errorUsuario="";
$errorContrasenya="";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (empty($_POST["usuario"])){
            $errorUsuario = "el usuario debe estar relleno";
        }
        else{
            $usuario= $_POST["usuario"];
        }
        if(empty($_POST["contrasenya"]))
        {
            $errorContrasenya = "la contraseña debe estar rellena";
        }
        else{
            $contrasenya=$_POST["contrasenya"];
        }
        if(!preg_match('/\w{8,}/', $usuario)){
            $errorUsuario = "el usuario '<b>$usuario</b>' no es correcto, debe contener...";
        }
        if(!preg_match("/[A-Z][a-z]{15}[0-9]/", $contrasenya)){
            $errorContrasenya = "la contraseña '<b>$contrasenya</b>' no es correcta, debe contener...";
        }
        $usuario = stripslashes($usuario);
        $usuario = strip_tags($usuario);
        $usuario = htmlspecialchars($usuario);

        $contrasenya = stripslashes($contrasenya);
        $contrasenya = strip_tags($contrasenya);
        $contrasenya = htmlspecialchars($contrasenya);
    }
    ?>