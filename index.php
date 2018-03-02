<?php
  define('DS', DIRECTORY_SEPARATOR);
  define('ROOT', realpath(dirname(__FILE__)) . DS);

  require_once "Config/Autoload.php";
  Config\Autoload::run();
  new Config\Request();
?>

<!-- <!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>xCupon :: Modulo de Ventas </title>
</head>
<body>
  <header>
    <div>
      <h1>XCUPON</h1>
    </div>
    <nav>
      <ul>
        <li>Productos</li>
        <li>Categorias</li>
        <li>Ventas</li>
      </ul>
    </nav>
  </header>
  <main>

  </main>
  <footer>
    <p>
			<strong>Copyright &copy; 2018 </strong>
			<em>Modulo de ventas</em> Todos los derechos reservados.</p>
		<p>
			<strong>Versión</strong> 1.0</p>
  </footer>
</body>
</html> -->