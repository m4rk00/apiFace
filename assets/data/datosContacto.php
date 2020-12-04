<?php
class Conexion{
    var $conn;

    function conectar(){
        $conn = null;
     try{
        $conn = new PDO('mysql:host=localhost;dbname=apiface', 
                            'root',
                             '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //echo 'Se estableció la conexión <br> <br>';
        
   }catch(PDOException $e){
        die(print_r('Error conectando a la base de datos:' . $e->getMessage()));

       
   }
   return $conn;
        }
        function buscarProducto(){
            $con = $this->conectar();
            
            $consulta= 'SELECT * FROM producto';
            $stmt = $con->prepare($consulta);                
            $stmt->execute();
            $registros = $stmt->fetchAll(PDO::FETCH_ASSOC);
           // json_encode($res, JSON_FORCE_OBJECT);
            return $registros;

        }

        

        function buscarUsuario($user, $pass){
            $con = $this->conectar(); //mandar llamar al metodo de conectar

            $consulta = 'SELECT nombre 
                                    FROM usuario 
                                    WHERE usuario=:usuario 
                                    AND contrasena=:pass';

            $stmt = $con->prepare($consulta);                
            $stmt->execute(array(':usuario'=>$user,':pass'=>$pass));
            $registro = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $numRegistros = count($registro);

            return $numRegistros;

        }

        function crearUsuario($nombre,$pass,$correo,$user){
            $con = $this->conectar(); //mandar llamar al metodo de conectar

            $stmt = $con->prepare('INSERT INTO usuario (nombre, contrasena, correo_e, usuario)
            VALUES (:user, :pass, :mail, :nom)');
            $rows = $stmt->execute(array(':user'=>$user,
                ':pass'=>$pass,
                ':mail'=>$correo,
                ':nom'=>$nombre));
                
            return $rows;

        }

        function registrarContacto($nombrecon,$correocon,$asuntocon,$mensajecon){
            $con = $this->conectar(); //mandar llamar al metodo de conectar

            $stmt = $con->prepare('INSERT INTO contacto (nombre_con, correo_con, asunto_con, mensaje_con)
            VALUES (:nomcon, :mailcon, :asucon, :mencon)');
            $rows = $stmt->execute(array(':nomcon'=>$nombrecon,
                ':mailcon'=>$correocon,
                ':asucon'=>$asuntocon,
                ':mencon'=>$mensajecon));
                
            return $rows;
        }


        function crearEnvio($nombre,$correo,$direccion,$cp){
            $con = $this->conectar(); //mandar llamar al metodo de conectar

            $stmt = $con->prepare('INSERT INTO envio (nombre, correo, addres, cp)
            VALUES (:nombre, :mail, :addres, :cp)');
            $rows = $stmt->execute(array(':nombre'=>$nombre,
                ':mail'=>$correo,
                ':addres'=>$direccion,
                ':cp'=>$cp));
                
            return $rows;
        }


    }
?>