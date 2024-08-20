<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário mínimo</title>
    <link rel="stylesheet" href="../formularios/teste.css">
</head>
<body>
    <?php 
        $salario = $_GET['salario']?? 0;
    ?>
    <h1>Digite o valor do seu salário</h1>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Digite seu salário</label>
            <input type="number" name="salario" id="salario" step="0.01">
            <input type="submit" value="Verificar">
            <p>Salário mínimo atual: R$1412,00</p>
        </form>
    </main>
    <section>
        <?php 
            $salmin = 1412.00;
            $total = intdiv($salario, $salmin);
            $diferenca = $salario % $salmin;
            echo "<p>O seu salario de ". number_format($salario, 2, ",","."). "equivale a ". number_format($total, 2, ",", ".") ." salários mínimos com + " . number_format($diferenca, 2, ",", "."). ".</p>"
        ?>
    </section>
    
</body>
</html>