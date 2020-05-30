<?php

class BaseDeDatos
{


    function ObtenerDB(){

        try {

            $conexion = new PDO('mysql:host=localhost;dbname=candys', 'root', '');
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;

        }
            catch (PDOException $e)
        {
            header("Location:/candys/error.php?error=db");
            die();
        }

    }
}

?>
