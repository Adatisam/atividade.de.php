<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
    <pre>
        <?php
            require 'caneta.php';
            $c1 = new caneta();
            $c1 -> setModelo("BIC");
            $c1 -> setPonta(0.5);
            var_dump($c1);
            echo "A caneta é {$c1 -> getModelo()} de modelo e tem {$c1 -> getPonta()} de ponta.";
        ?>
    </pre>
</body>
</html>