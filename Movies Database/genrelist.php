<?php
// create the db connection
$con = mysql_connect("62.217.125.30","it21208","changeit") or die( 'Could not connect to DB: ' . mysql_error() );
// Select the database
mysql_select_db("it21208", $con) or die(mysql_error());
// select character set and encoding
mysql_query("SET NAMES 'utf8';", $con);
mysql_query("SET CHARACTER SET 'utf8';", $con);

/* run the sql query to return
   a comma delimited list of names from the genre table */
$result = mysql_query("SELECT name FROM it21208.genre");
while($row = mysql_fetch_array($result)) {
	echo $row['name']."\t";
}
// close connection
mysql_close($con);
?>