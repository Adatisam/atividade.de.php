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
        $divisor = $_GET['num2']?? 1;
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="num1">Digite o dividendo</label>
            <input type="number" id="num1" name="num1" value=" <?php $dividendo?> ">
            <label for="num2">Digite o divisor</label>
            <input type="number" name="num2" id="num2" value=" <?php $divisor?> ">
            <input type="submit" value="Analisar">
            <input type="reset" value="Limpar">
        </form>
    </main>
    <section id="resultado">
        <h2>Estrutura da divisão</h2>
        <?php 
            $quociente = intdiv($dividendo, $divisor);  
            $resto = $dividendo % $divisor;
        ?>
        <table class="divisao">
            <tr>
                <td>
                    <?php 
                        $dividendo
                    ?>
                </td>
                <td>
                    <?php 
                        $divisor
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php 
                        $quociente
                    ?>
                </td>
                <td>
                    <?php 
                        $resto
                    ?>
                </td>
            </tr>
        </table>
    </section>

</body>
</html>