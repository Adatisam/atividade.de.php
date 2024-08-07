    <?php 
        const PAIS = 'Brasil';
        $nome = 'Rafael';
        $sobrenome = 'Kaucz';
        echo "Muito prazer, $nome $sobrenome";
        date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é dia " .date("d/M/Y");
        echo " A hora atual é " .date("G:i:s");
        print " eu moro no"  . PAIS;     
    ?>    