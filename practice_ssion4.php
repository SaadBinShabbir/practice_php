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

//age

$age = [20,21,35,12];
sort($age); //sort
echo "<br>";
print_r($age);
echo "<br>";

rsort($age);
print_r($age);
echo "<br>";
echo "<hr>";

$names = ["name1"=>"Saad","name2"=>"Uzair","name3"=>"Ali","name4"=>"Asim"];
print_r($names);
echo "<br>";

asort($names);
print_r($names);

echo "<br>";
echo "<hr>";

$sbs2b1 = [

    ["saad",20,"saad@gmail.com"],
    ["ali",30,"ali@gmail.com"],
    ["asim",18,"Asim@gmail.com"],


];

print_r($sbs2b1);
echo "<br>";
echo "<br>";
echo $sbs2b1[1][2];


?>