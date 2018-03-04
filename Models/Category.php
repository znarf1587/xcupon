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
      $sql = "SELECT * FROM product_category ORDER BY parent_category_id";
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

    public function arbol($array){
      $cant = count($array);
      $html = "<ul>";
      
      for($i=0;$i<$cant;$i++)
      {
        if($array[$i][0]==$array[$i][3])
        {
          $html.="<li>".$array[$i][1]."</li>";
          $html.="<ul>";
          for($j=$i+1;$j<$cant;$j++)
          {
            if($array[$j][3]==$array[$i][0])
            {
              $html.="<li>".$array[$j][1]."</li>";
              $html.="<ul>";
              for($k=$j+1;$k<$cant;$k++)
              {
                if($array[$k][3]==$array[$j][0])
                {
                  $html.="<li>".$array[$k][1]."</li>";
                  $html.="<ul>";
                  for($l=$k+1;$l<$cant;$l++)
                  {
                    if($array[$l][3]==$array[$k][0])
                    {
                      $html.="<li>".$array[$l][1]."</li>";
                    }
                  }
                  $html.="</ul>";
                }
              }
              $html.="</ul>";
            }
          }
          $html.="</ul>";
        }
      }

      $html.="</ul>";
      echo $html;
    }
  }
?>