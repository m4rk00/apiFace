<?php
    include('conexion.php');

    $obj = new Conexion;

    $usuario    = $_POST['inputUser'];
    $nombre     = $_POST['inputNom'];
    $pass       = $_POST['inputPassword'];
    $correo     = $_POST['inputMail'];
     

    //$texto      = "Nombre: " . $usuario . " Contraseña: " . $pass;

    $res = $obj->crearUsuario($usuario,$pass,$correo,$nombre);
    if($res == 1){
        $datos  = array('dato' => 'ok');
    }else{
        $datos  = array('dato' => 'no');
    }

    // $datos  = array('datos' => $texto);

    echo json_encode($datos, JSON_FORCE_OBJECT);

?>