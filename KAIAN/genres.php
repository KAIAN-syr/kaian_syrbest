<?php
header("Content-type:text/html; charset=utf-8"); 
require('config.php');
$result = $mysqli->query("SELECT * FROM genres ORDER BY name ASC") or die(mysql_error());
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MB3flix</title>
    <meta name="description" content="">
    <meta name="author" content="">
<style type="text/css">
div.col-md-3:hover img{
    -moz-box-shadow: 0 0 20px 3px #38c;
    webkit-box-shadow: 0 0 20px 3px #38c;
    box-shadow: 0 0 20px 3px #38c;
}
div.col-md-3 p {
  text-align: center;
  text-indent: 0;
}
</style>   
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

  </head>

  <body>
 
 <?php
 include("navbar.php");

echo '<div class="container">';
echo '<div class="row">';
while($row=$result->fetch_assoc()){
	if(file_exists('images/genres/'.$row["id"].'/landscape.jpg')){
		echo '<div class="col-md-3"> <a href="search.php?genre='.$row["name"].'"><img src="images/genres/'.$row["id"].'/landscape.jpg" width="250px" height="141px" alt="'.$row["name"].'"></a><p>'.$row["name"].'</p></div>';
	}
	else{
		echo '<div class="col-md-3"> <a href="search.php?genre='.$row["name"].'"><img src="images/nolandscape.jpg" width="250px" height="141px" alt="'.$row["name"].'"></a><p>'.$row["name"].'</p></div>';
    }
}
  
echo '</div>';
echo '</div>';

?>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.tablesorter.min.js"></script>
  </body>
</html>











