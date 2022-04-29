<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 09</title>
    </head>
    <body>
        <?php
        require_once 'Publicacao.php';
        require_once 'Livro.php';
        require_once 'Pessoa.php';

        $p[0] = new Pessoa("Ricardo", 14, "M");
        $l[0] = new Livro("Esqueça tudo", "Felipe Neto", 600, $p[0]);
        
        
        $p[0]->status();
        $p[0]->fazerAniver();
        $l[0]->abrir();
        $l[0]->folhear(300);
        $l[0]->avançarPag();
        $l[0]->detalhes();
        ?>
    </body>
</html>
