<?php
  namespace Models;

  class Store{

    private $id;

    public function __construct(){
      $this->con = new Conexion();
    }

    public function set($atribute,$value){
      $this->$atribute = $value;
    }
    public function get($atribute){
      return $this->$atribute;
    }

    public function listRaiz(){
      $sql = "SELECT * FROM product_category WHERE id=parent_category_id ORDER BY parent_category_id";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }

    public function list()
    {
      $sql = "SELECT * FROM product_category WHERE id <>'{$this->id}' AND parent_category_id='{$this->id}'";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }
    public function listMe()
    {
      $sql = "SELECT * FROM product_category WHERE id='{$this->id}'";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }
  }
?>