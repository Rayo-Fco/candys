<?php

require_once __DIR__ . "/controller/funciones.php";
session_start();
////////////////// HEADER ////////////////////

  if(isset($_SESSION["Usuario"]))
  {
      include_once __DIR__ . '/view/usuario/header-usuario.php';
  }
  elseif (isset($_SESSION["Motel"]))
  {
    include_once __DIR__ . '/view/motel/header-motel.php';
  }
  elseif (isset($_SESSION["Admin"])) {
    include_once __DIR__ . '/view/admin/header-admin.php';
  }
  else
  {
    include_once __DIR__ .  '/view/comun/index.php';
    //require_once(dirname(dirname(__FILE__)) .'/header/sin-registro.php');
    ///  require_once "header/sin-registro.php";
  }
////////////////// HEADER ////////////////////


 ?>
