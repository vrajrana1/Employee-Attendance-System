<!DOCTYPE html>
<html>
<head>
    <title>Employee Attendance System</title>
</head>
<body>
    <h1>Employee Attendance System</h1>
    <h2>Attendance for <?php echo $employee['name']; ?></h2>
    <a href="../index.php">Back to Employee List</a>
    <a href="mark.php?employee_id=<?php echo $employee['id']; ?>">Mark Attendance</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Time In</th>
            <th>Time Out</th>
        </tr>
        <?php foreach ($attendances as $attendance): ?>
            <tr>
                <td><?php echo $attendance['id']; ?></td>
                <td><?php echo $attendance['attendance_date']; ?></td>
                <td><?php echo $attendance['time_in']; ?></td>
                <td><?php echo $attendance['time_out']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>