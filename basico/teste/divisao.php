<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão</title>
    <link rel="stylesheet" href="../formularios/teste.css">
</head>
<body>
    <?php 
        $dividendo = $_GET['num1']?? 0;
        $divisor = $_GET['num2']?? 0;
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="num1">Digite o dividendo</label>
            <input type="number" id="num1" name="num1" >
            <label for="num2">Digite o divisor</label>
            <input type="number" name="num2" id="num2" >
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Estrutura da divisão</h2>
        <?php 
            $quociente = intdiv($dividendo, $divisor);  
            $resto = $dividendo % $divisor;
        ?>
        <table class="divisao">
            <tr>
                <td>
                    <?php 
                        print $dividendo;
                    ?>
                </td>
                <td>
                    <?php 
                        print $divisor;
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php 
                        print $quociente;
                    ?>
                </td>
                <td>
                    <?php 
                        print $resto;
                    ?>
                </td>
            </tr>
        </table>
    </section>

</body>
</html>