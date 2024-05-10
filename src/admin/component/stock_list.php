<div class="contents-list w-100 p-5">
  <table class="table tabled-bordered">
    <thead>
      <tr>
        <th style="width:15%">ID</th>
        <th style="width:15%">last_modified</th>
        <th style="width:45%">Name</th>
        <th style="width:25%">Action</th>
      </tr>
    </thead>
    <?php
      require_once (dirname(__DIR__)."../../connect.php");
      $sql = "SELECT * FROM Item";
      $result = $conn->query($sql);
      $items = [];
      while ($row = $result->fetch_assoc()) {
          $items[] = $row;
      }
    ?>
    <tbody>
      <?php foreach ($items as $item): ?>
        <tr>
          <td><?php echo $item["id"]; ?></td>
          <td><?php echo $item["last_modified"]; ?></td>
          <td><?php echo $item["item_name"]; ?></td>
          <td>
            <a class="btn btn-info" href="view.php?id=<?php echo $item["id"]; ?>">View</a>
            <a class="btn btn-warning" href="edit.php?id=<?php echo $item["id"]; ?>">Edit</a>
            <a class="btn btn-danger" href="./model/delete_content.php?id=<?php echo $item["id"]; ?>">Delete</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>