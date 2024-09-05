<?php 
    class Aquatico extends Animal {
        private $corEscama;
        
        public function locomover() {
            echo "<p>Nadando</p>";
        }
        public function alimentar() {
            echo "<p>Comendo substãmcias</p>";
        }
        public function emitirSom() {
            echo "<p>Sem som</p>";
        }
        function soltarBolha() {
            echo "<p>Soltou uma bolha</p>";
        }

        function getCorEscama() {
            return $this-> corEscama;
        }
        function setCorEscama($cex) {
            $this-> corEscama = $cex;
        }
    }
?>