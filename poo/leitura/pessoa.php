<?php 
    class Pessoa { //diz que tem um erro aqui!
        private $nome;
        private $idade;
        private $sexo;

        public function fazerAniversario() {
            $this-> idade ++;            
        }

        public function __construct($no, $id, $sx) {
            $this-> nome = $no;
            $this-> idade = $id;
            $this-> sexo = $sx;
        }
        
        public function getNome() {
            return $this-> nome;
        }
        public function setNome($no) {
            $this-> nome = $no;
        }
        public function getIdade() {
            return $this-> idade;
        }
        public function setIdade($id) {
            $this-> idade= $id;
        }
        public function getSexo() {
            return $this-> sexo;
        }
        public function setSexo($sx) {
            $this-> sexo = $sx;
        }
    }
?>