<?php

    require_once "Gerente.php";
    require_once "Funcionario.php";

    $f1 = new Funcionario(1, "Leonardo", "Desenvolvedor Back-end");
    $f1->calculaSalario();
    echo "Salario do funcionario: R$ {$f1->salario} \n";
    print_r ($f1);

    $g1 = new Gerente(2, "Gustavao", "Desenvolvedor Front-end", 6);
    $g1->calculaSalario();
    echo "Salario do gerente: R$ {$g1->salario} \n";
    print_r ($g1);


?>