<?php 
    class Mamifero extends Animal {
        private $corPelo;
        
        public function locomover() {
            echo "<p>Correndo</p>";
        }
        public function alimentar() {
            echo "<p>Mamando</p>";
        }
        public function emitirSom() {
            echo "<p>Som de mamifero</p>";
        }

        function getCorPelo() {
            return $this-> corPelo;
        }
        function setCorPelo($cp) {
            $this-> corPelo = $cp;
        }
    }
?>