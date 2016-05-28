<?php
/**
 * Obtiene todas las metas de la base de datos
 */

require 'Meta.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    // Manejar petición GET
    if (isset($_GET['fecha_reserva']))
    {

    }
    $canchas = Meta::insert($_GET['fecha_reserva'],$_GET['$fecha_creacion'],$_GET['$hora_inicio'],$_GET['$hora_fin'],$_GET['$usuraios_idusuraios'],$_GET['$canchas_idcanchas']);

    if ($canchas) {
        
        $datos  = $canchas;

        print json_encode(array("mensaje" => "insercion exitosa"));
    } else {
        print json_encode(array(   "mensaje" => "Ha ocurrido un error"
        ));
    }
}