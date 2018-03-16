<?php
include "includes/connect.php";
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>NewsFeed</title>

        <link rel="stylesheet" href="main.css">
		
    </head>
    <body>
    <div class="container">
           <?php
             $qry = "SELECT * from addnews WHERE 1";
            $r = mysqli_query($conn, $qry) or die ("Error".$qry);
              if(mysqli_num_rows($r)>0) {
               echo"$news";
               echo"$namephoto";
               echo"$news";

      } 
      else 
      {
         echo "<p>No News</p>";
      }
  ?>
       </div>
    </body>
</html>
