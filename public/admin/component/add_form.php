<div class="creat-form w-100 mx-auto p-4" style="max-width: 700px;">
  <form action="/admin/model/new_content.php" method="post">
    <div class="form-field mb-4">
      <input type="text" class="form-control" name="item_name" id="" placeholder="Enter Name:">
    </div>
    <div class="form-field mb-4">
      <textarea name="description" class="form-control" id="" cols="30" rows="10" placeholder="Enter description:"></textarea>
    </div>
    <div class="form-field mb-4">
      <label>Number of Item In Stock:</label>
      <input type="number" class="form-control" name="stock" id="" placeholder="0">
    </div>
    <input type="hidden" name="last_modified" value="<?php echo date("Y/m/d"); ?>">
    <div class="form-field">
      <input type="submit" class="btn btn-primary" value="Submit" name="create">
    </div>
  </form>
</div>