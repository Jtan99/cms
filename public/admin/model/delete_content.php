<?php
require_once '../../connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare the update statement
    $sql = "DELETE FROM Item WHERE id = $id";

    // Execute the update statement
    if ($conn->query($sql)) {
        echo "deleted successfully.";
    } else {
        echo "Error deleting item: " . $conn->error;
    }
} else {
    echo "No item ID provided";
}
?>
