<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/candys/css/estilo.css">
    <title>Candy's Moteles al paso</title>
    <?php include "header-comun.php" ?>
  </head>
  <body>
    <div id="busqueda">
      <p>Encuentra Tu Motel Cercano?</p>
      <form method="post" action="/candys/controller/controller-busqueda.php">
      <input id="input-busqueda" type="text" name="txtBusqueda" value="" placeholder="Comuna">
      <input id="button-busqueda" type="submit" name="btnBusqueda" value="Buscar">
    </form>
    </div>

  </body>
</html>
