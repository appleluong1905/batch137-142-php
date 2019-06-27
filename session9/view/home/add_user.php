<form action="index.php?action=add_user" method="POST">
	<p>
		<input type="text" name="username">
	</p>
	<p>
	<select name="role_id">
	<?php while($row = $roles->fetch_assoc()) { ?>
		<option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
	<?php }?>
	</select>
	</p>
	<input type="submit" name="add" value="Add user">
</form>