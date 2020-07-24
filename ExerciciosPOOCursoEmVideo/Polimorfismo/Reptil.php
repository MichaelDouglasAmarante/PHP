<?php
    require_once 'Animal.php';
    class Reptil extends Animal{
        private $corEscama;
        
        function locomover(){
            echo "<p>Rastejando</p>";
        }
        function alimentar(){
            echo "<p>Comendo Vegetais</p>";
        }
        function emitirSom(){
            echo "<p>Som de Reptil</p>";
        }

        function getCorEscama(){
            return $this->corEscama;
        }
        function setCorEscama($corEscama){
            $this->corEscama = $corEscama;
        }
    }
?>