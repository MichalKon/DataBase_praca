<!DOCTYPE html>
<html>
<head>
<title>Basic SQL</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div>
		<form method="POST" action="add.php">
			<label>Name:</label><input type="text" name="name">
			<label>Username:</label><input type="text" name="username">
			<label>Email:</label><input type="text" name="email">
			<label>Adress:</label><input type="text" name="adress">
			<label>Phone:</label><input type="text" name="phone">
			<label>Company:</label><input type="text" name="company">
			<br>
			<input type="submit" name="add">
		</form>
	</div>
	<br>
	<div>
		<table border="1">
			<thead>
				<th>Name</th>
				<th>Username</th>
				<th>Email</th>
				<th>Adress</th>
				<th>Phone</th>
				<th>Company</th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `user`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['username']; ?></td>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $row['adress']; ?></td>
							<td><?php echo $row['phone']; ?></td>
							<td><?php echo $row['company']; ?></td>
							<td>
								<a href="edit.php?id=<?php echo $row['userid']; ?>">Edit</a>
								<a href="delete.php?id=<?php echo $row['userid']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>