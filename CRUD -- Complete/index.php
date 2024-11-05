<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

<h1>Users</h1>

<a href="form.php">
<button>Create User</button>
</a>
<table border="1">
    
        <thead>
        <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Mobile</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>

        <?php 
        
        $myquery = "SELECT * FROM tbl_user";

        $result =  mysqli_query($con,$myquery);


    $count = 1;
    while ($myrow = mysqli_fetch_assoc($result)) { ?>
        <!--  echo $myrow['name'];
         echo '<br>'; -->
            <tr>
                <td><?php echo $count ?></td>
                <td><?php echo $myrow['name'] ?></td>
                <td><?php echo $myrow['email'] ?></td>
                <td><?php echo $myrow['gender'] ?></td>
                <td><?php echo $myrow['mobile'] ?></td>
                <td>
                    <a href="editform.php?userId=<?php echo $myrow['id'] ?>">Edit</a> | 
                    <a href="delete.php?userId=<?php echo $myrow['id'] ?>">Delete</a>
                </td>
            </tr>

           <?php 
           $count++;
                    }
           ?> 
        </tbody>
    
</table>

</body>
</html>