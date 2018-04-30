<?php
$username = "MyfirstRDS";
$password = "MyfirstRDS";
$hostname = "myfirstrds.cx1bed6bm5y3.ap-south-1.rds.amazonaws.com:3306";
$dbname = "myfirstrds";

//connection to the db
$dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to db");
echo "Connected to $dbname using provided credentials";
$selected = mysql_select_db("$dbname",$dbhandle);
?>