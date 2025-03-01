<?php

    require_once "index.php";

    class Produto {

        public $nome;
        public $preco;
        public $estoque;
        public $pagamento;

        function __construct(string $nome, float $preco, int $estoque, string $pagamento){
            $this->nome = $nome;
            $this->preco = $preco;
            $this->estoque = $estoque;
            $this->pagamento = $pagamento;
        }

        function pedidoCliente(){
            echo "Fale o nome do produto que gostaria de comprar: {$this->nome}\n";
        }

        function diminuirEstoque($quantidade){

            $this->estoque = $this->estoque - $quantidade;
            echo "Fale a quantidade de {$this->nome} que deseja: {$quantidade}\n";

        }

        function formadePagamento(){
            echo "Fale a forma do seu pagamento: {$this->pagamento}\n";
        }

    }

?>