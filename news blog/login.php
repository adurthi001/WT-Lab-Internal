<?php
   include "includes/connect.php";
   session_start();
if(isset($_POST['submit'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];      
      $qry = 
      "SELECT email from users WHERE email='$email' and password='$password'";
      
      $r = mysqli_query($conn, $qry) or die ("Error".$qry);
      
      if(mysqli_num_rows($r)>0) {
        $_SESSION['email'] = $email;
        
		   
      	header('location:s.php');
      } else {
         echo "<p>INVALID CREDENTIALS</p>";
      }
     mysqli_close($conn);
 }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>SignIn</title>
    <link rel="stylesheet" href="main.css">
    </head>
    <body>
            <h1>Sign In</h1>
			<hr>
        <form class="form" method="post">
            <div class="satya">
            
            <input class="abc" type="email"  name="email" placeholder="Enter Email"><p></p>
            
            
            
            <input class="abc" type="password" name="password"  placeholder="Enter Password"><p></p>
            
         
            <input class="abc" class="button" type="submit" name="submit" value="SignIn">
            
        </form>
		</div>
    </body>
</html>
