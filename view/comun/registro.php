<?php

session_start();

  if(isset($_SESSION["Usuario"]))
  {
      header("Location:/candys/");
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/candys/css/estilo.css">

    <?php
    include 'header-comun.php';
     ?>


  </head>
  <body>
    <div id="cont-registro"></div>
    <div id="cont-registro-info">

      <form method="post" action="/candys/controller/controller-registrar.php" enctype="multipart/form-data">

        <table >
          <tr>
            <td class="ancho90"><p>Usuario:</p></td>
            <td><input type="text" name="txtUsuario" maxlength="22" required></td>
          </tr>
          <tr>
            <td><p>Nombre:</p></td>
            <td><input type="text" name="txtNombre" maxlength="22" required></td>
          </tr>
          <tr>
            <td><p>Apellido:</p></td>
            <td><input type="text" name="txtApellido" maxlength="22" required></td>
          </tr>
          <tr>
            <td><p>Correo:</p></td>
            <td><input type="email" name="txtCorreo" maxlength="22" required></td>
          </tr>
          <tr>
            <td><p>Telefono:</p></td>
            <td><input type="tel" name="txtTelefono" maxlength="9" required></td>
          </tr>
          <tr>
            <td>Sexo:</td>
            <td><select class="select-sexo" name="txtSexo" required>
              <option selected disabled> Seleccione Su Sexo</option>
              <option value="1">Masculino</option>
              <option value="2">Femenino</option>
            </select>
            </td>
          </tr>
          <tr>
            <td><p>Clave:</p></td>
            <td><input type="password" name="txtClave" maxlength="22" required></td>
          </tr>
          <tr>
            <td colspan="2"><center><input class="button-login" type="submit" name="" value="Registrar"></center></td>
          </tr>
        </table>
      </form>
      <?php
          if(isset($_GET['error-usuario']))
            {
              echo '<center><span>Error!! Usuario Ya Registrado</span></center>';
            }
            elseif (isset($_GET['error-email']))
            {
              echo '<center><span>Error!! Email Ya Registrado</span></center>';
            }
            else
            {
                echo '<span>&nbsp;</span>';
            }


          ?>
    </div>





  </body>




</html>
