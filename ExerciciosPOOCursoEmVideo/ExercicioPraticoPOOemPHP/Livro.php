<?php
    require_once("Pessoa.php");
    require_once("Publicacao.php");
    class Livro implements Publicacao{
        private $titulo,$autor,$totalPaginas,$paginaAtual,$aberto,$leitor;
        
        function detalhes(){
            if($this->getAberto()){
                $aberto = "Sim";
            }else{
                $aberto = "Não";
            }
            echo "<h1>Informações do Livro</h1>";
            echo "<ul><li>Título: ".$this->getTitulo()."</li>";
            echo "<li>Autor: ".$this->getAutor()."</li>";
            echo "<li>Total de Páginas: ".$this->getTotalPaginas()."</li>";
            echo "<li>Aberto: ".$aberto."</li>";
            echo "<li>Leitor: ".$this->getLeitor()->getNome()."</li>";
            echo "<li>Página Atual: ".$this->getPaginaAtual()."</li></ul>";
        }

        public function abrirLivro(){
            $this->setAberto(true);
            $this->setPaginaAtual(1);
        }
        public function fecharLivro(){
            $this->setAberto(false);
            $this->setPaginaAtual(0);
        }
        public function folhear($pagina){
            if($pagina > $this->getTotalPaginas() || $pagina < 1){
                echo "<p>A página solicitada é inválida!</p>";
            }else{
                $this->setPaginaAtual($pagina);
                echo "<p>-- Página ".$this->getPaginaAtual()."/".$this->getTotalPaginas()." --</p>";
            }
        }
        public function avancarPagina(){
            if($this->getPaginaAtual() < $this->getTotalPaginas()){
                $this->setPaginaAtual($this->getPaginaAtual() + 1);
                echo "<p>-- Página ".$this->getPaginaAtual()."/".$this->getTotalPaginas()." --</p>";
            }else{
                echo "<p>Não há mais páginas! -- Página ".$this->getPaginaAtual()."/".$this->getTotalPaginas()." --</p>";
            }            
        }
        public function voltarPagina(){
            if($this->getPaginaAtual() > 1){
                $this->setPaginaAtual($this->getPaginaAtual() - 1);
            }else{
                echo "<p>Você Está na Primeira Pagina! -- Página ".$this->getPaginaAtual()."/".$this->getTotalPaginas()." --</p>";
            }
        }

        function __construct($titulo,$autor,$totalPaginas,$leitor){
            $this->setTitulo($titulo);
            $this->setAutor($autor);
            $this->setTotalPaginas($totalPaginas);
            $this->setLeitor($leitor);
            $this->setPaginaAtual(0);
            $this->setAberto(false);
        }

        function getTitulo(){
            return $this->titulo;
        }
        function setTItulo($titulo){
            $this->titulo = $titulo;
        }
        function getAutor(){
            return $this->autor;
        }
        function setAutor($autor){
            $this->autor = $autor;
        }
        function getTotalPaginas(){
            return $this->totalPaginas;
        }
        function setTotalPaginas($totalPaginas){
            $this->totalPaginas = $totalPaginas;
        }
        function getPaginaAtual(){
            return $this->paginaAtual;
        }
        function setPaginaAtual($pagina){
            $this->paginaAtual = $pagina;
        }
        function getAberto(){
            return $this->aberto;
        }
        function setAberto($aberto){
            $this->aberto = $aberto;
        }
        function getLeitor(){
            return $this->leitor;
        }
        function setLeitor($leitor){
            $this->leitor = $leitor;
        }
    }
?>