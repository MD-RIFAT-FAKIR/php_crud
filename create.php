<?php include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn->query("INSERT INTO users (name, email) VALUES ('$name', '$email')");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head><title>Add User</title></head>
<body>
    <h2>Add New User</h2>
    <form method="POST">
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        <button type="submit">Save</button>
    </form>
    <br><a href="index.php">← Back</a>
</body>
</html>
