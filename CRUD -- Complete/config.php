<?php 

$host = "localhost";
$username = "root";
$password = "";
$database = "db_users";

$con = new mysqli($host,$username,$password,$database);

// if($con){
//     echo "Connection OK";
// }else{
//     echo "Error in Connection";
// }

/*
CREATE TABLE tbl_user(
    id int PRIMARY KEY AUTO_INCREMENT,
    name varchar(120),
    email varchar(50),
    gender varchar(20),
    mobile bigInt
    );
*/
?>