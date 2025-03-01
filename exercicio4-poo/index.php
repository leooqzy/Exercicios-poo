<?php

    require_once "Pessoa.php";
    require_once "Livro.php";

    $p1 = new Pessoa("Leonardo", "Rua palmira freitas rocha", "lemes7848@gmail.com", "(42)9 9906-3972"); 
    $p2 = new Pessoa("Gustavo", "Tancredo", "gustavinho@gmail.com", "(42)9 99999-9999");

    $l1 = new Livro("Pequeno Príncipe", "Antoine de Saint-Exupéry", 96, true );
    $l1->alugarLivro($p1);
    $l1->devolverLivro($p1);

    $l2 = new Livro("Pequeno Príncipe", "Antoine de Saint-Exupéry", 96, false );
    $l2->alugarLivro($p2);
?>