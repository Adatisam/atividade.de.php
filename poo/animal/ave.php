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

        function getCorPena() {
            return $this-> corPena;
        }
        function setCorPena($cpe) {
            $this-> corPena = $cpe;
        }
    }
?>