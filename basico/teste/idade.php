<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linha do tempo</title>
    <link rel="stylesheet" href="../formularios/teste.css">
</head>
<body>
    <?php 
        $anoagora = date("Y");
        $anoatual = $_GET['anoatual']?? $anoagora;
        $anonasc = $_GET['anonasc']?? 1900;
    ?>
    <main>
        <h1>Calculando sua idade</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="anonasc">Em que ano você nasceu?</label>
            <input type="number" name="anonasc" id="anonasc" min="1900">
            <label for="anoatual">Quer saber sua idade em que ano? <?php echo "(atualmente estamos em $anoagora)"?></label>
            <input type="number" name="anoatual" id="anoatual" min="1900">
            <input type="submit" value="Qual minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $idade = $anoatual - $anonasc;
            print "quem nasceu em $anonasc, vai ter $idade em $anoatual!";
        ?>
    </section>
</body>
</html>