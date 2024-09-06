<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video-Aula</title>
</head>
<body>
    <pre>
        <?php 
            require "video.php";
            require "pessoa.php";
            require "aluno.php";
            
            $v = new Video("POO");
            //$v-> play();
            $v-> pause();
            $v-> like();
            var_dump($v);


            $al = new Aluno("Comand", 16, "M", 01);
            $al->assistirMaisUm();
            var_dump($al);

        ?>
    </pre>
</body>
</html>