<?php 
    class Ave extends Animal {
        private $corPena;
        
        public function locomover() {
            echo "<p>Voando</p>";
        }
        public function alimentar() {
            echo "<p>Comendo frutas</p>";
        }
        public function emitirSom() {
            echo "<p>Som de ave</p>";
        }
        function fazerNinho() {
            echo "<p>Construiu ninho</p>";
        }

        function getCorEscama() {
            return $this-> corPena;
        }
        function setCorEscama($cpe) {
            $this-> corPena = $cpe;
        }
    }
?>