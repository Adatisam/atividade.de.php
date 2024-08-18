<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
    <link rel="stylesheet" href="../formularios/teste.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['valor1']?? 0;
        $valor2 = $_GET['valor2']?? 0;
    ?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">Valor 1</label>
            <input type="number" id="valor1" name="valor1">
            <label for="valor2">Valor 2</label>
            <input type="number" id="valor2" name="valor2">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section id="result"> 
        <h2>Resultado da soma</h2>
        <?php 
            $soma = $valor1 + $valor2;
            echo "<p>A soma entre os valores digitados é <strong>igual a $soma</strong>.</p>";
        ?>
    </section>
</body>
</html>