<?php

    class Universidade {

        public $nome;


        public function __construct(string $nome){
            $this->nome = $nome;
        }

        public function falarUni(){
            echo "{$this->nome}\n";
        }
    }

?>