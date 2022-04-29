<?php
require_once 'Publicacao.php';
require_once 'Livro.php';
interface Publicacao {

    public function abrir();

    public function fechar();

    public function folhear($p);

    public function avançarPag();

    public function voltarPag();
}
