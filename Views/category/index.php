<h1>Vista de  categorias</h1>
<?php

  use Models\Category as Category;

  $cat = new Category();
  $result = $cat->list();

  $catalogo = array(
            'items' => array(),
            'parents' => array()
  );
  
  $mc = array();
  while ($items = mysqli_fetch_array($result)) {
        // Create current menus item id into array
        $catalogo['items'][$items['id']] = $items;
        // Creates list of all items with children
        $catalogo['parents'][$items['parent_category_id']][] = $items['id'];

        array_push($mc,$items); 
}


$cat->arbol($mc);

  // var_dump($catalogo);
?>