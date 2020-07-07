<?php
    class ContaBanco{
        public $numConta;
        protected $tipo;
        private $donoConta;
        private $saldo;
        private $status;

        public function abrirConta($tipo){
            $this->setTipo($tipo);
            $this->setStatus(true);
            if($tipo == "CC"){
                $this->setSaldo(50);
                echo "<p>Conta criada com Sucesso!</p>";
            }else if($tipo == "CP"){
                $this->setSaldo(150);
                echo "<p>Conta criada com Sucesso!</p>";
            }
        }
        public function fecharConta(){
            if($this->getSaldo() > 0){
                echo "<p>Conta ainda tem dinheiro, não posso fecha-lá!</p>";
            }else if($this->getSaldo() < 0){
                echo "<p>Conta está em débito. Impossivel encerrar!</p>";
            }else{
                $this->setStatus(false);
                echo "<p>Conta fechada com sucesso!</p>";
            }
        }
        public function depositar($valor){
            if($this->getStatus()){
                $this->setSaldo($this->getSaldo() + $valor);
                echo "<p>Depósito de $valor autorizado na conta de ". $this->getDonoConta()." !</p>";
            }else{
                echo "<p>Conta fechada. Não consigo depositar!</p>";
            }
        }
        public function sacar($valor){
            if($this->getStatus()){
                if($this->getSaldo() >= $valor){
                    $this->setSaldo($this->getSaldo() - $valor);
                    echo "<p>Saque autorizado na conta de ".$this->getDonoConta()."!</p>";
                }else{
                    echo "<p>Saldo insuficiente para saque!</p>";
                }
                
            }else{
                echo "<p>Não posso fazer saque de uma conta fechada!</p>";
            }
        }
        public function pagarMensalidade(){
            if($this->getTipo() == "CC"){
                $taxa = 12;
            }else if($this->getTipo() == "CP"){
                $taxa = 20;
            }
            if($this->getStatus()){
                $this->setSaldo($this->getSaldo() - $taxa);
                echo "<p>Mensalidade de R$ $taxa debitada na conta de ".$this->getDonoConta()."</p>";
            }else{
                echo "<p>ERRO! Problemas com a conta!</p>";
            }
        }


        public function __construct(){
            $this->setSaldo(0);
            $this->setStatus(false);
        }
        public function getNumConta(){
            return $this->conta;
        }
        public function setNumConta($conta){
            $this->conta = $conta;
        }
        public function getTipo(){
            return $this->tipo;
        }
        public function setTipo($tipo){
            $this->tipo = $tipo;
        }
        public function getDonoConta(){
            return $this->donoConta;
        }
        public function setDonoConta($donoConta){
            $this->donoConta = $donoConta;
        }
        public function getSaldo(){
            return $this->saldo;
        }
        public function setSaldo($saldo){
            $this->saldo = $saldo;
        }
        public function getStatus(){
            return $this->status;
        }
        public function setStatus($status){
            $this->status = $status;
        }
    }
?>