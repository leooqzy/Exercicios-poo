<?php

    require_once "Universidade.php";

    class Pessoa {

        public $nome;
        public $universidade;

        public function __construct(string $nome, Universidade $universidade) {
            $this->nome = $nome;
            $this->universidade = $universidade;
        }

        public function falarNome(){
            echo "Meu nome é {$this->nome} e estudo na {$this->universidade->nome}\n";
        }

    }

?>