<?php
    require_once("Pessoa.php");
    class Aluno extends Pessoa{
        private $matricula,$curso;

        public function cancelarMatricula(){
            echo "<p>Matrícula será cancelada!</p>";
        }

        public function getMatricula(){
            return $this->matricula;
        }
        public function setMatricula($matricula){
            $this->matricula = $matricula;
        }
        public function getCurso(){
            return $this->curso;
        }
        public function setCurso($curso){
            $this->curso = $curso;
        }
    }
?>