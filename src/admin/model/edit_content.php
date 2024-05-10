<?php
require_once '../../connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Validate and sanitize form inputs
    $item_name = mysqli_real_escape_string($conn, $_POST["item_name"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $stock = mysqli_real_escape_string($conn, $_POST["stock"]);
    $last_modified = mysqli_real_escape_string($conn, $_POST["last_modified"]);

    // Prepare the update statement
    $sql = "UPDATE Item SET item_name = ?, description = ?, stock = ?, last_modified = ? WHERE id = ?";
    $statement = $conn->prepare($sql);
    $statement->bind_param("ssssi", $item_name, $description, $stock, $last_modified, $id);

    // Execute the update statement
    if ($statement->execute()) {
        echo "Item updated successfully.";
    } else {
        echo "Error updating Item: " . $conn->error;
    }
} else {
    // Handle case where no Item ID is provided
    echo "No Item ID provided";
}
?>
