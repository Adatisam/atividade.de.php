<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de Números inteiros</title>
    <link rel="stylesheet" href="../formularios/teste.css">
    <link rel="shortcut icon" href="../formularios/imagens/logophp.png" type="image/x-icon">
</head>
<body>
    <header>
        <h1>Analisador de Números</h1>
    </header>
    <main>
        <?php
            $valor = $_POST["numero"] ?? 0;
            echo "<p>Analisando o número " . number_format($valor, 3, "," , ".")." informado pelo usuário:</p>";
            
            $inteira = (int) $valor;
            $fracionaria = $valor - $inteira;
            print "<ul><li><p>A parte inteira do número é: ". number_format($inteira, 0 , "," , "."). "</p></li>";
            print "<li><p>A parte fracionária é: ". number_format($fracionaria, 3 , "," , "."). "</p></li></ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>