<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            body{
                font-family: Arial, Helvetica, sans-serif;
                background-color: #333 ;
                display: flex;
                                
            }
        </style>
    </head>
    <body>
        <div>
            <h2>Operações com Array</h2>
            <hr>
            <small>Curso básico de PHP</small>
            <?php
                //declarando arry multidimensional com o seus indices
                $alunos = array(
                    array(
                        'matricula' => '102030',
                        'nome' => 'Italo',
                        'ano_nasc' => '1993',
                        'cidade' => 'São Paulo',
                    ),

                    array(
                        'matricula' => '203040',
                        'nome' => 'Jessica',
                        'ano_nasc' => '1994',
                        'cidade' => 'São Paulo',
                    ), 
                    
                    array(
                        'matricula' => '304050',
                        'nome' => 'Zoe',
                        'ano_nasc' => '2022',
                        'cidade' => 'São Paulo',
                    ),
                    
                    array(
                        'matricula' => '405060',
                        'nome' => 'Maya',
                        'ano_nasc' => '2023',
                        'cidade' => 'São Paulo',
                    ),
                )
            ?>

            <h3> Array Push </h3>
            <?php 
            //Add um novo array com novos registros no array de alunos
                $aluno_novo = array();
                $aluno_novo ['matricula'] = '607080';
                $aluno_novo ['nome'] = 'Pipoca';
                $aluno_novo ['ano_nasc'] = 2018;
                $aluno_novo ['cidade'] = 'São Paulo';
                array_push($alunos, $aluno_novo);
                echo'<pre>';
                print_r($alunos);
                echo'</pre>';
             
            ?>


        </div>
    </body>
</html>