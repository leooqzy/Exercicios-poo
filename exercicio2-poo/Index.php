<?php
    
    require_once "Pessoa.php";
    require_once "Universidade.php";

    $u1 = new Universidade ("Unicentro");
    $u2 = new Universidade ("UTFPR");

    $p1 = new Pessoa ("Leonardo", $u1);
    $p2 = new Pessoa ("Gustavo", $u2);

    $p1->falarNome();
    $p2->falarNome();



?>