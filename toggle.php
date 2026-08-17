<?php
$conn = new mysqli("localhost", "root", "", "web_database");

if ($conn->connect_error) {
    die("Connection failed");
}

if (isset($_POST['id'])) {
    $id = intval($_POST['id']);

    $result = $conn->query("SELECT status FROM users WHERE id = $id");

    if ($result && $row = $result->fetch_assoc()) {
        $newStatus = $row['status'] == 0 ? 1 : 0;

        $conn->query("UPDATE users SET status = $newStatus WHERE id = $id");

        echo $newStatus;
    }
}
?>
