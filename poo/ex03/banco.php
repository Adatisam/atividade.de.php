<?php 
    class ContaBanco {
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        public function abrirConta($t) {
            $this-> setTipo($t);
            $this-> setStatus(true);
            if ($t == "CC") {
                $this-> setSaldo(50);
            } elseif ($t == "CP") {
                $this-> setSaldo(150);
            }
        }

        public function fecharConta() {
            if ($this-> getSaldo() > 0) {
                echo "<p>Conta ainda tem dinheiro, não esta autorizada a fechar!</p>";
            } elseif ($this-> getSaldo() < 0) {
                echo "<p>Conta esta em débito, não esta autorizada a fechar!</p>";
            } else {
                $this-> setStatus(false);
                echo "<p>Conta de " . $this -> getDono() . " fechada com sucesso!</p>";
            }
        }

        public function depositar($v) {
            if ($this-> getStatus()) {
                $this-> setSaldo($this->getSaldo() + $v);
                echo "<p>Deposito no valor de R$ $v na conta de " . $this-> getDono() . ".</p>";
            } else {
                echo "<p>Conta fechada! Não é possivel depositar.</p>";
            }
        }

        public function sacar($v) {
            if ($this-> getStatus(true)) {
                if ($this-> getStatus() >= $v) {
                    $this-> setSaldo($this-> getSaldo() - $v);
                    echo "<p>Saque de $v autorisado na conta de " .$this -> getDono(). ".</p>";
            } else {
                    echo "<p>Saldo insuficiente!</p>";
                }
            } else {
                echo "<p>Impossivel sacar!</p>";
            }
        }
        public function pagarMensal() {
            if ($this-> getTipo() == "CC") {
                $v = 12;
            } elseif ($this-> getTipo() == "CP") {
                $v = 20;
            } 
            if ($this-> getStatus()) {
                $this-> setSaldo($this-> getSaldo() - $v);
                echo "<p>Mensalidade de R$ $v debitada na conta de " . $this-> getDono() ."</p>";
            } else {
                echo "<p>Problema com a conta. Não foi cobrado.</p>";
            }
        }

        public function __construct() {
            $this-> setSaldo(0);
            $this->setStatus(false);
            echo "<p>Conta criada com sucesso!</p";
        }

        public function getnumConta() {
            return $this-> numConta;
        }
        public function setnumConta($numConta) {
            $this-> numConta = $numConta;
        }
        public function getTipo() {
            return $this-> tipo;
        }
        public function setTipo($t) {
            $this-> tipo = $t;
        }
        public function getDono() {
            return $this-> dono;
        }
        public function setDono($d) {
            $this-> dono = $d;
        }
        public function getSaldo() {
            return $this-> saldo;
        }
        public function setSaldo($sal) {
            $this-> saldo = $sal;
        }
        public function getStatus() {
            return $this-> status;
        }
        public function setStatus($st) {
            $this-> status = $st;
        }
    }
?>