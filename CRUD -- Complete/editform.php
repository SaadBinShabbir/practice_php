<?php 
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<?php

$getid = $_GET['userId'];

    $myquery = "SELECT * FROM tbl_user WHERE id = $getid";
    // echo  $myquery;

   $result =  mysqli_query($con,$myquery);


//    print_r($result);
?>

<body>
    <h1>Edit</h1>

    <?php 
    
    while($row = mysqli_fetch_assoc($result)) {
        
    ?>

    <form action="updateData.php" method="POST">
        <label for="name">Name: </label>
        <input type="text" name="id" value="<?php echo $row['id']; ?>" hidden>
        <input type="text" placeholder="your name here" value="<?php echo $row['name']; ?>" required name="name"> <br>

        <label for="email">Email: </label>
        <input type="Email" placeholder="your email here" value="<?php echo $row['email']; ?>" required name="email"> <br>

        <label for="gender">Gender: </label> <br>
      Male:   <input type="radio" name="gender" value="male" <?php  if ($row['gender'] == 'male'){
            echo 'checked';
           }  ?> > | Female:  <input type="radio" name="gender" <?php 
           if ($row['gender'] == 'female'){
            echo 'checked';
           }
           ?> value="female"> <br>

      <label for="mobile">Mobile: </label>
      <input type="mobile" placeholder="your mobile here" value="<?php echo $row['mobile']; ?>" required name="mobile"> <br>

      <input type="submit" value="Update" name="submit">        
    </form>
<?php
}
?>
</body>
</html>