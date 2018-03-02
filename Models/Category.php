<?php
  namespace Models;

  class Category{
    private $id;
	  private $category_name;
    private $max_reward_points_encash;
    private $parent_category_id;
    
    
    public function __construct(){
      $this->con = new Conexion();
    }

    public function set($atribute,$value){
      $this->$atribute = $value;
    }
    public function get($atribute){
      return $this->$atribute;
    }

    public function list(){
      $sql = "SELECT * FROM product_category";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }

    public function add($type, $value){
      $sql = "INSERT INTO empresa(nit, nombre, logo, id_color)
              VALUES ('{$this->nit}','{$this->nombre}','{$this->logo}','{$this->color}')";
      $this->con->consultaSimple($sql);
    }

    public function edit(){
      $sql = "UPDATE empresa set nit = '{$this->nit}', nombre = '{$this->noombre}', logo = '{$this->logo}', id_color = '{$this->color}'";
      $this->con->consultaSimple($sql);
    }

    public function delete(){
      $sql = "DELETE FROM empresa WHERE nit = '{$this->nit}'";
      $this->con->consultaSimple($sql);
    }

    public function view(){
      $sql = "SELECT * FROM empresa WHERE nit = '{$this->nit}'";
      $datos = $this->con->consultaRetorno($sql);
      $row = mysqli_fetch_assoc($datos);
      return $row;
    }
  }
?>