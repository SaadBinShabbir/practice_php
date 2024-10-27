<?php

echo "Good Morning";

echo "<br>";
echo "<hr>";
//  ---- Numerical array ----
$stds = ["Manan","Ammar","Omar"];
// echo $stds;

print_r($stds); //show all values

echo "<br>";

echo $stds[2]. ' is a Good Student.';

$stds[1] = "Sarim"; //update the value
echo "<br>";

echo $stds[1]; 
echo "<hr>";
echo "<br>";

// var_dump($stds);

//  ---- Associative array ----
$std1 = ["name"=>"Omar","age"=>19,"email"=>"omar@gmail.com"];

print_r($std1);
echo "<br>";

echo $std1['name'];
echo "<br>";

var_dump($std1);

$new_std = sort($stds);
// print_r($stds)
echo "<hr>";
$age = [20,30,12,5,1,3];
sort($age); //sort
echo "<br>";
print_r($age);
echo "<br>";

rsort($age);
print_r($age);
echo "<br>";

$names = ["name1"=>"Zain","name2"=>"Omar","name3"=>"Uzair","name4"=>"Bilal","name5"=>"Asim"];
print_r($names);
echo "<br>";

asort($names);
print_r($names);

echo "<br>";
echo "<hr>";


$batch2b1 = [
    ["Omar",19,"omar@gmail.com"],
    ["Hamdan",22,"hamdan@gmail.com"],
    ["Sarim",20,"sarim@gmail.com"]
];
print_r($batch2b1);
echo "<br>";
echo $batch2b1[1][2];

?>