<?php

echo "Good Morning";

echo "<br>";
echo "<hr>";

// -----Numerical array ------
$std = ["Saad","Asim","Ali","Azan"];
//echo $std;

print_r($std); //show all values
echo "<hr>";
echo "<br>";
//echo "<br>";

echo $std[1]. ' ','is a Good Student.';

$std[1] = "Sarim"; //update the value
echo "<br>";

echo $std[1];
echo "<hr>";
echo "<br>";

//var_dump($std);
//------ Associative array -----
$std1 = ["name"=>"Omar","age"=>"20","email"=>"omar@gmail.com"];

print_r($std1);
echo "<br>";

echo $std1['email'];
echo "<br>";
echo "<br>";

var_dump($std1);

$new_std = sort($std);

echo "<hr>";

?>