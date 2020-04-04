<?php
//FOR
//É utilizado quando sabemos antecipadamente o numero de repeticoes;
for ($contador = 0; $contador <= 10; $contador++){
    echo "8 x $contador = ".($contador*8)."<br>";
}
echo"<hr>";

//FOREACH
//É utilizado para percorrer arrays
//para cada
$cores = array("Vermelho", "Verde", "Azul");
foreach ($cores as $valor){
    echo "$valor <br>";
}
echo"<hr>";
$cores = array("Vermelho", "Verde", "Azul");
foreach ($cores as $indece => $valor){
    echo "$indece- $valor <br>";
}
?>
