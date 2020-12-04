<?php
    include('conexion.php');

    $obj = new Conexion;

    $nombrecon    = $_POST['nombre'];
    $correocon    = $_POST['correo'];
    $asuntocon    = $_POST['asunto'];
    $mensajecon   = $_POST['mensaje'];
     

    //$texto      = "Nombre: " . $usuario . " Contraseña: " . $pass;

    $res = $obj->registrarContacto($nombrecon,$correocon,$asuntocon,$mensajecon);
    if($res == 1){
        $datos  = array('dato' => 'ok');
    }else{
        $datos  = array('dato' => 'no');
    }

    // $datos  = array('datos' => $texto);

    echo json_encode($datos, JSON_FORCE_OBJECT);

?>