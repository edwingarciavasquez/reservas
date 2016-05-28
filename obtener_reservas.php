<?php
/**
 * Obtiene todas las metas de la base de datos
 */

require 'Meta.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    // Manejar petición GET
    if (isset($_GET['imail']))
    {

    }
    $canchas = Meta::reservas($_GET['imail']);

    if ($canchas) {

        
        $datos  = $canchas;

        print json_encode($datos);
    } else {
        print json_encode(array(   "mensaje" => "Ha ocurrido un error"
        ));
    }
}