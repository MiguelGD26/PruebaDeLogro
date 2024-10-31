<?php 
require_once("../modelo/modelo.php");
$denuncias = new Denuncias();
$datos = $denuncias->getDenuncias();
require_once("../vista/vista.php");

if (isset($_GET["accion"]) && $_GET["accion"] === 'obtener') {
    if (isset($_GET["id"]) && $_GET["id"] !== '') {
        $id = $_GET["id"];
        $denuncias = new Denuncias();
        $denuncia = $denuncias->getDenuncia($id); // Método para obtener la denuncia por ID

        header('Content-Type: application/json');
        echo json_encode($denuncia);
        exit();
    }
}