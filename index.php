<?php
$conn = new mysqli("localhost", "root", "", "web_database");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];

    $stmt = $conn->prepare("INSERT INTO user (name, age, status) VALUES (?, ?, 0)");
    $stmt->bind_param("si", $name, $age);
    $stmt->execute();
}

$result = $conn->query("SELECT * FROM user");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Database</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>User Database</h1>

    <form method="POST">
        <label>Name:</label>
        <input type="text" name="name" required>

        <label>Age:</label>
        <input type="number" name="age" required>

        <button type="submit" name="submit">Submit</button>
    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo htmlspecialchars($row['name']); ?></td>
            <td><?php echo $row['age']; ?></td>
            <td id="status-<?php echo $row['id']; ?>">
                <?php echo $row['status']; ?>
            </td>
            <td>
                <button type="button" onclick="toggleStatus(<?php echo $row['id']; ?>)">
                    Toggle
                </button>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>

<script src="script.js"></script>
</body>
</html>
