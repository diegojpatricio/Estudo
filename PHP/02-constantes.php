<?php
//É o indentificador para um valor único. Esse valor não podera alterar durante a execução do script.
//as constantes são sempre globais, ou seja, pode ser sempre chamada no codigo.

//Utiliza a função 'define' passando dois paramentros. o primeiro sendo o nome da constante e o segundo o seu valor.
define("nome", "Diego Patrício");
define("idade", "28");
define("altura","1.85");
define("time", ['vasco','flamengo', 'botafogo','fluminense']);

echo "meu nome é ".nome. ", minha idade é ". idade. " e tenho ".altura. " e meu time é " .time[2];


?>
