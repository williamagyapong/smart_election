<?php
require("config.php");
//$db = mysql_connect($dbhost, $dbuser, $dbpassword);
//mysql_select_db($dbname, $db);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title></title>
<style type="text/css">
#header{
	width: 100%; height: 116px;
	color: black;  padding-top: 15px;
	font-size: 40px; text-align: center;
	background-image: url(images2/10.jpg);
}
</style>
</head>
<body>
<div id="header"> <?php 
echo $config_appName.'<br>'; 
echo "<font face='arial' size='+1' color='red'>"."<i>"."Experience smartness in voting"."</i>"."</font>";
?>
</div>
