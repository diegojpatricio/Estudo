<?php
/*
$nota=2;
if($nota >= 7){
    echo "Aluno APROVADO";
}
elseif($nota < 7 && $nota >= 5 ){
    echo "Aluno APTO A FINAL ";
}
elseif($nota < 5){
    echo"Aluno REPROVADO";
}else{
    echo "Nota Inesistente";
}
*/

/*CONDICIONAL TERNARIA
$idade = 18;
echo ($idade < 18) ? "Maior de Idade" : "Menor de Idade";
*/

//Condicional NULL CAO
$nome="Diego";
//$sobrenome="Patricio";

$nomeCompleto = $nome;
//$nomeCompleto .=isset($sobrenome)?$sobrenome:null;
$nomeCompleto .=$sobrenome ?? ""; //Esta é a forma abreviada
echo $nomeCompleto
?>