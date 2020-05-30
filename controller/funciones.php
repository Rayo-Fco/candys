<?php


function enviar($url)
{
    header("Location:$url");
}

function VolverAtras()
{
  echo "<script type=\"text/javascript\">
           history.go(-1);
       </script>";
}


?>
