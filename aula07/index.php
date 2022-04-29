<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio Aula 07</title>
    </head>
    <body>
        <?php
        require_once 'Celular.php';
        $c1 = new Celular();
        $c1->ligar();
        $c1->abrirMenu();
        $c1->tirarFoto();
        ?>
    </body>
</html>
