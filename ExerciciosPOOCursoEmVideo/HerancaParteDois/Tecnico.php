<?php
    require_once 'Pessoa.php';
    final class Tecnico extends Pessoa{
        private $registroProfissional;

        public final function praticar(){
            echo "O Técnico {$this->getNome()} com registro {$this->getRegistro()} está praticando.";
        }
        
        public function getRegistroProfissional(){
            return $this->registroProfissional;
        }
        public function setRegistroProfissional($regProfissional){
            $this->registroProfissional = $regProfissional;
        }

    }
?>