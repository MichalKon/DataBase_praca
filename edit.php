<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `user` where userid='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
		<label>Name:</label><input type="text" value="<?php echo $row['name']; ?>" name="name">
		<label>Username:</label><input type="text" value="<?php echo $row['username']; ?>" name="username">
		<label>Email:</label><input type="text" value="<?php echo $row['email']; ?>" name="email">
		<label>Adress:</label><input type="text" value="<?php echo $row['adress']; ?>" name="adress">
		<label>Phone:</label><input type="text" value="<?php echo $row['phone']; ?>" name="phone">
		<label>Company:</label><input type="text" value="<?php echo $row['company']; ?>" name="company">
		<br>
		<input type="submit" name="submit">
		<a href="index.php">Back</a>
	</form>
	
		
</body>
</html>