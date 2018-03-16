<?php
include "includes/connect.php";
session_start();
if(isset($_POST['submit'])){
    $newsname=$_POST['newsname'];
    $filetmp=$_FILES["image"]["tmp_name"];
    $filename=$_FILES["image"]["image"];
    $news=$_POST["news"];
    move_uploaded_file($filetmp,"images/".$filename);
    $qry="INSERT INTO `addnews` (`newsname`,`photo`,`news`) VALUES ('$newsname','$filename','$news');";
    mysqli_query($conn,$qry) or die("connection failed:". mysqli_error($conn));  	
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Add News</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>

            <h1>Welcome <?php echo $_SESSION['email'];?> Add news </h1>
			<hr>
			<div class="satya">
        <form class="form" method='post' action="" enctype="multipart/form-data">
        	  <input type="text" class="abc" placeholder="Enter news name" name="news"><p></p>  
                <input type="text" class="abc" placeholder="Enter news" name="newsname" height="120px"><p></p>       
                <input type="file"  name="image" ><p></p>        
                <input type="submit" class="abc" name="submit" value="Add News" ><p></p>
			  <a class="chinna" href="read.php"> Display News </a><p></p><a class="chinna" href="logout.php"> Logout </a>
			 
        </form>
    </div>
</body>
</html>
