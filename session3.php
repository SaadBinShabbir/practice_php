<?php 

echo "Good Morning Students";
echo '<br>';



if(2<5)
{
echo "2 is less than 5";
}

echo "<br>";


$name = "Saad";


if($name == "Saad"){
    echo "This is Saad";
} else {
    echo "This is a Student";
}

echo "<br>";

//else If
$ammar_percentage  = 33;

if($ammar_percentage > 90){
    echo 'A1ne Grade';
}elseif($ammar_percentage > 80){
    echo 'A Grade';
}elseif($ammar_percentage > 70){
    echo 'B Grade';
}elseif($ammar_percentage > 60){
    echo 'C Grade';
}elseif($ammar_percentage > 50){
    echo 'D Grade';
}elseif($ammar_percentage > 40){
    echo 'E Grade';
}elseif($ammar_percentage > 30){
    echo 'F Grade, Fail';
}else{
    echo "Fail";
}

echo '<br>';


//Nested If
$my_name;

if(!empty($my_name)){  //Value is here or not

    if($my_name == 'Sarim'){ //Value is Sarim or not
        echo "Name is Sarim";
    }else{
        echo "Name is Saad";
    }

}else{
    echo "No Name here";
}

echo "<br>";

//Switch Statement
$day = "Monday";
switch($day) {
    case 'Monday':
        echo "Today is Monday";
        break;
    case 'Tuesday':
        echo "Today is Tuesday";
        break;
    case 'Wednesday':
        echo "Today is Wednesday";
        break;
    case 'Thursday':
        echo "Today is Thursday";
        break;  
    case 'Friday':
        echo "Today is Friday";
        break;
    case 'Saturday':
        echo "Today is Saturday";
        break;    
    case 'Sunday':
        echo "Today is Sunday";
        break; 
    default:
        echo "Every day is sunday";     

}









?>