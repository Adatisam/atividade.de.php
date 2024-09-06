<?php 
    class Visualisacao {
        private $espectador;
        private $filme;

        public function __construct($es, $f) {
            $this->espectador = $es;
            $this->filme = $f;
            $this->filme->setViews($this->filme->getViews() + 1);
            $this->espectador->settTotAssisti($this->espectador->gettTotAssisti() + 1);
        }

        public function avaliar() {
            $this-> filme->setAv(5);
        }
        public function avaliarNota($nota) {
            $this->filme-> setAv($nota);
        }
        public function avaliarPorcem($por) {
            $nova = 0;
            if ($por <= 20) {
                $nova = 3;
            } elseif ($por <= 50) {
                $nova = 5;
            } elseif ($por <= 90) {
                $nova = 8;
            } else {
                $nova = 10;
            }
            $this-> filme-> setAv($nova);
        }
        
        public function getEspectador() {
            return $this-> espectador;
        }
        public function setEspectador($es) {
            $this->espectador = $es;
        }
        public function getFilme() {
            return $this-> filme;
        }
        public function setFilme($f) {
            $this->filme = $f;
        }
    }
?>