<?php

require_once 'conexion.php';

class Usuario{

  private $id_usuario;
  private $nombre;
  private $apellido;
  private $usuario;
  private $email;
  private $clave;
  private $sexo;
  private $telefono;
  private $tipos;

  public function __construct(){
        $this->idusuario = "";
        $this->nombre = "";
        $this->apellido = "";
        $this->usuario = "";
        $this->email = "";
        $this->clave = "";
        $this->sexo = "";
        $this->telefono = "";
        $this->tipo = "";
    }

      public function setIdUsuario($id_usuario){
              $this->idusuario = $id_usuario;
          }
          public function setNombre($nombre){
              $this->nombre=$nombre;
          }
          public function setApellido($apellido){
              $this->apellido=$apellido;
          }
          public function setUsuario($usuario){
              $this->usuario=$usuario;
          }
          public function setClave($clave){
              $this->clave=$clave;
          }
          public function setEmail($email){
              $this->email=$email;
          }
          public function setSexo($sexo){
              $this->sexo=$sexo;
          }
          public function setTelefono($telefono){
              $this->telefono = $telefono;
          }
          public function setTipo($tipo){
              $this->tipo=$tipo;
          }

          public function getIdUsuario(){
              return $this->idusuario;
          }
          public function getNombre(){
              return $this->nombre;
          }
          public function getApellido(){
              return $this->apellido;
          }
          public function getUsuario(){
              return $this->usuario;
          }
          public function getClave(){
              return $this->clave;
          }
          public function getEmail(){
              return $this->email;
          }
          public function getSexo(){
              return $this->sexo;
          }
          public function getTelefono(){
              return $this->telefono;
          }
          public function getTipo(){
              return $this->tipo;
          }



            public function ValidarLogin($usuario,$clave)
            {
                 $query = "SELECT * FROM usuarios WHERE usuario='$usuario' AND clave='$clave'";

                 try {
                      $db = new BaseDeDatos();
                      $datebase = $db->ObtenerDB();
                      $comando = $datebase->prepare($query);
                      $comando->execute();
                      $p = null;
                     if($row = $comando->fetch(PDO::FETCH_ASSOC)) {
                          $p = new Usuario();
                          $p->setIdUsuario($row['id']);
                          $p->setNombre($row['nombre']);
                          $p->setApellido($row['apellido']);
                          $p->setUsuario($row['usuario']);
                          $p->setSexo($row['sexo']);
                          $p->setEmail($row['email']);
                          $p->setTipo($row['tipo']);
                         return $p;
                     }
                      else
                     {
                         return $p;
                     }

                 }catch(PDOException $e){
                     echo 'Error: ' . $e->getMessage();
                 }
             }

             public function ValidarUsuario($usuario){
              $query = "SELECT id FROM usuarios WHERE usuario='$usuario' ";

              try {
                  $db = new BaseDeDatos();
                  $datebase = $db->ObtenerDB();
                  $comando = $datebase->prepare($query);
                  $comando->execute();
                  if($row = $comando->fetch(PDO::FETCH_ASSOC)) {
                      return true;
                  }else{
                      return false;
                  }

              }catch(PDOException $e){
                  echo 'Error: ' . $e->getMessage();
              }
          }

          public function ValidarEmail($email){
               $query = "SELECT id FROM usuarios WHERE email='$email' ";

               try {
                    $db = new BaseDeDatos();
                    $datebase = $db->ObtenerDB();
                    $comando = $datebase->prepare($query);
                    $comando->execute();
                   if($row = $comando->fetch(PDO::FETCH_ASSOC)) {
                       return true;
                   }else{
                       return false;
                   }

               }catch(PDOException $e){
                   echo 'Error: ' . $e->getMessage();
               }
           }

           public function AgregarUsuario(){
              $query="INSERT INTO usuarios (id, nombre, apellido, usuario, clave, email, sexo, tipo, telefono) VALUES (:id_usuario, :nombre, :apellido, :usuario, :clave, :email, :sexo, '1', :telefono)";
              try
              {
                  $db = new BaseDeDatos();
                  $datebase = $db->ObtenerDB();
                  $comando = $datebase->prepare($query);
                  $rows = $comando->execute(array(':id_usuario' => $this->getIdUsuario(), ':nombre' => $this->getNombre(), ':apellido' => $this->getApellido(), ':usuario' => $this->getUsuario(), ':clave' => $this->getClave(),':email' => $this->getEmail(),':telefono' => $this->getTelefono(), ':sexo' => $this->getSexo() ));
                  if( $rows == 1 )
                  {
                    return true;
                  }
                  else
                  {
                    return false;
                  }
              }
              catch(PDOException $e)
              {
                  echo 'Error: ' . $e->getMessage();
              }
          }






          public function __clone()
          {

              trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);

          }
      }
      ?>
