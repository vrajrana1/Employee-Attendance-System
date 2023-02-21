<!DOCTYPE html>
<html>
<head>
    <title>Update Employee</title>
</head>
<body>
    <h1>Update Employee</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?php echo $employee['name']; ?>">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" value="<?php echo $employee['email']; ?>">
        <input type="submit" value="Update Employee">
    </form>
    <a href="list.php">Cancel</a>
</body>
</html>
