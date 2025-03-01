<?php

require_once "Funcionario.php";

    class Gerente extends Funcionario {

        private $quantidadeColaboradores;
        
        public function __construct(int $id, string $nome, string $cargo, int $quantidadeColaboradores ) {
            parent::__construct($id, $nome, $cargo);
            $this->quantidadeColaboradores = $quantidadeColaboradores;
        }

        function calculaSalario(){
            $salarioBase = parent::calculaSalario();
            $this->salario = $salarioBase + ($this->quantidadeColaboradores * 100);
            return $this->salario;
        }
    }

?>