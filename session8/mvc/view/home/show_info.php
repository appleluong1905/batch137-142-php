<link rel="stylesheet" type="text/css" href="webroot/css/style.css">
Home page here
<br>
<table class="table table-bordered">
  <tr>
    <th style="width: 10px">#</th>
    <th>Username</th>
    <th>Gender</th>
    <th>City</th>
    <th>Avatar</th>
    <th>Action</th>
  </tr>
 <?php 
 if ($home->num_rows > 0) {
 	while($row = $home->fetch_assoc()) {
 		$id = $row['id'];
 ?>
    <tr>
      <td><?php echo $row['id']?></td>
      <td><?php echo $row['username']?></td>
      <td>
        <?php echo $gender[$row['gender']]?>
      </td>
      <td>
        <?php echo $city[$row['city']]?>
      </td>
      <td><img src="uploads/avatar/default.png" alt="avatar" class="avatar_user"></td>
      <td><a href="#">Edit</a> | <a href="index.php?action=delete_user&id=<?php echo $id?>">Delete</a></td>
    </tr>
  <?php 
  	}
  } else {?>
  <tr>
  	<td colspan="5">Khong co user nao</td>
  </tr>
  <?php }?>
</table>