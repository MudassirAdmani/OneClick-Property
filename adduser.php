<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>

<body>
    <h2>Add User</h2>
    <form autocomplete="off" method="post" action="">
        <label for="">Name</label>
        <input type="text" id="name">
        <br>
        <label for="">Email</label>
        <input type="email" id="email">
        <br>
        <label for="">Gender</label>
        <select id="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        <br>
        <button type="submit" onclick="submitData('insert')">Submit</button>
    </form>
    <br>
    <a href="index.php">Go to Index</a>
    <?php require 'script.php'; ?>
</body>

</html>