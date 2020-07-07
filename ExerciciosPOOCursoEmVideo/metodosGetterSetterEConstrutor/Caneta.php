<?php
class Caneta{
   private $modelo;
   private $cor;
   private $ponta;
   private $tampada;
   
    public function Caneta($modelo,$cor,$ponta){ //Método Construtor
      $this->setModelo($modelo);
      $this->setCor($cor);
      $this->setPonta($ponta);
    }

    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($ponta){
        $this->ponta = $ponta;
    }
    public function getCor(){
        return $this.cor;
    }
    public function setCor($cor){
        $this->cor = $cor;
    }

    public function tampar(){
        $this->tampada = true;
    } 
    public function destampar(){
        $this->tampada = false;
    }

}

?>