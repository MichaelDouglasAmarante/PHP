<?php
    require_once("Lutador.php");
    class Luta{
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        public function marcarLuta($lutador1,$lutador2){
            if($lutador1->getCategoria() === $lutador2->getCategoria() && ($lutador1 != $lutador2)){
                $this->setAprovada(true);
                $this->setDesafiado($lutador1);
                $this->setDesafiante($lutador2);

            }else{
                $this->setAprovada(false);
                $this->setDesafiado(null);
                $this->setDesafiante(null);
            }
        }
        public function lutar(){
            if($this->getAprovada()){
                $this->getDesafiado()->apresentar();
                $this->getDesafiante()->apresentar();
                $vencedor = rand(0,2);
                switch($vencedor){
                    case 0:
                        echo "<p>Empate!</p>";
                        $this->getDesafiado()->empatarLuta();
                        $this->getDesafiante()->empatarLuta();
                        break;
                    case 1:
                        echo "<p>".$this->getDesafiado()->getNome()." venceu!</p>";
                        $this->getDesafiado()->ganharLuta();
                        $this->getDesafiante()->perderLuta();
                        break;
                    case 2:
                        echo "<p>".$this->getDesafiante()->getNome()." venceu!</p>";
                        $this->getDesafiante()->ganharLuta();
                        $this->getDesafiado()->perderLuta();
                     break;
                }
            }else{
                echo "<p>Luta não pode acontecer, pois não foi aprovada!</p>";
            }
        }

       

        function getDesafiado(){
            return $this->desafiado;
        }
        function setDesafiado($desafiado){
            $this->desafiado = $desafiado;
        }
        function getDesafiante(){
            return $this->desafiante;
        }
        function setDesafiante($desafiante){
            $this->desafiante = $desafiante;
        }
        function getRounds(){
            return $this->rounds;
        }
        function setRounds($rounds){
            $this->rounds = $rounds;
        }
        function getAprovada(){
            return $this->aprovada;
        }
        function setAprovada($aprovada){
            $this->aprovada = $aprovada;
        }
    }
?>