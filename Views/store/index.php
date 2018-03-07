<?php
  use Models\Product as Product;
  use Models\Category as Category;
  // use Models\Store as Store;

  $prod = new Product();
  $cat = new Category();
  // $tore = new Store();


  $result = $prod->lista();
  $filter1 = $cat->lista(); 
  // $indice = $tore->listRaiz();

  

?>

<div class="jumbotron">
  <h1 class="display-4">Bienvenido a xCuponSTORE</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>
<div class="catalog-card">
<?php
while($catalogo = mysqli_fetch_array($datos))
{
?>
  <div class="card border-primary mb-3" style="max-width: 20rem;">
    <div class="card-header"><?php echo $catalogo[1];?></div>
    <div class="card-body">
      <!-- <img style="height: 200px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image"> -->
      <img src="<?php echo URL;?>Views/template/img/<?php echo $catalogo[0]; ?>.jpg" alt="Card image">
      <h4 class="card-title"><?php echo $catalogo[1];?></h4>
      <a href="store/seccion/<?php echo $catalogo[0];?>" class="btn btn-outline-primary">Ver Categoria</a>
    </div>
  </div>
<?php
}
?>
</div>