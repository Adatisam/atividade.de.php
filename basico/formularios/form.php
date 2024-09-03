<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="teste.css">
    <link rel="shortcut icon" href="imagens/logophp.png" type="image/x-icon">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
            $nome = $_POST["nome"] ?? "sem nome";
            $sobrenome = $_POST["sobrenome"] ?? "desconhecido";
            echo "<p>É um prazer em conhece-lo $nome $sobrenome!, Seja bem vindo ao Fórum PHP</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior.</a></p>
    </main>
</body>
</html>