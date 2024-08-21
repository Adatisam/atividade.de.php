<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste</title>
    <link rel="stylesheet" href="../formularios/teste.css">
</head>
<body>
    <?php 
        $preco = $_GET['preco']?? 0;
        $reajuste = $_GET['reajuste']?? 0;

    ?>
    <main>
        <h1>Reajustador de preços</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do produto (R$)</label>
            <input type="number" name="preco" id="preco" step="0.01">
            <label for="reajuste">Qual sera o perçentual do reajuste? <?php print "($reajuste)"?></label>
            <input type="range" name="reajuste" id="reajuste">
            <input type="submit" value="Reajustar" min="0" max="100">
        </form>
    </main>
    <section>
        <h2>Resultado de reajuste</h2>
        <?php 
            $valor = ($reajuste * $preco) / 100 ;
            $valornovo = $preco + $valor;
            echo "O produto que custava R$".number_format($preco, 2, ",", "." )." com $reajuste% de aumento vai passar a custar R$".number_format($valornovo, 2, ",", ".")." a partir de agora.";  
        ?>
    </section>
</body>
</html>