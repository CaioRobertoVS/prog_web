<?php
class Pessoa {
        private $nome;
        private $sobrenome;

        public function __construct($nome, $sobrenome) {
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
        }

        public function getNomeCompleto() {
           // return "{$this->nome} {$this->sobrenome}";
            return $this->nome . " " . $this->sobrenome . "<br>";
        }
    }
?>