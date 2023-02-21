<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
</head>
<body>
    <h1>Add Employee</h1>
    <form action="add.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name"></br>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email"></br>
        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone"></br>
        <label for="address">Address:</label>
        <input type="text" name="address" id="address"></br>
        <input type="submit" value="Add Employee">
    </form>
    <a href="list.php">Cancel</a>
</body>
</html>
