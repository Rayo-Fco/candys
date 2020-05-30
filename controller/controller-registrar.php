<?php
require_once 'funciones.php' ;
session_start();

if (isset($_POST['txtTelefono']) ||isset($_POST['txtNombre']) || isset($_POST['txtApellido']) || isset($_POST['txtUsuario']) || isset($_POST['txtCorreo']) || isset($_POST['txtSexo']) || isset($_POST['txtClave']) || isset($_SESSION['Usuario']) )
 {
     $nombre = $_POST['txtNombre'];
     $apellido = $_POST['txtApellido'];
     $usuario = $_POST['txtUsuario'];
     $correo = $_POST['txtCorreo'];
     $sexo = $_POST['txtSexo'];
     $clave = $_POST['txtClave'];
     $telefono = $_POST['txtTelefono'];

     require_once  '../model/Usuario.php';

       $u = new Usuario();
       $u->setNombre($nombre);
       $u->setApellido($apellido);
       $u->setUsuario($usuario);
       $u->setEmail($correo);
       $u->setSexo($sexo);
       $u->setClave($clave);
       $u->setTelefono($telefono);


     if ($u->ValidarEmail($correo))
       {
         enviar("/candys/view/comun/registro.php?error-email");

       }
       else
       {
         if ($u->ValidarUsuario($usuario))
         {
           enviar("/candys/view/comun/registro.php?error-usuario");
         }
         else
         {
           if ($u->AgregarUsuario()) {

             $_SESSION['Usuario'] = serialize($u);

             enviar("/candys/index.php");

           }
           else {
             enviar("/candys/view/comun/registro.php");
           }


         }
       }



  }
  else
  {
    enviar("/candys/view/comun/registro.php");
  }









 ?>
