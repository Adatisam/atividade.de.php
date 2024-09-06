<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>
<body>
    <pre>
        <?php 
            require "pessoa.php";
            require "aluno.php";
            require "professor.php";
            require "funcionario.php";

            $p[0] = new Pessoa("Karm", 23, "M");
            $p[1] = new Aluno("PeixeBoi", 21, "M",1);
            $p[2] = new Professor("Patr", 20, "M");
            $p[3] = new Funcionario("Boy", 15, "M");

            $p[0]->setNome("Karm");
            $p[1]->setNome("PeixeBoi");
            $p[2]->setNome("Patri");
            $p[3]->setNome("Boy");

            $p[0]->setIdade(23);
            $p[1]->setIdade(21);
            $p[2]->setIdade(20);
            $p[3]->setIdade(15);

            $p[0]->setSexo("M");
            $p[1]->setSexo("M");
            $p[2]->setSexo("M");
            $p[3]->setSexo("M");

            $p[1]->setCurso("Informática");
            $p[2]->setSal(2500.75);
            $p[3]->setSetor("Estoque");

            $p[1]-> setMatr(0001);
            $p[2]-> setEsp("Ciêncica da computação");

            $p[2]->receberAum(550.23); 
            $p[3]->mudarTrabalho(); 
            $p[1]->cancelarMatr();  

            var_dump($p);

        ?>
    </pre>
</body>
</html>