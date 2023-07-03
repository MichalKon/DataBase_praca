<?php
$conn = mysqli_connect("localhost","root","","basic_sql");
 
if (mysqli_connect_errno())
  {
  echo "Brak połączenia z bazą danych :( " . mysqli_connect_error();
  }
?>