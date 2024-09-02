<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nonsenso</title>
</head>
<body>
    <h1>Combate de UFC</h1>
    <pre>
        <?php 
            require "lutador.php";
            $l1 = new lutador("Pretty boy", "França", 31, 1.75, 68.9, 11, 2, 1 );
            //var_dump($l1)
            $l1 -> apresentar();
            $l1 -> status();
            //$l1 -> ganharLuta();
            //$l1 -> perderLuta();
            //$l1 -> empatarLuta();

        ?>
    </pre>
</body>
</html>