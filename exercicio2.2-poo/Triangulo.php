<?php

    require_once "Objeto.php";

    class Triangulo extends Objeto {

        private $tipo;

        public function __construct(float $largura, float $altura, string $tipo) {
            parent::__construct ($largura, $altura);
            $this->tipo = $tipo;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function calcArea(){
            return ($this->largura * $this->altura) / 2;
        }
    }

?>