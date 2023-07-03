<?php
	include('conn.php');
 
	$name=$_POST['name'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$adress=$_POST['adress'];
	$phone=$_POST['phone'];
	$company=$_POST['company'];
 
	mysqli_query($conn,"insert into `user` (name,username, email, adress, phone, company) values ('$name','$username','$email','$adress','$phone','$company')");
	header('location:index.php');
 
?>