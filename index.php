<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User Registration</h1>

    <!-- <form action="index.php" method="GET"> -->
    <!-- <form action="index.php" method="POST"> -->
    <form action="form.php" method="POST">
        <label for="name">Name: </label>
        <input type="text" placeholder="Your Name here" name="username" required> <br><br>
        <label for="email">Email: </label>
        <input type="Email" placeholder="Your Email here" name="useremail" required> <br><br>
        <input type="submit" value="Submit" name="submit">
    </form>


    <?php
    

    /* echo $_GET["username"];
     echo "<br>";
     echo  $_GET["useremail"];
    */

    /*  $my_name = $_GET["username"];
     $my_email = $_GET["useremail"];

     echo "Username is :" . $my_name . "<br> and Useremail is :". $my_email;
    */

  /*  if(isset( $_GET['submit'])){
    // if(@$_GET['submit']){
     $my_name = $_GET["username"];
     $my_email = $_GET["useremail"];
     echo "Username is :" . $my_name . "<br> and Useremail is :". $my_email;
    }
    */
    
    if(isset( $_POST['submit'])){
     $my_name = $_POST["username"];
     $my_email = $_POST["useremail"];
     echo "Username is :" . $my_name . "<br> and Useremail is :". $my_email;
    }

    ?>

</body>
</html>