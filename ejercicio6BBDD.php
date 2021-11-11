<?php 

function getUser($usuario){
    try {
        $conexion = new PDO("mysql:host=localhost;dbname=ejercicio","developer","developer");

        $sql = $conexion->prepare("SELECT * FROM datos WHERE usuario=?");

        $sql->bindParam(1,$usuario);

        $sql->execute();

        $retorno = $sql->fetch(PDO::FETCH_ASSOC);

        $conexion=null;
        return $retorno;
    } catch (PDOException $e) {
        return false;
    }
}

?>
