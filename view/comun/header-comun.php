<div id="logo-div"><a href="/candys/index.php"><img src="/candys/img/logo.png"></a></div>
<div id="login">
  <form method="post" action="/candys/controller/controller-login.php">
          <table id="form-login">
            <tr >
              <td><p id="font-login" >Usuario:</p></td>
              <td><input id="input-login" type="text" name="txtUsuario" maxlength="15"  ></td>
            </tr>
            <tr>
              <td><p id="font-login" >Clave:</p></td>
              <td><input  id="input-login" type="password" name="txtClave" maxlength="22" ></td>
            </tr>
            <tr>
              <td colspan="2"><center><input id="button-login" type="submit" name="" value="Entrar"></center></td>
            </tr>
            <tr>
              <td colspan="2" ><center><a id="font-login" href="/candys/view/comun/registro.php"> Registrarse </a></center></td>
            </tr>
            <tr>
              <td colspan="2">
                <?php
                  if(isset($_GET['error']))
                    {
                      echo '<center><span id="font-alerta">Error!! Usuario y/o Clave Incorrecta</span></center>';
                    }
                    else
                    {
                        echo '<span>&nbsp;</span>';
                    }
                  ?>
              </td>
            </tr>

          </table>
        </form>
</div>
  <div id="menu">
    <ul >
      <li><a href=#>Moteles</a></li>
      <li><a href=#>Quienes Somos</a></li>
      <li><a href=#>Contacto</a></li>
     </ul>
  </div>
