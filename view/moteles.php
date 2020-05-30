sadas
<?php
require_once  '../model/Motel.php' ;
session_start();
if(isset($_SESSION["Busqueda"]))
{
  $moteles = unserialize($_SESSION["Busqueda"]);

foreach ($moteles as $resul) {
   echo "MOTEL:".$resul->getNombre();
   foreach ($resul->getImagenes() as $img) {
      echo "IMANGEN:".$img;
   }
   echo "</br>";
}
unset( $_SESSION["Busqueda"] );
}
else {
  header("Location:/candys/index.php");
}


 ?>
