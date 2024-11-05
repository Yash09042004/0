<?php
include '12]db.php';

// Create
if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sql = "INSERT INTO students (name, email) VALUES ('$name', '$email')";
    $conn->query($sql);
}

// Update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sql = "UPDATE students SET name='$name', email='$email' WHERE id=$id";
    $conn->query($sql);
}

// Delete
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM students WHERE id=$id";
    $conn->query($sql);
}

// Fetch all students
$students = $conn->query("SELECT * FROM students");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student CRUD Operations</title>
</head>
<body>
    <h2>Student Records</h2>

    <!-- Create Form -->
    <form method="post" action="">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit" name="create">Add Student</button>
    </form>

    <h3>All Students</h3>
    <table border="20">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = $students->fetch_assoc()) { ?>
        <tr>
            <form method="post" action="">
                <td><?php echo $row['id']; ?></td>
                <td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
                <td><input type="email" name="email" value="<?php echo $row['email']; ?>"></td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <button type="submit" name="update">Update</button>
                    <button type="submit" name="delete">Delete</button>
                </td>
            </form>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
