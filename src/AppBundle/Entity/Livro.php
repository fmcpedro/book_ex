<?php

namespace AppBundle\Entity;

class Livro{
    private $titulo;
    private $isbn;
    private $dataLancamento;
    private $editora;
    private $autores;
    private $coleccoes;

    function getTitulo() {
        return $this->titulo;
    }

    function getIsbn() {
        return $this->isbn;
    }

    function getDataLancamento() {
        return $this->dataLancamento;
    }

    function getEditora() {
        return $this->editora;
    }

    function getAutores() {
        return $this->autores;
    }

    function getColeccoes() {
        return $this->coleccoes;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setIsbn($isbn) {
        $this->isbn = $isbn;
    }

    function setDataLancamento($dataLancamento) {
        $this->dataLancamento = $dataLancamento;
    }

    function setEditora($editora) {
        $this->editora = $editora;
    }

    function setAutores($autores) {
        $this->autores = $autores;
    }

    function setColeccoes($coleccoes) {
        $this->coleccoes = $coleccoes;
    }

 
    
    
    
}