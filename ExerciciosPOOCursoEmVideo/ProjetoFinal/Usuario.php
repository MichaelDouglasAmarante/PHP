<?php 
    require_once 'Pessoa.php';
    class Usuario extends Pessoa{
        private $login,$totalAssistido;

        public function viuMaisUm(){
            $this->setTotalAssistido($this->getTotalAssistido() + 1);
        }

        public function __construct($nome,$idade,$sexo,$login){
            parent::__construct($nome,$idade,$sexo);
            $this->setLogin($login);
            $this->setTotalAssistido(0);

        }
        
        public function getLogin(){
            return $this->login;
        }
        public function setLogin($login){
            $this->login = $login;
        }
        public function getTotalAssistido(){
            return $this->totalAssistido;
        }
        public function setTotalAssistido($totalAssistido){
            $this->totalAssistido = $totalAssistido;
        }
    }
?>