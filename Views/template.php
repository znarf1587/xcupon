<?php 
  namespace Views;

  $template = new Template();

  class Template{

    public function __construct(){
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Store</title>
    <link rel="stylesheet" href="<?php echo URL; ?>Views\template\css\mystyles.css">
    <link rel="stylesheet" href="<?php echo URL; ?>Views\template\css\bootstrap.css">
  </head>
  <body>
    <head>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">xCupon<span>STORE</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="category">Category</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="product">Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart">Cart</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    </head>
    <main>
<?php
    }

    public function __destruct(){
?>
    </main>
    <footer>
      <p>
        Modulo de ventas por cupon - versión 1.0<br />
        <strong>Copyright &copy; 2018 - Franz Ferrufino Quispe</strong><br/> 
  			<small>Todos los derechos reservados</small><br/> 
      </p>
    </footer>     
  </body>
  </html>
<?php
    }

  }
?>