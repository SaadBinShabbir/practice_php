<?php 

include 'config.php';

$getid = $_GET['userId'];


$myquery = "DELETE FROM  tbl_user WHERE id = $getid";

$result = mysqli_query($con,$myquery);

if($result){
    echo '<script>window.location = "index.php"</script>';

  }else{
    echo "error in data saving";
  }





?>