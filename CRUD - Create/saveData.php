<?php
include 'config.php';

if($_POST['submit']){

    $username = $_POST['name'];
    $useremail = $_POST['email'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];

   $myquery = "INSERT INTO tbl_user (name,email,gender,mobile) VALUES ('$username','$useremail','$gender',$mobile)";

  $result =   mysqli_query($con,$myquery);

  if($result){
    echo "Data Saved";
  }else{
    echo "error in data saving";
  }
   
   


}

?>