<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>

<body>
    <h2>Edit User</h2>
    <form autocomplete="off" method="post" action="">
        <?php
        require 'config.php';
        $id = $_GET['id'];
        $rows = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM users WHERE id = $id"));
        ?>
        <input type="hidden" id="id" value="<?php echo $rows['id'] ?>">
        <label for="">Name</label>
        <input type="text" value="<?php echo $rows['name'] ?>" id="name">
        <br>
        <label for="">Email</label>
        <input type="email" value="<?php echo $rows['email'] ?>" id="email">
        <br>
        <label for="">Gender</label>
        <select id="gender">
            <option value="Male" <?php if ($rows['gender'] == "Male") echo "Selected"; ?>>Male</option>
            <option value="Female" <?php if ($rows['gender'] == "Female") echo "Selected"; ?>>Female</option>
        </select>
        <br>
        <button type="submit" onclick="submitData('edit')">Edit</button>
    </form>
    <br>
    <a href="index.php">Go to Index</a>
    <?php require 'script.php'; ?>
</body>

</html>