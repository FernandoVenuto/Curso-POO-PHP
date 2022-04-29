<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04</title>
</head>
<body>
    <pre>
        <?php
        require_once 'Caneta.php';
        $c1 = new Caneta("BIc", "Azul", 0.5);
        print_r($c1);


        $c2 = new Caneta ("BIC", "Verde", 1.0);
        print_r($c2);
        ?>
    </pre>
</body>
</html>