<?php
$conn = new mysqli("YOUR_HOST", "YOUR_USERNAME", "YOUR_PASSWORD", "YOUR_DATABASE");

if ($conn->connect_error) {
    die("Connection failed");
}

if (isset($_POST['id'])) {
    $id = intval($_POST['id']);

    $result = $conn->query("SELECT status FROM user WHERE id = $id");

    if ($result && $row = $result->fetch_assoc()) {
        $newStatus = $row['status'] == 0 ? 1 : 0;

        $conn->query("UPDATE user SET status = $newStatus WHERE id = $id");

        echo $newStatus;
    }
}
?>
