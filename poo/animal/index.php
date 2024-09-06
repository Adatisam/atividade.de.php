<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reino Animal</title>
</head>
<body>
    <pre>
        <?php 
            require "animal.php";
            require "mamifero.php";
            require "reptil.php";
            require "aquatico.php";
            require "ave.php";

            require "arara.php";
            require "cachorro.php";
            require "canguru.php";
            require "cobra.php";
            require "tartaruga.php";
            require "goldfish.php";
            require "lobo.php";


            $m1 = new Cachorro();
            $m1->setPeso(33.5);
            $m1->setIdade(3);
            $m1->setMembro(4);
            $m1->setCorPelo("Preto");
            //$m1->alimentar();
            //$m1->locomover();
            //$m1->emitirSom();
            $m1->reagirFrase("Olá");
            $m1->reagirFrase("Vai apanhar!");
            $m1->reagirHora(11, 45);
            $m1->reagirHora(21, 00);
            $m1->reagirDono(true);
            $m1->reagirDono(false);
            $m1->reagirIdadePeso(5, 3.5);
            $m1->reagirIdadePeso(11, 11);


            /*$lb1 = new Lobo();
            $lb1->setPeso(42.5);
            $lb1->setIdade(5);
            $lb1->setMembro(4);
            $lb1->setCorPelo("Cinza");
            $lb1->alimentar();
            $lb1->locomover();
            $lb1->emitirSom();

            $r1 = new Tartaruga();
            $r1->setPeso(25);
            $r1->setIdade(2);
            $r1->setMembro(5);
            $r1->setCorEscama("Verde");
            $r1->alimentar();
            $r1->locomover();
            $r1->emitirSom();

            $p1 = new Goldfish();
            $p1->setPeso(0.500);
            $p1->setIdade(5);
            $p1->setMembro(4);
            $p1->setCorEscama("Azul");
            $p1->alimentar();
            $p1->locomover();
            $p1->emitirSom();
            $p1->soltarBolha();

            $a1 = new Ave();
            $a1->setPeso(0.200);
            $a1->setIdade(3);
            $a1->setMembro(4);
            $a1->setCorPena("Vermelho");
            $a1->alimentar();
            $a1->locomover();
            $a1->emitirSom();
            $a1->fazerNinho();*/
        ?>
    </pre>
</body>
</html>