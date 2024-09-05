<?php 
    class Cachorro extends Mamifero {
        public function emitirSom() {
            echo "<p>Latindo</p>";
        }
        public function reagirFrase($frase) {
            if ($frase == "Toma comida" || $frase == "Olá") {
                echo "<p>Abanar o rabo e latir</p>";
            } else {
                echo "<p>Rosnar</p>";
            }
        }
        public function reagirHora($hora,$min) {
            if ($hora < 12) {
                echo "<p>Abanar o rab</p>";
            } elseif ($hora >= 18) {
                echo "<p>Ignorar</p>";
            } else {
                echo "<p>Abanar o rabo e latir</p>";
            }
        }
        public function reagirDono($dono) {
            if ($dono) {
                echo "<p>Abanar o rabo</p>";
            } else {
                echo "<p>Rosnar e latir</p>";
            }
        }
        public function reagirIdadePeso($idade, $peso) {
            if ($idade < 5) {
                if ($idade < 10) {
                    echo "<p>Abanar o rabo</p>";
                } else {
                    echo "<p>Latir</p>";
                }
            } else {
                if ($peso < 10) {
                    echo "<p>Rosnar e latir</p>";
                } else {
                    echo "<p>Ignorar</p>";
                }
            }
        }
    }
?>