<?php
class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    function rabiscar(){
       if($this->tampada == false){
            echo "<p>Estou rabiscando...</p>";
       }else{
           echo"<p>ERRO! Não posso rabiscar!</p>";
       }
        
    }
    public function tampar(){
        $this->tampada = true;
    }
    public function destampar(){
        $this->tampada = false;
    }
}

?>