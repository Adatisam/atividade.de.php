<?php 
    class Aluno extends Pessoa {
        private $matricula;
        private $curso;

        public function pagarMensalidade() {
            echo "Pagando mensalidade do ". $this-> nome;
        }

        public function getMatr() {
            return $this->matricula;
        }
        public function setMatr($m) {
            $this->matricula = $m;
        }
        public function getCurso() {
            return $this->curso;
        }
        public function setCurso($c) {
            $this->curso = $c;
        }
    }
?>