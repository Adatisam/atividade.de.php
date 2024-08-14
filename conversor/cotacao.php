<pre>
    <?php
        $ini = date("m-d-Y", strtotime("-7 days"));
        $fim = date("d/m/Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $ini .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,cotacaoVenda,dataHoraCotacao;';
    
        $dados = json_decode(file_get_contents($url),true);
    
        //var_dump($dados);
        $cotacao1 = $dados["value"][0]["cotacaoCompra"];

        print "A cotação foi de $cotacao1!";
    ?>
</pre>