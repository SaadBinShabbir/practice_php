<?php
include 'config.php';

if($_POST['submit']){

 $userid = $_POST['id'];
 $username = $_POST['name'];
 $useremail = $_POST['email'];
 $gender = $_POST['gender'];
 $mobile = $_POST['mobile'];


$myquery = "UPDATE tbl_user SET name = '$username',email = '$useremail',gender = '$gender',mobile = $mobile WHERE id = $userid";

  $result =  mysqli_query($con,$myquery);

  if($result){
    // echo "Data Saved";
    echo '<script>window.location = "index.php"</script>';

  }else{
    echo "error in data saving";
  }
   
   


}

?>