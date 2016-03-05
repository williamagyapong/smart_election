<!DOCTYPE html>
<html>
 <head>
<link rel="stylesheet" type="text/css" href="css/styles.css">
 </head>
 <body>
 	<div class="box">
<?php
 require("config.php");

  if (isset($_POST['submit'])) {
      if (empty($_POST['office'])) {
      	   echo "The office field can't be empty!";
      } else{
      	$office = ucwords($_POST['office']);
  	$query ="INSERT INTO Offices( office)
  	        VALUES('$office') ";
  	     if (mysql_query($query)) {
  	     	echo "The action was successful";
  	     } else {
  	     	echo "A problem might have occurred. Please try again";
  	     }
  	    }
  }
?>

  <h2>Create Offices For Election</h2>
  <form action="" method="POST">
    <table>
      <tr><td>Office</td><td><input type="text" name="office"></td></tr>
      <tr><td></td><td><input type="submit" name="submit" value="CREATE"></td></tr>
    </table>
  </form>
</div>
 </body>
</html>