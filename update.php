<?php
	include('conn.php');
	$id=$_GET['id'];
 
	$name=$_POST['name'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$adress=$_POST['adress'];
	$phone=$_POST['phone'];
	$company=$_POST['company'];
 
	mysqli_query($conn,"update `user` set name='$name', username='$username', email='$email', adress='$adress', phone='$phone', company='$company' where userid='$id'");
	header('location:index.php');
?>