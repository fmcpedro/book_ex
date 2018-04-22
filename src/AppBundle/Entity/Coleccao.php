<?php

namespace AppBundle\Entity;

class Coleccao {

    private $nome;
    private $livros;

    function getNome() {
        return $this->nome;
    }

    function getLivros() {
        return $this->livros;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setLivros($livros) {
        $this->livros = $livros;
    }

}
