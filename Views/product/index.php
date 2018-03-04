<?php

  use Models\Product as Product;
  use Models\Category as Category;

  $prod = new Product();
  $cat = new Category();
  $result = $prod->list();
  $filter1 =$cat->list(); 
  
 
?>

<h2>Lista de Productos en la tienda</h2>

<table class="table table-hover">
  <thead>
    <tr>
      <th>id</th>
      <th>product_name</th>
      <th>product_description</th>
      <th>units_in_stock</th>
      <th>product_category_id</th>
      <th>reward_points_credit</th>
    </tr>
  </thead>
  <tbody>
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
  </tbody>
</table>

<form action="?/add">
  <fieldset>
    <legend>Formulario [Nuevo producto]</legend>
    <div class="form-group">
      <label for="">id</label>
      <input class="form-control" type="text">
    </div>
    <div class="form-group">
      <label for="">product_name</label>
      <input class="form-control" type="text">
    </div>
    <div class="form-group">
      <label for="">product_description</label>
      <input class="form-control" type="text">
    </div>
    <div class="form-group">
      <label for="">units_in_stock</label>
      <input class="form-control" type="text">
    </div>
    <div class="form-group">
      <label for="">product_category_id</label>
      <select class="custom-select" name="" id="">
  <?php
    while($row=mysqli_fetch_array($filter1))
    {
  ?>
        <option value="<?php echo $row[0];?>"> <?php echo $row[0] . " - " . $row[1]; ?> </option>
  <?php
    }
  ?>
      </select>
    </div>
    <div class="form-group">
      <input class="form-control" type="text">
      <label for="">reward_points_credit</label>
    </div>
  </fieldset>
  </fieldset>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </fieldset>
</form>

<div class="modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>