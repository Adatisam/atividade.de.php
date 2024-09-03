<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora do tempo</title>
    <link rel="stylesheet" href="../formularios/teste.css">
</head>
<body>
    <?php 
        $tempo = $_GET['tempo']?? 0;
    ?>
    <main>
        <h1>Calculadora do tempo</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="tempo">Qual o total de segundos?</label>
            <input type="number" name="tempo" id="tempo" required>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalisando tudo</h2>
        <?php 
            $sobra = $tempo;
            $ano = (int)( $sobra / 31536000);
            $sobra = $sobra % 31536000;
            $mes = (int)($sobra / 2592000);
            $sobra = $sobra % 2592000;
            $semana= (int)($sobra / 604800);
            $sobra = $sobra % 604800;
            $dia = (int)($sobra / 86400);
            $sobra = $sobra % 86400;
            $hora = (int)($sobra / 3600);
            $sobra = $sobra % 3600;
            $min = (int)($sobra / 60) ;
            $sobra = $sobra % 60;
            $segundos = $sobra;

            echo "Analizando o valor que você digitou $tempo segundo, temos: ";
            print "<ul>";
            echo "<li> $ano Anos.</li>";
            echo "<li> $mes meses.</li>";
            echo "<li> $semana Semanas.</li>";
            echo "<li> $dia Dias.</li>";
            echo "<li> $hora  Horas.</li>";
            echo "<li> $min Minutos.</li>";
            echo "<li> $segundos Segundos.</li>";
            print "</ul>";
        ?>


    </section>
    
</body>
</html>