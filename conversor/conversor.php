<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas</title>
    <link rel="stylesheet" href="../formularios/teste.css">
    <link rel="shortcut icon" href="../formularios/imagens/logophp.png" type="image/x-icon">
</head>
<body>
    <main>
        <header>
            <h1>Conversor de moedas</h1>
        </header>
            <?php
                //cotação vinda por API do Banco Central
                $inicio = date("m-d-Y", strtotime("-7 days"));
                $fim = date("d/m/Y");

                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,cotacaoVenda,dataHoraCotacao;';

                $dados = json_decode(file_get_contents($url), true);

                $cotacao = $dados["value"][0]["cotacaoCompra"];
                
                //ou, cotacao manual
                //$cotacao = 5.50;

                $real = $_REQUEST["dolar"] ?? 0;
                $resposta = $real / $cotacao;

                $padrao = numfmt_create("pt-BR",NumberFormatter::CURRENCY);

                print   "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . "equivalem a " . numfmt_format_currency($padrao, $resposta, "USD") . "</p>";
            ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>