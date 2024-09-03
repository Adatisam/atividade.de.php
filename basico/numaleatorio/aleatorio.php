<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador alestório</title>
    <link rel="stylesheet" href="../formularios/teste.css">
    <link rel="shortcut icon" href="../formularios/imagens/logophp.png" type="image/x-icon">
</head>
<body>
    <header>
        <h1>Gerador de número aleatório</h1>
    </header>
    <main>
        <?php 
            $min = 0;
            $max = 100;

            $numeroaleat = mt_rand($min, $max);

            print "<p>Gerando número aleaório entre $min e $max... \n</p>";
            echo "<p>O número gerado foi $numeroaleat</p>";
        ?>
        <button onclick="javascript:document.location.reload">Gerar novamente</button>
    </main>
    
</body>
</html>