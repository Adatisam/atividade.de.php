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
            $al2 = new Aluno("Cobra", 20, "M", 02);
            var_dump($al2);

            $vi= new Visualisacao($al, $v);
            var_dump($vi);
            $vi-> avaliar();
            $vi->avaliarNota(2);
            $vi->avaliarPorcem(2);
            $vi2= new Visualisacao($al2, $v);
            var_dump($vi2);
            $vi2-> avaliar();
            $vi2->avaliarNota(5);
            $vi2->avaliarPorcem(5);

        ?>
    </pre>
</body>
</html>