<?php

$carros = array("BMW", "Velost", "Hilux", "Camaro","UNO");

print_r($carros);
echo "<br/><br/>";
echo $carros[4];
echo "<hr>";
//Inserindo elemento no Array
$carros[5] = "GOL";
print_r($carros);
echo "<br/><br/>";
echo $carros[5];

//Count
echo "<hr>";
$totalCarros = count($carros);
echo "O total de carros são $totalCarros carros";
echo "<hr>";
//Foreach
echo "<b>Foreach:</b><br><br>";
foreach($carros as $valor){
    echo $valor."<br>";
}

//Array Associativos
echo "<hr>";
$pessoa = array("nome"=>"Diego", "idade"=> 28, "altura"=> 1.75);
$pessoa["cidade"] = "cabedelo";
print_r($pessoa);
echo"<br><br>";
foreach($pessoa as $indice => $valor){
    echo $indice.": ".$valor."<br>";

}

//Arrays 
echo"<hr>";
$times = array(
    "cariocas"=> array("Botafogo", "Vasco", "Flamengo"),
    "Paraibano"=> array("Campeão"=>"Belo", "Vice"=>"Treze", "Terceiro"=>"Campinense")
);

foreach($times["Paraibano"] as $indice => $valor){
    echo $indice.": ".$valor."<br>"; 

}
?>