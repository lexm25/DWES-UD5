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
    session_start();

    echo session_id();

    $_SESSION["nombre"] = "joselu";
    $_SESSION["apellido"] = "eslava";


    echo "Mi nombre es " . $_SESSION["nombre"] . ".<br>";
    echo "Y mi apellido " . $_SESSION["apellido"] . ".";
    echo "<br>";
    echo sys_get_temp_dir();
    echo session_save_path();
    ?>
</body>
</html>