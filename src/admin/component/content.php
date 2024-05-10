<div class="post w-100 bg-light p-5">
  <?php
  $id = $_GET['id'];
  if (isset($id)) {
    include "../connect.php";
    $sql = "SELECT * FROM Item WHERE id = $id";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
  ?>
    <h1><?php echo $row['item_name']; ?></h1>
    <p><?php echo $row['last_modified']; ?></p>
    <p><?php echo $row['stock']; ?></p>
    
  <?php
    }
  } else {
    echo "No items found";
  }
  ?>
</div>