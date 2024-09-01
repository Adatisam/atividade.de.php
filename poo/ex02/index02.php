<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO2</title>
</head>
<body>
    <pre>
        <?php 
            require 'caneta02.php';
            $c1 = new caneta("BIC", "Azul", 0.5);
            $c2 = new caneta("BIX", "Azul", 1.5);

            var_dump($c1);
            var_dump($c2);

        ?>
    </pre>
    
</body>
</html>