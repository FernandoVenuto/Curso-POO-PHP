<html>

<head>
        <meta charset="UTF-8">
        <title>UEC</title>
</head>

<body>
        <pre>
            <?php
                require_once 'Lutador.php';
                require_once 'Luta.php';
                $l = array();
                $l[0] = new Lutador(
                        "Pretty Boy",
                        "França",
                        31,
                        1.75,
                        68.9,
                        11,
                        2,
                        1,
                        "Masculino"
                );

                $l[1] = new Lutador(
                        "Putscript",
                        "Brasil",
                        29,
                        1.68,
                        57.8,
                        14,
                        2,
                        3,
                        "Feminino"
                );

                $l[2] = new Lutador(
                        "Snapshadow",
                        "EUA",
                        35,
                        1.65,
                        80.9,
                        12,
                        2,
                        1,
                        "Masculino"
                );

                $l[3] = new Lutador(
                        "DeadCode",
                        "Australia",
                        28,
                        1.93,
                        81.6,
                        13,
                        0,
                        2,
                        "Masculino"
                );

                $l[4] = new Lutador(
                        "UFOCobol",
                        "Brasil",
                        37,
                        1.70,
                        119.3,
                        5,
                        4,
                        3,
                        "Feminino"
                );

                $l[5] = new Lutador(
                        "Nerdaart",
                        "EUA",
                        30,
                        1.81,
                        105.7,
                        12,
                        2,
                        4,
                        3
                );

                $l[6] = new Lutador(
                        "Regaça",
                        "Senegal",
                        20,
                        1.63,
                        78.6,
                        30,
                        0,
                        0,
                        1
                );


                $UEC0 = new Luta;
                $UEC0 -> marcarLuta($l[2] , $l[3]);
                $UEC0 -> lutar();
                ?>
        </pre>
</body>

</html>