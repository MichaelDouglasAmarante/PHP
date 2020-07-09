<?php
require_once("Controlador.php");
    class ControleRemoto implements Controlador{
        private $volume;
        private $ligado;
        private $tocando;

        function __construct(){
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }

        private function getVolume(){
            return $this->volume;
        }
        private function setVolume($volume){
            $this->volume = $volume;
        }
        private function getLigado(){
            return $this->ligado;
        }
        private function setLigado($ligado){
            $this->ligado = $ligado;
        }
        private function getTocando(){
            return $this->tocando;
        }
        private function setTocando($tocando){
            $this->tocando = $tocando;
        }

        public function ligar(){
            $this->setLigado(true);
        }
        public function desligar(){
            $this->setLigado(false);
        }
        public function abrirMenu(){
            echo "<p>Está ligado?:".($this->getLigado()?"SIM":"NÃO")."</p>";
            echo "<p>Está Tocando?:".($this->getTocando()?"SIM":"NÃO")."</p>";
            echo "<p>Volume: ".$this->getVolume()."</p>";
           
        }
        public function fecharMenu(){
            echo "<p>Fechando Menu...</p>";
        }
        public function maisVolume(){
            if($this->getLigado()){
                $this->setVolume($this->getVolume() + 5);

            }else{
                echo "ERRO! Não posso aumentar o volume!";
            }
        }
        public function menosVolume(){
            if($this->getLigado()){
                $this->setVolume($this->getVolume()- 5);
            }
        }
        public function ligarMudo(){
            if($this->getLigado() && $this->getVolume()>0){
                $this->setLigado(0);
            }
        }
        public function desligarMudo(){
            if($this->getLigado() && $this->getVolume() == 0){
                $this->setLigado(50);
            }
        }
        public function play(){
            if($this-getLigado() && !($this->getTocando())){
                $this->setTocando(true);
            }
        }
        public function pause(){
            if($this-getLigado() && $this->getTocando()){
                $this->setTocando(false);
            }
        }


    }
?>