<?php 

// For Loop

for($i=0;$i<10;$i++){
    echo $i;
    echo '<br>';
}

echo "<hr>";

// While

$n = 1;

while($n < 20){
    echo $n;
    echo '<br>';
    $n++;
}

echo "<hr>";

// do-While

$b = 5;

do{
    echo $b;
    echo '<br>';
    $b++; 
}while($b <= 1);

echo '<hr>';



$names = ["Zain","Omar","Uzair","Bilal","Asim","Farman"];


foreach($names as $name){
    echo $name;
    echo "<br>";
}


?>