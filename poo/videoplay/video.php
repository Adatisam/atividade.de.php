<?php 
    class Video implements AcesVideo {
        private $titulo;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reproduzindo;

        public function play() {
            $this-> reproduzindo = true;
        }
        public function pause() {
            $this-> reproduzindo = false;
        }
        public function like() {
            $this-> curtidas ++;
        }

        public function __construct($titulo) {
            $this->titulo = $titulo;
            $this->avaliacao = 1;
            $this->views = 0;
            $this->curtidas = 0;
            $this->reproduzindo = false;
        }

        public function getTitulo() {
            return $this->titulo;
        }
        public function setTitulo($t) {
            $this->titulo = $t;
        }
        public function getAv() {
            return $this->avaliacao;
        }
        public function setAv($av) {
            $this->avaliacao = $av;
        }
        public function getViews() {
            return $this->views;
        }
        public function set($vw) {
            $this->views = $vw;
        }
        public function getCurtidas() {
            return $this->curtidas;
        }
        public function setCurtidas($c) {
            $this->curtidas = $c;
        }
        public function getReproduzindo() {
            return $this->reproduzindo;
        }
        public function setReproduzindo($r) {
            $this->reproduzindo = $r;
        }
    }
?>