<!DOCTYPE html>
<html>
    <head>
        <meta  harset="UTF-8"/>
        <title>Calculo IMC</title>
        <style>
            body{
                font-family: Arial, sans-serif ;
                background-color: steelblue;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin:0;
            }
            h4{
                display: block;
                margin-top: 10px;
                font-weight: bold;
            }
            input[type="text"]{
                width: calc(100% - 22%);
                padding: 10px;
                margin-top: 5px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
            input[type="submit"]{
                background-color: #007bff;
                color: #fff;
                border: nome;
                margin-top: 20px;
                padding: 10px 20px;
                text-transform: uppercase;
                font-weight: bold;
                border-radius:px;
                cursor: pointer;
                transition: background-color 0.3s;
            }
            input[type="submit"]:houver {
                background-color: #0056b3;
            }
            .result{
                margin-top: 10px;
                color:black
            }
        </style>
    </head>
    <body>
        <div class="container">
            <form>
                <h2>Calculadora de IMC para adultos</h2>
                <form method="get" action="calculo-imc.php">
                    <fieldset>
                    <h4> Altura: </h4><input type="text" name="a">
                    <form method="get" action="calculo-imc.php">
                    <h4> Peso: </h4><input type="text" name="p">
                    <br/>
                    <input type="submit" value="Calcular IMC"/>
                </fieldset>
                <?php
                        $altura = $_GET["a"];
                        $peso = $_GET["p"];
                        $calculo = $peso / pow($altura, 2);
                        $imcFormatado = number_format($calculo, 2);

                        if($imcFormatado<=24.9){
                            echo"<h4>Seu IMC é $imcFormatado e indica peso ideal.</h4>";
                        }else{
                            echo"Seu IMC é $imcFormatado e indica sobrepeso.</h4>";
                        }
                ?>
            </form>
        </div>
    </body>
</html>
