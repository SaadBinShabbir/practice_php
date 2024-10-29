<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User Registration</h1>

    <form action="index.php" method="POST">
        <label for="name">User id</label>
        <input type="text" placeholder="Your ID Here" name="userid" required><br><br>
        
        <label for="email">User Email</label>
        <input type="text" placeholder="Your Email Here" name="useremail" required><br><br>

        <label for="password">User password</label>
        <input type="text" placeholder="Your password Here" name="userpassword" required><br><br>

        <input type="submit" value="submit" name="submit">


    </form>

    <?php

    if(isset($_POST["submit"])){
        $name2 = $_POST["userid"];
        $email2 = $_POST["useremail"];
        $password2 = $_POST["userpassword"];
        echo $name2;
        echo "<br />";
        echo $email2;
        echo "<br />";
        echo $password2;
    }



?>
    


</body>
</html>