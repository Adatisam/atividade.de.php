<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
    <link rel="stylesheet" href="../formularios/teste.css">
    <link rel="shortcut icon" href="../formularios/imagens/logophp.png" type="image/x-icon">
</head>
<body>
    <header>
        <h1>Contador de sucessor e antecessor</h1>
    </header>
    <main>
        <?php
            $numero = $_POST["numero"];
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;
            print "<p>Seu número digitado foi de $numero</p>
            <p>Seu antecessor é $antecessor</p>
            <p>Seu sucessor é $sucessor</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
    </main>
</body>
</html>