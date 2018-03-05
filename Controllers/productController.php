<?php
  namespace Controllers;

  use Models\Product as Product;

  class productController{

    private $product;

    public function __construct(){
      $this->product = new Product();
    } 

    public function index(){
      $datos = $this->product->list();
      return $datos;
    }

    public function guardar()
    {
      echo "se ha guardado";
    }
  }
?>