<?php
//FOR
echo "<hr>";
echo "Utilizando FOR <br><hr>";
for($a = 0; $a <= 10; $a++){
    for($c = 0; $c <= 10; $c++){
        echo"-";
    }
    echo "<br>";
}
echo "<hr>";
echo "Utilizando WHILE <br><hr>";
//While
$a = 0;
while($a <= 10){
    $c = 0;
    while($c <=10){
        echo "-";
        $c++;
    }
    echo "<br>";
    $a++;
}