<?php 
    abstract class Pessoa {
        private $nome;
        private $idade;
        private $sexo;
        private $experiencia;

        function GanharXp($n) {
            $this-> experiencia += $n;
        }

        public function __construct($no, $id, $sx) {
            $this-> nome = $no;
            $this-> idade = $id;
            $this-> sexo = $sx;
            $this-> experiencia = 0;
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
        public function getExpeiencia() {
            return $this-> experiencia;
        }
        public function setExpeiencia($xp) {
            $this-> sexo = $xp;
        }
    }
?>