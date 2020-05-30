<?php
require_once 'funciones.php' ;
session_start();

if ( isset($_POST['txtBusqueda']))
{

    $busqueda = $_POST['txtBusqueda'];

    require_once  '../model/Motel.php' ;

     $m = new Motel();
     $moteles = array();
     $moteles = $m->BuscarMotel($busqueda);
     $_SESSION['Busqueda'] = serialize($moteles);

     enviar("/candys/view/moteles.php");


}
else
 {
   enviar("../index.php");
 }

?>
