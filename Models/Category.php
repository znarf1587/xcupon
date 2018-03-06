<?php
  namespace Models;

  class Category extends Template{
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
     
    }

    public function edit(){
      
    }

    public function delete(){
      
    }

    public function view(){
     
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