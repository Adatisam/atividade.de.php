<?php 
    require "metodo.php";
    class lutador implements horaDaLuta {
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        public function __construct($no,$na,$id,$al,$pe,$vi,$de,$em) {
            $this-> nome = $no;
            $this-> nacionalidade = $na;
            $this-> idade = $id;
            $this-> altura = $al;
            $this-> setPeso($pe);   
            $this-> vitorias = $vi;
            $this-> derrotas = $de;
            $this-> empates = $em;
        }  
        
        function getNome() {
            return $this-> nome;
        }
        function setNome($no) {
            $this-> nome = $no;
        }
        function getNacionalidade() {
            return $this-> nacionalidade;
        }
        function setNacionalidade($na) {
            $this-> nacionalidade = $na;
        }
        function getIdade() {
            return $this-> idade;
        }
        function setIdade($id) {
            $this-> idade = $id;
        }
        function getAltura() {
            return $this-> altura;
        }
        function setAltura($al) {
            $this-> altura = $al;
        }
        function getPeso() {
            return $this-> peso;
        }
        function setPeso($pe) {
            $this-> peso = $pe;
            $this-> setCategoria();    
        }
        function getCategoria() {
            return $this-> categoria;
        }
        function setCategoria() {
            if ($this-> peso < 52.2 ) {
                $this-> categoria = "Iválido";
            } elseif ($this-> categoria <= 70.3) {
                $this-> categoria = "Pena";
            } elseif ($this-> categoria <= 83.9) {
                $this-> categoria = "Médio";
            } elseif ($this-> categoria <= 120.2) {
                $this-> categoria = "Pesado";
            } else {
                $this-> categoria = "Inválido";
            }
        }
        function getVitorias() {
            return $this-> vitorias;
        }
        function setVitorias($vi) {
            $this-> vitorias = $vi;
        }
        function getDerrotas() {
            return $this-> derrotas;
        }
        function setDerrotas($de) {
            $this-> derrotas = $de;
        }
        function geetEmpates() {
            return $this-> empates;
        }
        function setEmpates($em) {
            $this-> empates = $em;
        }
        
        public function apresentar() {
            echo "<p>-------------------------------</p>";
            echo "<p>CHEGOU A HORA! O lutador " . $this-> getNome();
            echo " veio diretamente de " . $this->getNacionalidade();
            echo ", com " . $this-> getIdade() . " anos, ";
            echo "medindo " . $this->getAltura() . " metros de altura, ";
            echo "pesando " . $this->getPeso() . " Kg, ";
            echo $this-> getVitorias() . " Vitórias, ";
            echo $this-> getDerrotas() . " Derrotas, e ";
            echo $this-> geetEmpates() . " Empates";
        }
        public function status() {
            echo "<p>-------------------------------</p>";
            echo $this-> getNome() . " é um peso " . $this-> getCategoria();
            echo " e já ganhou " . $this-> getVitorias() . " vezes, perdeu " . $this-> getDerrotas() . " e empatou " . $this-> geetEmpates(). "!";
        }
        public function ganharLuta() {
            $this-> setVitorias($this-> getVitorias() + 1);
        }
        public function perderLuta() {
            $this-> setDerrotas($this-> getDerrotas() + 1);
        }
        public function empatarLuta() {
            $this-> setEmpates($this-> geetEmpates() + 1);
        }
    }
?>