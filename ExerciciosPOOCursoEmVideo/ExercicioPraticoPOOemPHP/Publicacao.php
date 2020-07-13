<?php
    interface Publicacao{
        public function abrirLivro();
        public function fecharLivro();
        public function folhear($pagina);
        public function avancarPagina();
        public function voltarPagina();
    }
?>