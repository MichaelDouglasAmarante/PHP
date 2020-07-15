<?php
    require_once 'Aluno.php';
    final class Bolsista extends Aluno{
        private $bolsa;

        public function RenovarBolsa(){
            echo "<p>Bolsa Renovada!</p>";
        }
        public function pagarMensalidade(){
            echo "<p>{$this->getNome()} é bolsista, então paga com desconto!</p>";
        }

        public function getBolsa(){
            return $this->bolsa;
        }
        public function setBolsa($bolsa){
            $this->bolsa = $bolsa;
        }
    }
?>