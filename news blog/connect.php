<?php
  $servername="localhost";
  $username="root";
  $password="vishnu123";
  $db="users";
  $conn = mysqli_connect($servername,$username,$password)  or die("connection failed :".mysql_connect());
  mysqli_select_db($conn,$db);
?>
