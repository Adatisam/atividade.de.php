<?php 
    require 'lutador.php';
    class luta {
       private $desafiante;
       private $desafiado;
       private $round;
       private $aprovada;

       public function marcarLuta($l1, $l2) {
            if ($l1-> getCategoria() === $l2-> getCategoria() && ($l1 != $l2)) {
                $this-> aprovada = true;
                $this-> desafiado = $l1;
                $this-> desafiante = $l2;
            } else {
                $this-> aprovada = false;
                $this-> desafiado = null;
                $this-> desafiante = null;
            }
       }
       public function lutar() {
            if ($this-> aprovada) {
                $this-> desafiado -> apresentar();
                $this-> desafiante -> apresentar();
                $vencedor = rand(0,2);
                switch ($vencedor) {
                    case 0: //Empate
                        echo "<p>Empate!</p>";
                        $this-> desafiado -> empatarLuta();
                        $this-> desafiante -> empatarLuta();
                        break;
                    case 1: //Desafiado vence
                        echo "O vencedor é ". $this-> desafiado -> getNome(). "!";
                        $this-> desafiado -> ganharLuta();
                        $this-> desafiante -> perderLuta();
                        break;
                    case 2: //Desafiante vence
                        echo "O vencedor é ". $this-> desafiado -> getNome(). "!";
                        $this-> desafiado -> perderLuta();
                        $this-> desafiante -> ganharLuta();
                        break;
                }
            } else {
                echo "<p>A luta foi cancelada!</p>";
            }
       }

       function getDesafiante() {
            return $this-> desafiante;
       }
       function setDesafiante($de) {
            $this-> desafiante = $de;
       }
       function getDesafiado() {
            return $this-> desafiado;
       }
       function setDesafiado($do) {
            $this-> desafiado = $do;
       }
       function getRound() {
            return $this-> round;
       }
       function setRound($r) {
            $this-> round = $r;
       }
       function getAprovada() {
            return $this-> aprovada;
       }
       function setAprovada($a) {
            $this-> aprovada = $a;
       }
    }
?>