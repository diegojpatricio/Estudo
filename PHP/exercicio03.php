<?php
//FOR
echo "<hr>";
echo "Utilizando FOR <br><hr>";

for($a=0; $a <= 20; $a++){
    echo "<br>";
    for($b=0;$b<=$a;$b++){
        echo "-";
    }
}

//WHILE
echo "<hr>";
echo "Utilizando WHILE <br><hr>";

$a=0;
while($a<=20){
    $b=0;
    while($b<=$a){
        echo"-";
        $b++;
    }
    $a++;
    echo"<br>";
}