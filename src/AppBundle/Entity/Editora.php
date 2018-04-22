<?php

namespace AppBundle\Entity;

class Editora {

    private $nome;
    private $morada;
    private $livros;

    function getNome() {
        return $this->nome;
    }

    function getMorada() {
        return $this->morada;
    }

    function getLivros() {
        return $this->livros;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setMorada($morada) {
        $this->morada = $morada;
    }

    function setLivros($livros) {
        $this->livros = $livros;
    }

}
