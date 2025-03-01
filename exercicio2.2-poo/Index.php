<?php

    require_once "Objeto.php";
    require_once "Retangulo.php";
    require_once "Triangulo.php";

    $retangulo = new Retangulo(10, 5);
    $retangulo->eQuadrado();
    echo "A area do retangulo é: {$retangulo->calcArea()} \n";;
    print_r($retangulo);


    $triangulo = new Triangulo(10, 5, "isósceles");
    echo "A area do triangulo é: {$triangulo->calcArea()} \n";
    print_r($triangulo);

?>