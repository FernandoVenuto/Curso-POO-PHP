<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 1</title>
</head>

<body>
    <pre>
        <?php
        require_once 'Telefone.php';
        $t1 = new Telefone();
        $t1->setmudarCor("Branco");
        $t1->setmudarTamanho("Grande");
        $t1->vivaVoz();
        $t1->ligar();
        print_r($t1);
        ?>
    </pre>
</body>

</html>