<?php
    require_once 'Pessoa.php';
    class Visitante extends Pessoa{
        public function iniciarVisita(){
            echo "{$this->getNome()} está iniciando a visita.";
        }
        public function encerrarVisita(){
            echo "{$this->getNome()} está encerrando a visita.";
        }
    }
?>