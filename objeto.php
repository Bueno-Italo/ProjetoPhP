<?php
    class Caneta{
        //Declarando atributos
        var $modelo;
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;

        //Metodos
        function rabiscar(){
            if ($this->tampada == true){ // this significa que o objeto chamou/condição para verificar se está tampada
                echo'<p>Erro! não pode rabiscar...</p>';
            }
            else{
                echo'<p>Estou rabiscando...</p>';
            }
        }

        function tampar(){
            $this->tampada = true;
        }

        function destampar(){
            $this-> tampada = false;
        }
    }
?>