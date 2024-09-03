<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
    <link rel="stylesheet" href="../formularios/teste.css">
</head>
<body>
    <?php 
        $num1 = $_GET['num1']?? 0;
        $peso1 = $_GET['peso1']?? 0;
        $num2 = $_GET['num2']?? 0;
        $peso2 = $_GET['peso2']?? 0;
    ?>
    <main>
        <h1>Informe os valore</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="num1">Valor1</label>
            <input type="number" name="num1" id="num1">
            <label for="peso1">Peso1</label>
            <input type="number" name="peso1" id="peso1">
            <label for="num1">Valor2</label>
            <input type="number" name="num2" id="num2">
            <label for="peso1">Peso2</label>
            <input type="number" name="peso2" id="peso2">
            <input type="submit" value="Enviar">
        </form>
    </main>
    <section>
        <h2>Resultado dos valores</h2>
        <?php 
            $media = ($num1 + $num2) / 2;
            $mediapond = ($num1 * $peso1 + $num2 * $peso2) / ($peso1 + $peso2);
            print "<p>Realizando os cálculos com $num1, $peso1, $num2 e $peso2, temos: </p>";
            echo "<ul>";
            print "<li><p>A média aritimética dos valores escolhidos são: ". number_format($media, 3, ",", ".") ."</p></li>";
            print "<li><p>A média ponderada dos valores escolhidos são: ". number_format($mediapond, 3, ",", ".") ."</p></li>";
            echo "</ul>"
        ?>
    </section>

    
</body>
</html>