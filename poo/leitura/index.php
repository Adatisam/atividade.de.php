<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leitura de Livro</title>
</head>
<body>
    <pre>
        <?php 
            require 'pessoa.php';
            require 'livro.php';

            $p[0] = new Pessoa("Pedro", 23, "M");
            var_dump($p[0]);

            $l[0] = new livro("POO in PHP", "Alfredo Noronha", 300, $p[0]);
            var_dump($l[0]);
            $l[0] -> abrir();
            $l[0] -> detalhes();
            $l[0] -> fechar();
            $l[0] -> folhear(10);
            $l[0] -> avancarPag();
            $l[0] -> voltarPag();
        ?>
    </pre>
</body>
</html>