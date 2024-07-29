<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <div>
            <h2>Exercicio: Condicionais e loop foreach</h2>
            <hr>
            <small>Curso básico de PHP</small>
            <p>Criando um array com produtos com o select box e depois para desabilitar os itens que não estão em estoque</p><br/>

            <h3>Selecione o produto</h3>

            <?php
                $produto = array(
                    array(
                        'nome' =>'Camera FujiFilm XT1',
                        'preco' => 1200,
                        'estoque' => 45, 
                    ),
                    array(
                        'nome' => 'Camera Nikon D5300',
                        'preco' => '539',
                        'estoque' => 0
                    ),
                    array(
                        'nome' => 'Lentes AF-P NIKKOR 70-300mm',
                        'preco' => 800,
                        'estoque' => 1
                    ),
                    array(
                        'nome' => 'SpeedLigth SB-300',
                        'preco' => '146,50',
                        'estoque' => '0'
                    ),
                )
            ?>
            <select>
                <option>Nenhum produto selecionado</option>

                <?php foreach($produto as $item){ ?>
                
                <option><?php if ($item['estoque'] <= 0) { echo 'disable' ;} ?>><?php echo $item['nome'] . ' - $ ' . number_format($item['preco'], 2,",","."); ; ?></option>

                <?php } ?>
            </select>
        </div>
    </body>
</html>