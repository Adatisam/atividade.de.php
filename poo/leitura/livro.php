<?php 
    require 'pessoa.php';
    require 'publicacao.php';

    class livro implements publicacao {
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        public function detalhes() {
            echo "Livro ". $this-> titulo. " escrito por ". $this-> autor;
            echo "<br> Páginas: ". $this-> totPaginas;
            echo "Sendo lido por ". $this-> leitor-> getNome();
        }
        function __construct($ti, $au, $tpg, $lt) {
            $this-> titulo = $ti;
            $this-> autor = $au;
            $this-> totPaginas = $tpg;
            $this-> leitor = $lt;
        }

        public function abrir() {
            $this-> aberto = true;
        }
        public function fechar() {
            $this-> aberto = false;
        }
        public function folhear($f) {
            if ($f > $this-> totPaginas) {
                $this-> pagAtual = 0;
            } else {
                $this-> pagAtual = $f;
            }
        }
        public function avancarPag() {
            $this-> pagAtual ++;
        }
        public function voltarPag() {
            $this-> pagAtual --;
        }

        public function getTitulo() {
            return $this-> titulo;
        }
        public function setTitulo($ti) {
            $this-> titulo = $ti;
        }
        public function getAutor() {
            return $this-> autor;
        }
        public function setAutor($au) {
            $this-> autor = $au;
        }
        public function getTotPaginas() {
            return $this-> totPaginas;
        }
        public function setTotPaginas($tpg) {
            $this-> totPaginas = $tpg;
        }
        public function getAberto() {
            return $this-> aberto;
        }
        public function setAberto($ab) {
            $this-> aberto = $ab;
        }
        public function getLeitor() {
            return $this-> leitor;
        }
        public function setLeitor($lt) {
            $this-> leitor = $lt;
        }

    }

    
?>