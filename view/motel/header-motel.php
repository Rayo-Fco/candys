<?php
if (!isset($_SESSION['Motel']))
{
  header("Location:/candys/error.php?error=acceso");
}
?>
MOTEL ADMINSTRADOR

<ul id=”button”>
  <li><a href=#>Mi Moteles</a></li>
  <li><a href=#>Mis Reservas</a></li>
  <li><a href=#>Mis Pagos</a></li>
  <li><a href=#>Ayuda</a></li>
 </ul>
<a href="/candys/controller/cerrarsession.php"><button type="button" name="button">Cerrar Sessio</button></a>
