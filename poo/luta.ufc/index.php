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
            require "luta.php";

            $l1 = new lutador("Pretty boy", "França", 31, 1.75, 68.9, 11, 2, 1 );
            //var_dump($l1)
            $l1 -> apresentar();
            //$l1 -> status();
            //$l1 -> ganharLuta();
            //$l1 -> perderLuta();
            //$l1 -> empatarLuta();

            $l2 = new lutador("Leitão", "Brasil", 25, 1.86, 123.88, 2, 8, 8);
            //var_dump($l2);
            $l2 -> apresentar();
            //$l2 -> status();
            //$l2 -> ganharLuta();
            //$l2 -> perderLuta();
            //$l2 -> empatarLuta();

            $l3 = new lutador("Noronha", "EUA", 30, 1.90, 95.60, 12, 0, 2);
            //var_dump($l3);
            $l3 -> apresentar();
            //$l3 -> status();
            //$l3 -> ganharLuta();
            //$l3 -> perderLuta();
            //$l3 -> empatarLuta();

            $l4 = new lutador("NakBaruk", "Inglaterra", 25, 1.82, 60.80, 10, 1, 2);
            //var_dump($l4);
            $l4 -> apresentar();
            //$l4 -> status();
            //$l4 -> ganharLuta();
            //$l4 -> perderLuta();
            //$l4 -> empatarLuta();

            $l5 = new lutador("Frangolino", "Alemanhã", 33, 1.45, 53.49, 20, 2, 0);
            //var_dump($l5);
            $l5 -> apresentar();
            //$l5 -> status();
            //$l5 -> ganharLuta();
            //$l5 -> perderLuta();
            //$l5 -> empatarLuta();

            $UFC01 = new luta();
            $UFC01 -> marcarLuta($l1, $l2);
            $UFC01 -> lutar();

        ?>
    </pre>
</body>
</html>