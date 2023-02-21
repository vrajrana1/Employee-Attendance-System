<!DOCTYPE html>
<html>
<head>
    <title>Delete Employee</title>
</head>
<body>
    <h1>Delete Employee</h1>
    <p>Are you sure you want to delete this employee</p>
    <form action="delete.php" method="post">
        <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">
        <input type="submit" value="Yes">
        <a href="list.php">Cancel</a>
    </form>
</body>
</html>
