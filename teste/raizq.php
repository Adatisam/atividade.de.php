<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiz quadrada</title>
    <link rel="stylesheet" href="../formularios/teste.css">
</head>
<body>
    <?php 
        $raiz = $_GET['raiz']?? 0;
    ?>
    <main>
        <h1>Informe o número!</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="raiz">Digite o número para retirar a raiz</label>
            <input type="number" name="raiz" id="raiz" step="0.01">
            <input type="submit" value="Tirar a raiz">
        </form>
    </main>
    <section>
        <h2>Resultado da raizes</h2>
        <?php 
            $raizquadrada = sqrt($raiz);
            $raizcub = $raiz ** (1/3); 
            echo "Analisando o número $raiz, temos: ";
            echo "<ul>";
            print "<li>A raiz quadrada é de ". number_format($raizquadrada, 3, ",", "." ) .".</li>";
            print "<li>A raiz cubica é de ". number_format($raizcub, 3, ",", "." ) .".</li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>