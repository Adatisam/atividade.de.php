<?php 
    class caneta {
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;
        protected $destanpada;
        
         public function rabiscar() {
            if ($this-> tampada == true) {
                echo "<p>ERRO! Não posso rabiscar!</p>";
            } else {
                echo "<p>Estou rabiscando, escrevendo...</p>";
            }  
        }
        public function tampar() {
            $this-> tampada = true;
        }
        public function destampar() {
            $this-> tampada = false;
        }
    }
?>
