<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "ejercicio6BBDD.php";

    session_start();

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $usuario = $_POST["usuario"];
            $contrasenya = $_POST["password"];
            
            $usuario = stripslashes($usuario);
            $usuario = strip_tags($usuario);
            $usuario = htmlspecialchars($usuario);
    
            $contrasenya = stripslashes($contrasenya);
            $contrasenya = strip_tags($contrasenya);
            $contrasenya = htmlspecialchars($contrasenya);

            $datos = getUser($usuario);
            
            $_SESSION["perfil"] = $datos["perfil"];

            if($datos){
                $validar = password_verify($contrasenya,$datos["contrasenya"]);

                if ($validar && $_SESSION["perfil"]=="admin"){
                    header("Location: admin.php");
                }
                else if($validar && $_SESSION["perfil"]=="usuario"){
                    header("Location: usuario.php");
                }
                else if($validar && $_SESSION["perfil"]==""){
                    header("Location: ejercicio7.php");
                }
            }
            else{
                echo "Usuario o contraseña incorrectos";
            }
        }
    ?>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" class="form-register" method="POST" enctype="multipart/form-data">
        <h2 class="form-titulo">Introduzca:</h2>
            
            <input type="text" name="usuario" placeholder="Usuario" class="input-20" required>
            <input type="password" name="password" placeholder="Contraseña" class="input-255" required>
                
            <input type="submit" value="Registrar" class="btn-enviar">
        </form>
</body>
</html>