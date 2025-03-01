<?php

    class Person {

        public string $nome;
        public int $idade;
        public int $diaNasc;
        public int $mesNasc;
        public int $anoNasc;

        public function __construct(string $nome, int $diaNasc, int $mesNasc, int $anoNasc) {
            $this->nome = $nome;
            $this->diaNasc = $diaNasc;
            $this->mesNasc = $mesNasc;
            $this->anoNasc = $anoNasc;
        }

        public function CalculoIdade($diaAtual, $mesAtual, $anoAtual){

            $this->idade = $anoAtual - $this->anoNasc;

            if ($this->mesNasc > $mesAtual || ($this->mesNasc == $mesAtual && $this->diaNasc > $diaAtual)){
                $this->idade--;   
            }
        }

        public function InfoIdade(){
            echo "Você tem {$this->idade} anos de idade \n";
        }

        public function InfoNome(){
            echo "Nome: {$this->nome} \n";
        }

        public function ajustaDataDeNascimento(int $diaNasc, int $mesNasc, int $anoNasc){
            $this->diaNasc = $diaNasc;
            $this->mesNasc = $mesNasc;
            $this->anoNasc = $anoNasc;
        }
    }


?>