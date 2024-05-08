<?php
  require_once "../../connect.php";
  
  if(isset($_POST["create"])) {
    $item_name = mysqli_real_escape_string($conn, $_POST["item_name"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $stock = mysqli_real_escape_string($conn, $_POST["stock"]);
    $last_modified = mysqli_real_escape_string($conn, $_POST["last_modified"]);

    $sql = "INSERT INTO Item(last_modified, item_name, description, stock) VALUES ('$last_modified', '$item_name', '$description', '$stock')";
    if($conn->query($sql)) {
      echo "New record created successfully";
    } else {
      die("Error: " . $sql . "<br>" . mysqli_error($conn));
    }
  }
?>