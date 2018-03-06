<?php
  namespace Models;

  class Product extends Template{
    private $id;
	  private $product_name;
	  private $product_description;
    private $units_in_stock;
    private $product_category_id;
    private $reward_points_credit;
    
    
    public function __construct(){
      $this->con = new Conexion();
    }

    public function list(){
      $sql = "SELECT * FROM product";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }

    public function add($type, $value){
     
    }

    public function edit(){
      
    }

    public function delete(){
      
    }

    public function view(){
      
    }
  }
?>