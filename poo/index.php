<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
    <?php 
        require 'caneta.php';
        $c1 = new caneta;
        $c1 -> cor = "Azul";
        $c1 -> modelo = "BIC cristal";
        $c1 -> ponta = 0.5;
        $c1 -> tampada = true;
        var_dump($c1);
        $c1 -> rabiscar();
        $c1 -> tampar();
    ?>
</body>
</html>