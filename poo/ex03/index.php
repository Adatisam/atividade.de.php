<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Abalon</title>
</head>
<body>
    <pre>
        <?php 
            require "banco.php";

            $p1 = new ContaBanco(); //Fulano
            $p1 -> abrirConta("CC");
            $p1 -> setDono("Fulano");
            $p1 -> setnumConta(1111);
            $p1 -> depositar(300);
            $p1 -> sacar(50);
            $p1 -> pagarMensal();
            $p1 -> fecharConta();

            $p2 = new ContaBanco(); //Ciclano
            $p2 -> abrirConta("CP");
            $p2 -> setDono("Ciclano");
            $p2 -> setnumConta(2222);
            $p2 -> depositar(500);
            $p2 -> sacar(200);
            $p2 -> pagarMensal();
            $p2 -> fecharConta();

            var_dump($p1);
            var_dump($p2);
        ?>
    </pre>
</body>
</html>