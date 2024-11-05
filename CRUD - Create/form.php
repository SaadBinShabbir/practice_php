<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <h1>Save User</h1>

    <form action="saveData.php" method="POST">
        <label for="name">Name: </label>
        <input type="text" placeholder="your name here" required name="name"> <br>

        <label for="email">Email: </label>
        <input type="Email" placeholder="your email here" required name="email"> <br>

        <label for="gender">Gender: </label> <br>
      Male:   <input type="radio" name="gender" value="male"> | Female:  <input type="radio" name="gender" value="female"> <br>

      <label for="mobile">Mobile: </label>
      <input type="mobile" placeholder="your mobile here" required name="mobile"> <br>

      <input type="submit" value="Submit" name="submit">        
    </form>

</body>
</html>