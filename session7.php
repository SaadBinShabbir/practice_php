<?php 

$country_name = "Pakistan Zindabad";

// echo strlen($country_name); // get string length

// echo strrev($country_name);  //string reverse

//echo strtolower($country_name); //convert string into lowercase

// echo strtoupper($country_name); //convert to uppercase

// echo str_repeat($country_name,5); // repeat string values

// $country_name[4] = 'K'; // srting consider as a array 

//echo $country_name;

// echo abs(-20.5); // abs math function

// echo gettype($country_name); //get the type of variable

// echo var_dump($country_name); // get the information about variable

//print_r($country_name); //print collection 


// echo date('d-m-y'); //get the date according to system
// echo date('D-M-Y'); //get the date with name
// echo date('D'); // get the day with name

//echo time(); // get time but in numbers not any formate

// echo date('h:i:s a'); // get the time in exact formate 


function greeting(){  // declare the function
    echo "Good Morning";
    echo '<br>';
}

// greeting(); // calling the function
// greeting();
// greeting();
// greeting();


function welcome($name){ // declare the function that accepts parameter 
    echo "Welcome: ". strtoupper($name);
    echo '</br>';
}

// welcome('Ahad'); // call the function that accepts arguments
// welcome('Faizan');
// welcome('Zain');

function add($num1,$num2){ // decalre a function that plus 2 numbers
    // echo $num1 + $num2;

    $res = $num1 + $num2;
    return $res;
}

// add(20,56) // call a function that plus 2 numbers

$result =  add(20,50);

// echo $result;


function userGreeting($firstname = "Yasir",$lastname= "Khan"){

    echo "Welcome ".$firstname. ' '. $lastname;
} 

// userGreeting($firstname = "Shahbaz", $lastname = "Ahmed");
userGreeting($firstname = "Shahbaz");
?>