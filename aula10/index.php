<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 10</title>
    </head>
    <body>
        <pre>
            <?php
            require_once 'Aluno.php';
            require_once 'Funcionario.php';
            require_once 'Pessoa.php';
            require_once 'Professor.php';

            // Programa Principal

            $p1 = new Pessoa();
            $p2 = new Aluno();
            $p3 = new Professor();
            $p4 = new Funcionario();

            $p1->setNome("Pedro");
            $p2->setnome("Maria");
            $p3->setNome("Cáudio");
            $p4->setNome("Fabiana");
             
            $p1->setSexo("M");
            $p2->setSexo("F");
            $p2->setCurso("Informatica");
            $p3->setSalario(2500.75);
            $p4->setSetor("Estoque");
            
            $p1->setIdade(30);
            $p3->receberAum(550.20);
            $p2->matricular();
            
            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);
            ?>
        </pre>
    </body>
</html>
