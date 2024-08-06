<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "primeira tag";
        $nome = "Kaucz";
        $sobrenome = "Thiago";
        print "eu me chamo $sobrenome $nome";
        date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é dia " .date("d/M/Y");
        echo " A hora atual é " .date("G:i:s")     
    ?>    
</body>
</html>