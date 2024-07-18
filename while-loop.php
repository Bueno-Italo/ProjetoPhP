!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>
            Loop while
        </title>
    </head>
    <body>
    <h3>Selecione o ano de nascimento:</h3>

<?php
$ano_atual = date('Y');
$ano = $ano_atual;
?>

    <select>
        <option>Selecione o ano</option>
    
        <?php
            while ($ano > 1980) { ?>
                <option><?php echo $ano; ?></option>
                <?php $ano = $ano -1; ?>
        <?php } ?>
        
    </select>

        <h3>Selecione o ano estimado de aposentadoria:</h3>
        <select>
            <option>Selecione o ano</option>

            <?php for ($ano = $ano_atual; $ano<2050; $ano = $ano + 1) {?>
                <option><?php echo $ano; ?></option>

            <?php } ?>
        
        </select>
    </body>
</html>
