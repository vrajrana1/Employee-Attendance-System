<!DOCTYPE html>
<html>
<head>
    <title>Mark Attendance</title>
</head>
<body>
    <h1>Mark Attendance</h1>
    <form action="mark.php" method="post">
        <label for="employee_id">Employee:</label>
        <select name="employee_id" id="employee_id">
            <?php foreach ($employees as $employee): ?>
                <option value="<?php echo $employee['id']; ?>"><?php echo $employee['name']; ?></option>
            <?php endforeach; ?>
        </select>
        <br><br>
        <input type="submit" value="Mark Attendance">
    </form>
</body>
</html>
