<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Projeto Controle Remoto</h1>
    <pre>
        <?php 
            require "controlere.php";

            $c1 = new controleRemoto;
            $c1 -> ligar();
            //$c1 -> desligar();
            $c1 -> abrirMenu();
            $c1 -> maisVolume();
            //$c1 -> menosVolume(10);
            //$c1 -> ligarMudo();
            //$c1 -> desligarMudo();
            //$c1 -> play();
            //$c1 -> pause();
        ?>
    </pre>
</body>
</html>