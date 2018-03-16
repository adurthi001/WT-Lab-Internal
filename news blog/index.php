<?php
include "includes/connect.php";
session_start();
if(isset($_POST["signupsubmit"])){
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $qry="INSERT INTO users(username,email,password) VALUES ('$username','$email','$password')";
    mysqli_query($conn,$qry) or die("connection failed: ".mysqli_error($conn));
    header("location:login.php");
}
if(isset($_POST["loginsubmit"])){
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <link rel="stylesheet" href="main.css">
	<script type="text/javascript">
	function validateForm() {
	
    var x = document.forms["news"]["username"].value;
	var y = document.forms["news"]["email"].value; 
	var z = document.forms["news"]["password"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
	if (y == "") {
        alert("Email must be filled out");
        return false;
    }
	if (z == "") {
        alert("Password must be filled out");
        return false;
    }
}
	     
	</script>
</head>

<body>
	<h1> Register to Read and Add News </h1>
   <form method="post" action="" name="news" onsubmit="return validateForm()">
   <div class="satya">
      <input class="abc" name="username" type="text" placeholder="     username"/><br><p></p>
      <input class="abc" name="email" type="email" placeholder="    Your Email"/><br><p></p>
      <input class="abc" name="password" type="password" placeholder="     PASSWORD"/><br><p></p>
      <input class="abc" type="submit" name="signupsubmit" value="SignUp"/>
      <br/>
	  </div>
  </form>
        <form>
		<div class="satya">
            <h2>Already have an account?</h2>
            <a class="chinna" href="login.php">LogIn</a>
        </div>
        </form>
        
    
</body>

</html>
