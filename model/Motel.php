<?php

require_once 'conexion.php';

class Motel{

  private $id_motel;
  private $nombre;
  private $direccion;
  private $comuna;
  private $telefono;
  private $descripcion;
  private $imagenes;

  public function __construct(){
    $this->idmotel = "";
    $this->nombre = "";
    $this->direccion = "";
    $this->comuna = "";
    $this->telefono = "";
    $this->descripcion = "";
    $this->imagenes = "";
  }
  public function setIdMotel($id_motel){
          $this->idmotel= $id_motel;
  }
  public function setNombre($nombre){
          $this->nombre = $nombre;
  }
  public function setDireccion($direccion){
          $this->direccion = $direccion;
  }
  public function setComuna($comuna){
          $this->comuna = $comuna;
  }
  public function setTelefono($telefono){
          $this->telefono = $telefono;
  }
  public function setDescripcion($descripcion){
          $this->descripcion = $descripcion;
  }
  public function setImagenes($imagenes){
          $this->imagenes = $imagenes;
  }

  public function getIdMotel(){
      return $this->motel;
  }
  public function getNombre(){
      return $this->nombre;
  }
  public function getDireccion(){
      return $this->direccion;
  }
  public function getComuna(){
      return $this->comuna;
  }
  public function getTelefono(){
      return $this->telefono;
  }
  public function getDescripcion(){
      return $this->descripcion;
  }
  public function getImagenes(){
      return $this->imagenes;
  }

  public function BuscarMotel($comuna)
  {
       $query = "SELECT * FROM moteles WHERE comuna LIKE '$comuna' ";

       try {
            $db = new BaseDeDatos();
            $datebase = $db->ObtenerDB();
            $comando = $datebase->prepare($query);
            $comando->execute();
            $p = array();
           while($row = $comando->fetch(PDO::FETCH_ASSOC)) {
                $m = new Motel();
                $m->setIdMotel($row['id']);
                $id = $row['id'];
                $m->setNombre($row['nombre']);
                $m->setDireccion($row['direccion']);
                $m->setComuna($row['comuna']);
                $m->setTelefono($row['telefono']);
                        $query2 = "SELECT * FROM imagenes WHERE id_motel =$id ";
                        $datebase2 = $db->ObtenerDB();
                        $comando2 = $datebase2->prepare($query2);
                        $comando2->execute();
                        $imagen = array();
                       while($row2 = $comando2->fetch(PDO::FETCH_ASSOC)) {
                        array_push($imagen,$row2['url']);
                       }
                $m->setImagenes($imagen);
                array_push($p, $m);
           }
           return $p;
       }catch(PDOException $e){
           echo 'Error: ' . $e->getMessage();
       }
   }










}

 ?>
