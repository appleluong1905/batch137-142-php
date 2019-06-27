<form action="index.php?action=edit_user&id=<?php echo $id?>" method="POST">
	<p>
		<input type="text" name="username" value="<?php echo $editUser['username']?>">
	</p>
	<p>
	<select name="role_id">
	<?php while($row = $roles->fetch_assoc()) { ?>
		<option value="<?php echo $row['id']?>" 
		<?php echo $row['id'] == $editUser['role_id']?'selected':''?>
		><?php echo $row['name']?></option>
	<?php }?>
	</select>
	</p>
	<input type="submit" name="edit" value="Edit user">
</form>