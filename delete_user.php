<?php
include 'config.php';
$id = $_GET['id'] ?? 0;
if ($id > 0) {
    $stmt = $conn->prepare("DELETE FROM elearning WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}
header("Location: dashboard.php");
?>
