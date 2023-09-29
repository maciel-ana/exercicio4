<?php

    $numero = 5;
    $nome = "";

    //lê a variável
    switch($numero){

        //compara a variavel 
            case 4;
                echo "O número é igual a 4 <br>";
            break;

        //compara a variavel 
            case 5;
                echo "O numero é igual a 5 <br>";
            break;
    
        //valor nulo
        default:
            echo "O numero não corresponde aos valores <br>";
        }
        
        //le a veriavel
        switch($nome){
            case "Rosana":
                echo "O nome é Rosana";
            break;

        //compara a variavel 
            case "Isis":
                echo "O nome é Isis";
            break;

        //Valor nulo
        default: 
        echo "O nome não foi encontrado";
        }
?>