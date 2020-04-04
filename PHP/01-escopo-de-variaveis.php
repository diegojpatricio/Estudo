<?php
//ESCOPO GLOBAL
$nome = "Diego";
function exibirNome(){
//ESCOPO LOCAL
    global $nome;
    echo $nome;
}
exibirNome();
echo "<hr>";
///////////////////////////////////////////////////
//Variavel Global
$a = 1;
$b = 3;
$c =7;

function soma(){
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c']; 
}
soma();
?>