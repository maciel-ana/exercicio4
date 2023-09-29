<?php
    $velocidade = 80;

    if ($velocidade = 41 && $velocidade <= 50){
         echo "Você está na velocidade correta";
    } elseif($velocidade == 40){
        echo "Atenção! você esta a $velocidade km/h.";
    } else {
        echo "Você foi multado! Ultrapassou a velocidade máxima (50km/h)";
    }
?>