<?php
if (!isset($_SESSION['Admin']))
{
  header("Location:/candys/error.php?error=acceso");
}
?>


admins
<ul id=”button”>
  <li><a href=#>Todos los Moteles</a></li>
  <li><a href=#>Reservas</a></li>
  <li><a href=#>Pagos</a></li>
 </ul>
<a href="/candys/controller/cerrarsession.php"><button type="button" name="button">Cerrar Sessio</button></a>
