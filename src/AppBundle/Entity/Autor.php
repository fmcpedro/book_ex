<?php

namespace AppBundle\Entity;



class Autor {

    private $nome;
    private $dataNascimento;
    private $livros;

    function getNome() {
        return $this->nome;
    }

    function getDataNascimento() {
        return $this->dataNascimento;
    }

    function getLivros() {
        return $this->livros;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    function setLivros($livros) {
        $this->livros = $livros;
    }

}
