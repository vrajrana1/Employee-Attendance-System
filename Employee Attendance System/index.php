<!DOCTYPE html>
<html>
<head>
    <title>Employee Attendance System</title>
</head>
<body>
    <h1>Employee Attendance System</h1>
    <h2>Employees</h2>
    <a href="views/Employee/add.php">Add Employee</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Attendance</th>
            <th>Action</th>
        </tr>
        <?php 

    foreach ($employees as $employee): ?>
            <tr>
                <td><?php echo $employee['id']; ?></td>
                <td><?php echo $employee['name']; ?></td>
                <td><?php echo $employee['email']; ?></td>
                <td><?php echo $employee['phone']; ?></td>
                <td><?php echo $employee['address']; ?></td>
                <td>
                    <a href="views/attendance/mark.php?employee_id=<?php echo $employee['id']; ?>">Mark Attendance</a>
                </td>
                <td>
                    <a href="views/Employee/update.php?id=<?php echo $employee['id']; ?>">Edit</a>
                    <a href="views/Employee/delete.php?id=<?php echo $employee['id']; ?>" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</a>
                </td>
            </tr>
        <?php endforeach;

        ?>
    </table>
</body>
</html>
