<?php

    require_once "Objeto.php";

    class Retangulo extends Objeto {

        public function __construct(float $largura, float $altura) {
            parent::__construct ($largura, $altura);

        }

        public function eQuadrado(){
          if ($this->altura === $this->largura){
            echo "É QUADRADO \n";
          }else {
            echo "Não é quadrado \n";
          }
        }

        public function calcArea(){
          return $this->largura * $this->altura;
        }
    }

?>