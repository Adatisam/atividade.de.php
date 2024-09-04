<?php 
    class Funcionario extends Pessoa {
        private $setor;
        private $trabalhando;

        public function mudarTrabalho() {
            $this->trabalhando = ! $this->trabalhando;
        }

        public function getSetor() {
            return $this->setor;
        }
        public function setSetor($st) {
            $this->setor = $st;
        }
        public function getTrabalhando() {
            return $this->trabalhando;
        }
        public function setTrabalhabdo($tb) {
            $this->trabalhando = $tb;
        }
    }
?>