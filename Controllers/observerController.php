<?php
  namespace Controllers;

  use Models\Observer as Observer;

  class observerController implements \SplObserver /*seguimos con lai implementacion del observer*/
  {
    private $articulo;

    public function __construct(){
      /*Creamos el objeto*/
      $this->articulo = new Observer(new \SplObjectStorage());
    }

    public function index(){
      /*vinculamos el artículo al observer*/
      $this->articulo->attach(new observerController()); 
      /*imprimiría en pantalla que se encuentra en carro*/
      $this->articulo->inCart();
      /*imprimiría que se ha vendido*/
      $this->articulo->sold(); 
    }
    
    public function update(\SplSubject $subject, $event = ''){
      if ($event == 'comprado')
        echo 'El artículo se ha comprado' . PHP_EOL;
      else if ($event == 'vendido')
        echo 'El artículo se ha vendido' . PHP_EOL;
    }
  }
?>