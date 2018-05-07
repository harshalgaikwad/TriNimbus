<?php

$username = "hgsqluser";
$password = "hgsqluser";
$hostname = "hgdbinstance.ccmonfdvzpe4.us-west-2.rds.amazonaws.com:3306";
$dbname = "hgbooks";

//connection to the db
$dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to co$
echo "Connected to $dbname using provided credentials";
$selected = mysql_select_db("$dbname",$dbhandle);

?>
