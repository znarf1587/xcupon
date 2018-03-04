<?php
  namespace Models;

  class Store{

    public function __construct(){
      $this->con = new Conexion();
    }

    public function listRaiz(){
      $sql = "SELECT * FROM product_category WHERE id=parent_category_id ORDER BY parent_category_id";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }
  }
?>