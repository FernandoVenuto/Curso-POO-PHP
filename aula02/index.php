<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio02</title>
</head>
<body>
    <?php 
        require_once "Exercicio02.php";

        $c1 = new Celular;
        $c1->modelo = "Xiaomi";
        $c1->cor = "preto";
        $c1->carga = 48;
        $c1->camera = "frontal";
        $c1->ligado = true; 

        print_r($c1);
        $c1->ligar();
        $c1->carregar();
        $c1->foto();



        $c2 = new Celular;
        $c2->modelo = "iphone";
        $c2 -> cor = "branco";
        $c2->carga = 69;
        $c2->camera = "frontal";
        $c2->ligado = true;
        print_r($c2);
        $c2->modelo();
        $c2->bateria();
        $c2->camera();
    ?>        
</body>
</html>