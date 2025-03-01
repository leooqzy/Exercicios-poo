<?php

    require_once "Pessoa.php";

    class Livro {
        public Pessoa $pessoa;
        public $nome;
        public $autor;
        public $numPaginas;
        public $disponibilidadeAluguel;
        public $alugadoPor = null;

        public function __construct(string $nome, string $autor, int $numPaginas, bool $disponibilidadeAluguel) {
            $this->nome = $nome;
            $this->autor = $autor;
            $this->numPaginas = $numPaginas;
            $this->disponibilidadeAluguel = $disponibilidadeAluguel;
        }

        function alugarLivro(Pessoa $pessoa){
            if ($this->disponibilidadeAluguel == true){

                $this->alugadoPor = $pessoa->nome;
                echo "O livro foi alugado por {$this->alugadoPor} \n";
            }else {
                echo "O livro não pode ser alugado, está alugado por {$pessoa->nome}\n";
            }

        }

        function devolverLivro(Pessoa $pessoa){
            unset($this->alugadoPor);
            $this->disponibilidadeAluguel = false;
            echo "foi devolvido com sucesso por {$pessoa->nome}\n";
        }
    }

?>