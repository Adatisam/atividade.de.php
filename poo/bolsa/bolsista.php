<?php 
    class Bolsista extends Aluno {
        private $bolsa;
        public function renovarBolsa() {
            echo "<p>Bolsa renovada!</p>";
        }

        public function pagarMensalidade() {
            echo "<p>". $this-> nome. " é bolsista, então na mensalidade tem desconto.</p>";
        }

        public function getBolsa() {
            return $this-> bolsa;
        }
        public function setBolsa($b) {
            $this-> bolsa = $b;
        }
    }
?>