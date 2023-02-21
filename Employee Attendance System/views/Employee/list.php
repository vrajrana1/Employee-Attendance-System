<!DOCTYPE html>
<html>
<head>
    <title>List Employees</title>
</head>
<body>
    <h1>List Employees</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employees as $employee): ?>
                <tr>
                    <td><?php echo $employee['id']; ?></td>
                    <td><?php echo $employee['name']; ?></td>
                    <td><?php echo $employee['email']; ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $employee['id']; ?>">Update</a>
                        <a href="delete.php?id=<?php echo $employee['id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="add.php">Add Employee</a>
</body>
</html>
