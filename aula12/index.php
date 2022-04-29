<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Aula 12</title>
</head>

<body>
    <pre>
        <?php

        require_once 'Ave.php';
        require_once 'Cachorro.php';
        require_once 'Peixe.php';
        require_once 'Reptil.php';

        $a = new Ave();
        $a->setCorPena("Azul");
        $a->setPeso(3.5);
        $a->setIdade(3);
        $a->setMembros(2);
        print_r($a);
        $a->locomover();


        $m = new Mamifero();
        $m->setCorPelo("Preto");
        $m->setPeso("35kg");
        $m->setIdade("4");
        $m->setMembros(4);
        print_r($m);
        $m->alimentar();

        $p = new Peixe();
        $p->setCorEscama("amarelo");
        $p->setPeso("2kg");
        $p->setIdade(5);
        $p->setMembros(0);
        print_r($p);
        $p->emitirSom();
        $p->soltarBolha();

        $c = new Cachorro();
        $c->setRaça("Labrador");
        $c->setCorPelo("Caramelo");
        $c->setPeso("3kg");
        $c->setIdade("5 meses");
        $c->setMembros(4);
        print_r($c);
        $c->abanarRabo();


        ?>
</pre>
</body>

</html>