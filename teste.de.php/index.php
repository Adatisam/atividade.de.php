    <?php 
        const PAIS = 'Brasil';
        $nome = 'Rafael';
        $sobrenome = 'Kaucz';
        echo "Muito prazer, $nome $sobrenome";
        date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é dia " .date("d/M/Y");
        echo " A hora atual é " .date("G:i:s");
        print " eu moro no"  . PAIS;

        $num = '[63,5,88,1,2]';
        echo "os valores são $num";  
        
        $nome = '[63,5,88,1,2]';
        echo "eu gosto do \" $nome \" E ver essas gameplay!";
    ?>    