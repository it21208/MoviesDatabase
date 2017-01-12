<?php
// create the db connection
$con = mysql_connect("62.217.125.30","it21208","changeit") or die( 'Could not connect to DB: ' . mysql_error() );
// Select the database
mysql_select_db("it21208", $con) or die(mysql_error());
// select character set and encoding
mysql_query("SET NAMES 'utf8';", $con);
mysql_query("SET CHARACTER SET 'utf8';", $con);

// get the title hint (t) parameter from URL
$titlehint = $_REQUEST["t"];

// prepare the sql query
$sql = "SELECT title FROM it21208.movie WHERE title LIKE '" . $titlehint . "%'";
// execute the sql query
$result = mysql_query($sql);
// send a comma-space (", ") delimited list of movie titles
$i = 0;
while($row = mysql_fetch_array($result)) {
	if ($i != 0)
	  echo ", ";
	echo $row['title'];
	$i = $i + 1;
}
// close connection
mysql_close($con);
?>