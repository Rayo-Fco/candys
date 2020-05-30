<?php
require_once 'funciones.php' ;
session_start();
session_destroy();

enviar("../index.php");
?>
