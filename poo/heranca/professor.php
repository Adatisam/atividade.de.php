<?php 
    class Professor extends Pessoa {
        private $especialidade;
        private $salario;

        public function receberAum($aum) {
            $this-> salario += $aum;
        }

        public function getEsp() {
            return $this->especialidade;
        }
        public function setEsp($esp) {
            $this-> especialidade = $esp;
        }
        public function getSal() {
            return $this->salario;
        }
        public function setSal($sal) {
            $this->salario = $sal;
        }
    }
?>