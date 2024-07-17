<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>
            Integração com HTML + PHP
        </title>
    </head>
    <body>
        <div>
            <h2>Calculando a raiz de um numero</h2>
            <form method="get" action="integracao-html.php">
                valor: <input type="number" name="v"/>
                <input type="submit" value="calcular Raiz"/> 
            </form>
            <br/>
            <?php
                $valor = $_GET["v"];
                $rq = sqrt($valor); //Obtendo a raiz quadrada do valor da variavel.
                echo"A raiz de  $valor é igual a " . number_format($rq, 2);
            ?>
        </div>
        <div>
            <h2>Formulário</h2>
            <form method="get" action="integracao-html.php">
                Nome: <input type="text" name="nome"/><br/>
                Ano de nascimento: <input type="number" name="ano"/><br/>
                <fieldset><legend>Sexo</legend> <!--Fieldset para colocar borda nos campos do radio -->
                    <input type="radio" name="sexo" id="masc" value="homem" checked/>
                    <label form="masc">Masculino</label><br/>
                    <input type="radio" name="sexo" id="fem" value="mulher"/>
                    <label form="fem">Feminino</label>
                </fieldset><br/>
                <input type="submit" value="Enviar"/>
            </form>
            <?php
                $nome = isset($_GET["nome"])?$_GET["nome"]:"[nao informado]";
                $ano = isset($_GET["ano"])?$_GET["ano"]:0;
                $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
                $idade = date("Y") - $ano;
                echo"$nome é $sexo e tem $idade anos";
            ?>
        </div>
    </body>
</html>

