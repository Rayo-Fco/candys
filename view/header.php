
<?php

require_once __DIR__ . "/../controller/funciones.php";
session_start();

  if(isset($_SESSION["Usuario"]))
  {
      include_once __DIR__ . '/usuario/header-usuario.php';
  }
  elseif (isset($_SESSION["Motel"]))
  {
    include_once __DIR__ . '/motel/header-motel.php';
  }
  elseif (isset($_SESSION["Admin"])) {
    include_once __DIR__ . '/admin/header-admin.php';
  }
  else
  {
    include_once __DIR__ .  '/comun/header-comun.php';
    //require_once(dirname(dirname(__FILE__)) .'/header/sin-registro.php');
    ///  require_once "header/sin-registro.php";
  }



 ?>
