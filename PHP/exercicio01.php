<?php
    $lista = [
        "nome"=> "Diego",
        "idade"=>28,
        "atributos"=>["forca"=>60, "agilidade"=>80, "destreza"=>50],
        "vida" => 1000,
        "mana" => 928
    ];

echo "meu nome é ".$lista["nome"]." e tenho ".$lista["idade"]."<br>";
echo "Tenho força = ".$lista["atributos"]["forca"]."<br>";
echo "Tenho agilidade = ".$lista["atributos"]["agilidade"]."<br>";
echo "Tenho destreza = ".$lista["atributos"]["destreza"]."<br>";
echo "Tenho vida = ".$lista["vida"]."<br>";
echo "Tenho mana = ".$lista["mana"]."<br>";

?>