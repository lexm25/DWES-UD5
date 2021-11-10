    <?php 

        function insertarBD($usuario,$password,$numCuentaBancaria){
            try {
                $conexion = new PDO("mysql:host=localhost;dbname=ejercicio","developer","developer");

                $sql = $conexion->prepare("INSERT INTO datos (usuario,contrasenya,numCuentaBancaria) VALUES (?,?,?)");
        
                $sql->bindParam(1,$usuario);
                $sql->bindParam(2,$password);
                $sql->bindParam(3,$numCuentaBancaria);

                $sql->execute();

                $conexion=null;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            
        }
        

    ?>
