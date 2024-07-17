<?php
require 'connDB.php';

$conn = cannDB::connect();
if (isset($_POST['delete_id'])) {
    $delete_id = intval($_POST['delete_id']);
    $sql = "DELETE FROM info WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $delete_id, PDO::PARAM_INT);
    if ($stmt->execute()) {
        echo "Successfully Deleted";
    } else {
        echo "Deletion Failed";
    }
} else {
    echo "Please provide an ID to delete.";
}

header("Location: index.php");
exit();

