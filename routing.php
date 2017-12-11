<?php

$view = @$_GET['view'];
$title = "";

switch($view) {

    case "detalle_evento":
        $title = "Detalle de mi evento";
    break;

    case "registro_evento":
        $title = "Registro de mi evento";
    break;

    case "form_login":
        $title = "Acceso";
    break;

    case "form_registro":
        $title = "Registro";
    break;

    case "registro_lugar":
        $title = "Registra tu Lugar";
    break;

    case "form_restaurar":
        $title = "Reestablece tu Password";
    break;

    default:
        $title = "Bienvenidos a Conoce tu Ciudad Guzmán";
        $view = "index";
    break;

}