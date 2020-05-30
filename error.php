<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Error</title>
  </head>
  <body>
    PAGINA DE ERRORES
    <?php
    if(isset($_GET['error']))
      {
        switch ($_GET['error']) {
          case 'acceso':
              echo '<center><H1>Acceso Denegado!!!</H1></center>';
          break;
          case 'db':
              echo '<center><H1>Error En la Base de Datos!!!</H1></center>';
          break;
        }

      }
     ?>
    <a href="/candys">INCIO</a>
  </body>
</html>
