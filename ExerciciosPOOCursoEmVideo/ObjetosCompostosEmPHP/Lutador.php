<?php
    Class Lutador{
        private $nome;
        private $nacionalidade;
        private $idade, $altura, $peso;
        private $categoria,$vitorias,$derrotas,$empates;

        public function apresentar(){
            echo "<hr>";
            echo "<p>CHEGOU A HORA! O lutador ".($this->getNome());
            echo " tem ".$this->getIdade()." anos e pesa ".$this->getPeso()."Kg";
            echo "<br> Ele tem ".$this->getVitorias()." vitórias, ";
            echo $this->getDerrotas()." derrotas e ".$this->getEmpates()." empatates.";
        }
        public function status(){
            echo "<p>".$this->getNome()." é um peso ".$this->getCategoria();
            echo " e já ganhou ".$this->getVitorias()." vez(es),";
            echo " perdeu ".$this->getDerrotas()." vez(es) e empatou ".$this->getEmpates()." vez(es).";
        }
        public function ganharLuta(){
            $this->setVitorias($this->getVitorias() + 1);
        }
        public function perderLuta(){
            $this->setDerrotas($this->getDerrotas() + 1);
        }
        public function empatarLuta(){
            $this->setEmpates($this->getEmpates() + 1);
        }

        function __construct($nome,$nac,$idade,$altura,$peso,$vitorias,$derrotas,$empates){
            $this->setNome($nome);
            $this->setNacionalidade($nac);
            $this->setIdade($idade);
            $this->setAltura($altura);
            $this->setPeso($peso);
            $this->setVitorias($vitorias);
            $this->setDerrotas($derrotas);
            $this->setEmpates($empates);
        }

        function getNome(){
            return $this->nome;
        }
        function setNome($nome){
            $this->nome = $nome;
        }
        function getNacionalidade(){
            return $this->nacionalidade;
        }
        function setNacionalidade($nacionalidade){
            $this->nacionalidade = $nacionalidade;
        }
        function getIdade(){
            return $this->idade;
        }
        function setIdade($idade){
            $this->idade = $idade;
        }
        function getAltura(){
            return $this->altura;
        }
        function setAltura($altura){
            $this->altura = $altura;
        }
        function getPeso(){
            return $this->peso;
        }
        function setPeso($peso){
            $this->peso = $peso;
            $this->setCategoria();
        }
        function getCategoria(){
            return $this->categoria;
        }
        private function setCategoria(){
           if($this->peso < 52.2 || $this->peso >120.2){
                $this->categoria = "Inválido";
           }else if($this->peso <= 70.3){
                $this->categoria = "Leve";
           }else if($this->peso <= 83.9){
                $this->categoria = "Médio";
           }else{
                $this->categoria = "Pesado";
           }
        }

        function getVitorias(){
            return $this->vitorias;
        }
        function setVitorias($vitorias){
            $this->vitorias = $vitorias;
        }
        function getDerrotas(){
            return $this->derrotas;
        }
        function setDerrotas($derrotas){
            $this->derrotas = $derrotas;
        }
        function getEmpates(){
            return $this->empates;
        }
        function setEmpates($empates){
            $this->empates = $empates;
        }

    }
?>