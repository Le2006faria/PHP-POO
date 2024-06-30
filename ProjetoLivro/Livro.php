<?php

require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro implements Publicacao {

    private $titulo;
    private $autor;
    private $totalPaginas;
    private $paginaAtual;
    private $aberto;
    private $leitor;

    public function __construct($titulo, $autor, $totalPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totalPaginas = $totalPaginas;
        $this->paginaAtual = 0;
        $this->aberto = false;
        $this->leitor = $leitor;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getTotalPaginas() {
        return $this->totalPaginas;
    }

    public function getPaginaAtual() {
        return $this->paginaAtual;
    }

    public function getAberto() {
        return $this->aberto;
    }

    public function getLeitor() {
        return $this->leitor;
    }

    public function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    public function setAutor($autor): void {
        $this->autor = $autor;
    }

    public function setTotalPaginas($totalPaginas): void {
        $this->totalPaginas = $totalPaginas;
    }

    public function setPaginaAtual($paginaAtual): void {
        $this->paginaAtual = $paginaAtual;
    }

    public function setAberto($aberto): void {
        $this->aberto = $aberto;
    }

    public function setLeitor($leitor): void {
        $this->leitor = $leitor;
    }

    public function detalhes() {
        echo "<p>-------------------------------------------------------------------------------</p>";
        echo "<p> Livro: " . $this->titulo . " escrito por " . $this->autor . ". </p>";
        echo "<p> Páginas: " . $this->totalPaginas . ", sendo a página atual: " . $this->paginaAtual . ". </p>";
        echo "<p> Sendo lido por " . $this->leitor->getNome() . ". </p>";
        echo "<p>-------------------------------------------------------------------------------</p>";
    }

    public function abrir() {
        $this->aberto = true;
    }

    public function fechar() {
        $this->aberto = false;
    }

    public function folhear($pagina) {
        if ($pagina > $this->totalPaginas) { //se o número da página que vc passou  for maior que o total de páginas
            $this->paginaAtual = 0;
        } else {
            $this->paginaAtual = $pagina;
        }
    }

    public function avancarPagina() {
        $this->paginaAtual++;
    }

    public function voltarPagina() {
        $this->paginaAtual--;
    }
}
