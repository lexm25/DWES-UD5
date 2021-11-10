<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "ejercicio5BBDD.php";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $usuario = $_POST["usuario"];
            $contrasenya = $_POST["password"];
            $numCuenta = $_POST["numCuenta"];
            
            $usuario = stripslashes($usuario);
            $usuario = strip_tags($usuario);
            $usuario = htmlspecialchars($usuario);
    
            $contrasenya = stripslashes($contrasenya);
            $contrasenya = strip_tags($contrasenya);
            $contrasenya = htmlspecialchars($contrasenya);
    
            $numCuenta = stripslashes($numCuenta);
            $numCuenta = strip_tags($numCuenta);
            $numCuenta = htmlspecialchars($numCuenta);

            $passwordEncr = password_hash($contrasenya,PASSWORD_DEFAULT);

            insertarBD($usuario,$passwordEncr,$numCuenta);
        }
    
    ?>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" class="form-register" method="POST" enctype="multipart/form-data">
        <h2 class="form-titulo">Introduzca:</h2>
            
            <input type="text" name="usuario" placeholder="Usuario" class="input-20" required>
            <input type="password" name="password" placeholder="Contraseña" class="input-255" required>
            <input type="text" name="numCuenta" placeholder="Número cuenta Bancaria" class="input-100" required>
                
            <input type="submit" value="Registrar" class="btn-enviar">
        </form>
</body>
</html>