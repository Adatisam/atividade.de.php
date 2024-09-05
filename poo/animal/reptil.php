<?php 
    class Reptil extends Animal {
        private $corEscama;
        
        public function locomover() {
            echo "<p>Rastejando</p>";
        }
        public function alimentar() {
            echo "<p>Comendo</p>";
        }
        public function emitirSom() {
            echo "<p>Som de réptil</p>";
        }

        function getCorEscama() {
            return $this-> corEscama;
        }
        function setCorEscama($ce) {
            $this-> corEscama = $ce;
        }
    }
?>