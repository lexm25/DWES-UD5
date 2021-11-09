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
    $value = "Alejandro Martín Álvarez";
    $edad = 21;
    
    $prueba = setcookie("Nombre", $value, time()+(3600*3), "", "");
    var_dump( $prueba);
    setcookie("Edad",$edad,time()+(3600*3),"","");
    ?>
</body>
</html>