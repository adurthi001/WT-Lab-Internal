<?php

session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Read Or Add</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>

            <h1>Welcome <?php echo $_SESSION['email'];?>  </h1>
            <h4> What do you want add or read news</h4>
			<hr>
			<div class="satya">
        
			  <a class="chinna" href="read.php"> Read News </a><p></p><a class="chinna" href="add.php"> Add News </a>
			 
        </form>
    </div>
</body>
</html>
