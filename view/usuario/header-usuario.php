<?php
if (!isset($_SESSION['Usuario']))
{
  header("Location:/candys/error.php?error=acceso");
}
?>

barra usuariosadasd
|


<ul id=”button”>
  <li><a href=#>Moteles</a></li>
  <li><a href=#>Mis Reservas</a></li>
  <li><a href=#>Mi Perfil</a></li>
  <li><a href=#>Contacto</a></li>
 </ul>
<a href="/candys/controller/cerrarsession.php"><button type="button" name="button">Cerrar Session</button></a>
