<?php
require 'connDB.php';

$conn = cannDB::connect();

if (isset($_POST['id'])) {
$id = intval($_POST['id']);

        // Fetch current status
    $stmt = $conn->prepare("SELECT status FROM info WHERE id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        $currentStatus = $row['status'];
        $newStatus = !$currentStatus; // Toggle status

        // Update status
        $sql = "UPDATE info SET status = :status WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':status', $newStatus, PDO::PARAM_BOOL);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            echo "Successfully Updated";
        } else {
            echo "Update Failed";
        }
    } else {
        echo "Record not found.";
    }
    } else {
        echo "Please provide ID.";
    }
header("Location: index.php");
exit();
