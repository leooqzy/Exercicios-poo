<?php

    class Pessoa {

        public $nome;
        public $endereço;
        public $email;
        public $telefone;


        public function __construct(string $nome, string $endereço, string $email, string $telefone) {
            $this->nome = $nome;
            $this->endereço = $endereço;
            $this->email = $email;
            $this->telefone = $telefone;
        }
    }


?>