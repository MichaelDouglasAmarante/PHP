<?php
    class Pessoa{
        private $nome,$idade,$sexo;
       
        function fazerAniversario(){
            $this->setIdade($this->getIdade() + 1);
        }

        function __construct($nome,$idade,$sexo){
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
        }

        function getNome(){
            return $this->nome;
        }
        function setNome($nome){
            $this->nome = $nome;
        }
        function getIdade(){
            return $this->idade;
        }
        function setIdade($idade){
            $this->idade = $idade;
        }
        function getSexo(){
            return $this->sexo;
        }
        function setSexo($sexo){
            $this->sexo = $sexo;
        }
    }
?>