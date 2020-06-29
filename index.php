<?php
$errores = '';
$enviado = '';

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $menaje = $_POST['mensaje'];

    if (!empty($nombre)) {
        $nombre = trim($nombre);
        $nombre = filter_var($bombre, FILTER_SAMITIZE_STRING);
    } else {
        $errores .= 'Por favor ingresa un nombre <br />';
    }
    if (!empty($correo)) {
        $correo = filter_var($correo, FILTER_SAMITIZE_EMAIL);

        if(:filter_var($correo, FILTER_SAMITIZE_EMAIL)){
            $errores .= 'Por favor ingresa un correo valido <br />';
        } else {
            $errores .= 'Por favor ingresa un correo <br />';
        }

        if(!empty($mensaje)){
            $mensaje = htmlspecialchars($mensaje);
            $mensaje = trim($mensaje);
            $mensaje = stripcslashes($mensaje);
        } else {
            $errores .= 'Por favor ingresa el mensaje <br />';
        }

        if(!($erroes){
            $enviar_a = 'tunombre@tuempresa.com';
            $asunto = 'Correo enviado desde miPagina.com';
            $mensaje_preparado = "De: $nombre \n";
            $mensaje_preparado .= "Correo: $correo \n";
            $mensaje_preparado .= "Mensaje: $mensaje \n";

            //mail($enviar_a, $asunto, $mensaje_preparado);
            $enviado ='true';
        }
    
}

require 'index.view.php';
?>