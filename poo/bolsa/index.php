<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolsa</title>
</head>
<body>
    <pre>
        <?php 
            require "pessoa.php";
            require "visitantes.php";
            require "aluno.php";
            require "bolsista.php";

            //$p1 = new Pessoa("Marcio", 33, "M");
            //$v1 = new visitantes("Marcio", 33, "M");
            //var_dump($v1);
            $al = new Aluno();
            $al ->setNome("Pedro");
            $al ->setMatr(1111);
            $al ->setIdade(19);
            $al ->setSexo("M");
            $al ->setCurso("Pedreiro");
            var_dump($al);
            $al ->pagarMensalidade();

            $b1 = new Bolsista();
            $b1-> setMatr(1112);
            $b1-> setNome("Marlene");
            $b1-> setBolsa(12);
            $b1-> setCurso("Administração");
            $b1-> setIdade(17);
            $b1-> pagarMensalidade();
            var_dump($b1);

        ?>
    </pre>
</body>
</html>