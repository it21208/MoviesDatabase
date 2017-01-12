<?php
// create the db connection
$con = mysql_connect("62.217.125.30","it21208","changeit") or die( 'Could not connect to DB: ' . mysql_error() );
// Select the database
mysql_select_db("it21208", $con) or die(mysql_error());
// select character set and encoding
mysql_query("SET NAMES 'utf8';", $con);
mysql_query("SET CHARACTER SET 'utf8';", $con);

// get the title (t) parameter from URL
$title = $_REQUEST["t"];
// get the genre (g) parameter from URL
$genre = $_REQUEST["g"];

// run the sql insert query
$sql = "INSERT INTO it21208.movie (title, genre) VALUES ('" . $title . "', '" . $genre . "');";
// return 1 for success or some error by die()
if (!mysql_query($sql)) {
	die('Error: ' . mysql_error($con));
} else {
	echo "1";
}
// close connection
mysql_close($con);
?>