<?php
  namespace Controllers;

  use Models\Store as Store;

  class storeController{

    private $tienda;

    public function __construct(){
      $this->tienda = new Store();
    } 

    public function index(){
      $datos = $this->tienda->listRaiz();
      return $datos;
    }
    public function seccion($id)
    {
      $this->tienda->set("id",$id);
      $datos = $this->tienda->lista();
      if (mysqli_num_rows($datos)>0)
        return $datos;
      else
        return $datos=$this->tienda->listMe();
    }
  }
?>