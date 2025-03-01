<?php

    require_once "Person.php";

    $p1 = new Person ("Leonardo", 20, 05, 2006);
    $p1->CalculoIdade(25, 02, 2025);
    $p1->InfoIdade();
    $p1->InfoNome();

    print_r($p1);

?>