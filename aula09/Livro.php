<?php

require_once 'Publicacao.php';
require_once 'Livro.php';

class Livro implements Publicacao {

    //Atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    //Metodos
    public function detalhes() {
        echo "<br><br>O livro " . $this->getTitulo() . " escrito por " . $this->getAutor();
        echo "<br>está sendo lido por ". $this->leitor->getNome();
        echo "<br>Possui " . $this->getTotPaginas() . ". Pagina Atual: " . $this->getPagAtual();
    }

    //Metodos Especiais
    public function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->pagAtual = 0;
        $this->aberto = false;
        $this->leitor = $leitor;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getTotPaginas() {
        return $this->totPaginas;
    }

    public function getPagAtual() {
        return $this->pagAtual;
    }

    public function getAberto() {
        return $this->aberto;
    }

    public function getLeitor() {
        return $this->leitor;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }

    public function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }

    public function setAberto($aberto) {
        $this->aberto = $aberto;
    }

    public function setLeitor($leitor) {
        $this->leitor = $leitor;
    }

    public function abrir() {
        $this->aberto = true;
    }

    public function avançarPag() {
        $this->pagAtual++;
    }

    public function fechar() {
        $this->aberto = false;
    }

    public function folhear($p) {
        if ($p > $this->totPaginas) {
            $this->pagAtual = "Não é possivel folhear";
        } else {
            $this->pagAtual = $p;
        }
    }

    public function voltarPag() {
        $this->pagAtual--;
    }

}
