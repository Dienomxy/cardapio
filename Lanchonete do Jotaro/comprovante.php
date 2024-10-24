<?php

$quantidade1 = $_Post["quantidade1"];
$quantidade2 = $_Post["quantidade2"];
$quantidade3 = $_Post["quantidade3"];
$quantidade4 = $_Post["quantidade4"];
$quantidade5 =$_post["quantidade5"];
$quantidade6 =$_post["quantidade6"];
$obs = $post["obs"];
$valortotal= 0.00

if (isset($_Post["opcao1"])){
    $valortotal += 8.30*$quantiadade1;
}
    
if (isset($_Post["opcao2"])){
    $valortotal += 7.00*$quantiadade2;
}

if (isset($_ost["opcao3"])){
    $valortotal += 8.90*$quantiadade3;
}

if (isset($_post["opcao4"])){
    $valortotal +=6.00*$quantiadade4;
}
if (isset($_post["opcao5"])){
    $valortotal +=5.00*$quantiadade5;
}
if (isset($_post["opcao6"])){
    $valortotal += 5.50*$quantiadade6;
}
                
echo "pedido realizado com sucesso!<br>";
echo"sua conta ficou em R$: $valortotal";
echo "OBS: $obs";
echo "<br><a href='cardapio.html'>voltar</a>";