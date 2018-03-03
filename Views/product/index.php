<?php

  use Models\Product as Product;

  $p = new Product();
  $result = $p->list();
  
 
?>

<h2>Lista de Productos en la tienda</h2>

<table>

  <tr>
    <th>id</th>
    <th>product_name</th>
    <th>product_description</th>
    <th>units_in_stock</th>
    <th>product_category_id</th>
    <th>reward_points_credit</th>
  </tr>
<?php
  while($row=mysqli_fetch_array($result))
  {
?>
    <tr>
      <td><?php echo $row[0]?></td>
      <td><?php echo $row[1]?></td>
      <td><?php echo $row[2]?></td>
      <td><?php echo $row[3]?></td>
      <td><?php echo $row[4]?></td>
      <td><?php echo $row[5]?></td>
    </tr>
<?php
  }
?>
</table>