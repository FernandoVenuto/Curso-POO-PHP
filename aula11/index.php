<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula11</title>
    </head>
    <body>

      <?php  phpinfo()?>
        <pre>
            <?php
            require_once 'Aluno.php';
            require_once 'Bolsista.php';
            require_once 'Professor.php';
            require_once 'Tecnico.php';

            // $p1 = new Pessoa(); Está Errada, pois a Classe Pessoa é abstrata;
            //$v1 = new Visitante();
            //$v1->setIdade(27);
            //$v1->setNome("Marcos");
            //$v1->setSexo("M");
            //print_r($v1);
            
            
            $a1 = new Aluno();
            
            $a1->setMatricula(111111);
            $a1->setCurso("Informatica");
            $a1->setNome("Pedro");
            $a1->setIdade(16);
            $a1->setSexo("M");
            $a1->pagarMensalidade();
            print_r($a1);
            
            $b1 = new Bolsista();
            $b1->setMatricula(222222);
            $b1->setCurso("Informatica");
            $b1->setNome("Jubileu");
            $b1->setIdade(18);
            $b1->setBolsa(12.5);
            $b1->setSexo("M");
            $b1->pagarMensalidade();
            print_r($b1);
            
            
            $p1= new Professor();
            $p1->setEspecialidade("Tecnologia");
            $p1->setSalario(2300);
            $p1->setNome("Caruso");
            $p1->setIdade(68);
            $p1->setSexo("M");
            $p1->receberAumento(300);
            print_r($p1);
            
            $t1= new Tecnico();
            $t1->setRegistroProfissional("Tecnico em Informatica");
            $t1->setMatricula(3333333);
            $t1->setCurso("Informatica");
            $t1->setNome("Robson");
            $t1->setIdade(22);
            $t1->setSexo("M");
            $t1->praticar();
            print_r($t1);
            ?>
        </pre>
    </body>
</html>
