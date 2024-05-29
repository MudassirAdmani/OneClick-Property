<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <h2>Index</h2>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
        <?php
        require 'config.php';
        $rows = mysqli_query($con, "SELECT * FROM users");
        ?>
        <?php foreach ($rows as $row) : ?>
            <tr id=<?php echo $row['id']; ?>>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['gender'] ?></td>
                <td>
                    <a href="edituser.php?id=<?php echo $row['id'] ?>">Edit</a>
                    <button onclick="submitData(<?php echo $row['id'] ?>)">Delete</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="adduser.php">Add User</a>
    <?php require 'script.php' ?>
</body>

</html>