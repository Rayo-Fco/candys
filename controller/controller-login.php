 <?php
require_once 'funciones.php' ;
session_start();

if ( isset($_POST['txtUsuario']) || isset($_POST['txtClave']) )
 {

     $usuario = $_POST['txtUsuario'];
     $clave = $_POST['txtClave'];

     require_once  '../model/Usuario.php' ;

      $u = new Usuario();

      $p = $u->ValidarLogin($usuario,$clave);

      if ($p != null)
      {
        switch ($p->getTipo())
        {
          case "1":
                  $_SESSION['Usuario'] = serialize($p);
            break;
          case "2":
                  $_SESSION['Motel'] = serialize($p);
              break;
          case "3":
                  $_SESSION['Admin'] = serialize($p);
            break;

        }

        enviar("../index.php");
      }
      else
      {
        enviar("../index.php?error");
      }





  }
  else
  {
    enviar("../index.php");
  }









 ?>
