<?php 
    class Aluno extends Pessoa {
        private $login;
        private $totAssistido;

        public function assistirMaisUm() {
            $this-> totAssistido ++;
        }

        public function __construct($no, $id, $sx, $log) {
            parent::__construct($no, $id, $sx);
            $this-> login = $log;
            $this-> totAssistido = 0;
        }

        public function getLogin() {
            return $this->login;
        }
        public function setLogin($log) {
            $this->login = $log;
        }
        public function getTotAssistido() {
            return $this->totAssistido;
        }
        public function settTotAssistido($ta) {
            $this->totAssistido = $ta;
        }

    }
?>