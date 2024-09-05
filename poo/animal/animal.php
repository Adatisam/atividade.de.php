<?php 
    abstract class Animal {
        protected $peso;
        protected $idade;
        protected $membro;

        abstract function locomover();
        abstract function alimentar();
        abstract function emitirSom();

        function getPeso() {
            return $this-> peso;
        }
        function setPeso($p) {
            $this-> peso = $p;
        }
        function getIdade() {
            return $this->idade;
        }
        function setIdade($i) {
            $this->idade = $i;
        }
        function getMembro() {
            return $this-> membro;
        }
        function setMembro($m) {
            $this->membro = $m;
        }
    }
?>