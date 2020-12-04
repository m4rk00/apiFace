<?php
    include('conexion.php');

    $obj = new Conexion;

    $nombre    = $_POST['inputName'];
    $correo     = $_POST['inputMail'];
    $direccion       = $_POST['inputAddress'];
    $cp    = $_POST['inputCp'];
     

    //$texto      = "Nombre: " . $usuario . " Contraseña: " . $pass;

    $res = $obj->crearEnvio($nombre,$correo,$direccion,$cp);
    if($res == 1){
        $datos  = array('dato' => 'ok');
    }else{
        $datos  = array('dato' => 'no');
    }

    // $datos  = array('datos' => $texto);

    echo json_encode($datos, JSON_FORCE_OBJECT);

?>