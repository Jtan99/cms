<?php
  include "../connect.php";
  $id = $_GET['id'];
  $sql = "SELECT * FROM Item WHERE id = $id";
  $result = $conn->query($sql);
  $item = $result->fetch_assoc();
  if(!$item) {
    echo "No post found";
  }
?>

<div class="edit-form w-100 mx-auto p-4" style="max-width: 700px;">
  <form action="/admin/model/edit_content.php?id=<?php echo $id; ?>" method="post">
    <div class="form-field mb-4">
      <input type="text" class="form-control" name="item_name" id="" placeholder="Enter Item Name:" value="<?php echo $item['item_name']; ?>">
    </div>
    <div class="form-field mb-4">
      <textarea name="description" class="form-control" id="" cols="30" rows="10" placeholder="Enter description:"><?php echo $item['description']; ?></textarea>
    </div>
    <div class="form-field mb-4">
      <label>Number of Item In Stock:</label>
      <input type="number" class="form-control" name="stock" id="" value="<?php echo $item["stock"]?>">
    </div>
    <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
    <input type="hidden" name="last_modified" value="<?php echo $item['last_modified']; ?>">
    <div class="form-field">
      <input type="submit" class="btn btn-primary" value="Update" name="update">
    </div>
  </form>
</div>
