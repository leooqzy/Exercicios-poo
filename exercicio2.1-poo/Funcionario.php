<?php

    class Funcionario {

        public $id;
        public $nome;
        public $cargo;
        public $salario;

        public function __construct(int $id, string $nome, string $cargo) {
            $this->id = $id;
            $this->nome = $nome;
            $this->cargo = $cargo;
        }

        function calculaSalario(){
            $this->salario = 1518;
            return $this->salario;
        }

    }

?>