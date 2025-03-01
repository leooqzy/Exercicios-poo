<?php

    require_once "produto.php";

    $p1 = new Produto("Banana", 5.00, 100, "cheque");
    $p1->pedidoCliente();
    $p1->diminuirEstoque(35);
    print_r($p1);


    $p2 = new Produto("Maçã", 3.00, 120, "dinheiro");
    $p2->pedidoCliente();
    $p2->diminuirEstoque(40);
    print_r($p2);
    

?>