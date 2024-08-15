<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
    <link rel="stylesheet" href="../formularios/teste.css">
</head>
<body>
    <main>
        <pre>
            <?php
                /*print "<h1>Superglobal COOKIE</h1>";
                setcookie("dia-da-semana", "QUINTA", time() + 3600);
                var_dump($_COOKIE);
            
                echo "<h1>Superglobal SESSION</h1>";
                session_start();
                $_SESSION["teste"] = "FUNCIONAL!";
            
                echo "<h1>Superglobal ENV</h1>";
                var_dump($_ENV);
                foreach (getenv() as $c => $v) {
                    echo "<br> $c -> $v </br>";
                }
            
                echo "<h1>Superglobal SEVER</h1>";
                var_dump($_SERVER);

                echo "<h1>Superglobal GLOBAL</h1>";
                var_dump($GLOBALS);*/

                $_SERVER['PHP_SELF'];
                $valor1 = $_GET['valor1']?? 0;
                $valor2 = $_GET['valor2']?? 0;
                $soma = $_GET['resultado'];
                $valor1 + $valor2;
            ?>
        </pre>
    </main>

</body>
</html>