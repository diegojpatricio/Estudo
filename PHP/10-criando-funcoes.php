<?php

function exibirNome($nome){
    echo"meu nome é $nome";
}
exibirNome("Diego Patrício");

echo "<hr>";

function calcularMedia($nome, $n1, $n2, $n3, $n4){
    $media = ($n1 + $n2 + $n3 + $n4)/4;
    if($media >= 7){
        echo "$nome está APROVADO";
    }else{
        echo"$nome est[a REPROVADO";
    }
}
calcularMedia("Diego Patricio", 10, 5, 7, 6);
?>