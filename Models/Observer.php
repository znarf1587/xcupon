<?php
    namespace Models;

    class Observer implements \SplSubject /*Empezamos importando la interfaz del sujeto*/
    {
        protected $storage;
    
        public function __construct(\SplObjectStorage $storage)
        {
            $this->storage = $storage;
        }
    
        public function inCart()
        {
            // compra
            $this->notify('En carro');
        }
    
        public function sold()
        {
            // vende
            $this->notify('vendido');
        }
    
        public function attach(\SplObserver $observer)
        {
            $this->storage->attach($observer);
        }
    
        public function detach(\SplObserver $observer)
        {
            $this->storage->detach($observer);
        }
    
        public function notify($event = '')
        {
            foreach ($this->storage as $observer)
                $observer->update($this, $event);
        }
    }
?>