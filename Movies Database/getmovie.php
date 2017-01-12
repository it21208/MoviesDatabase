<?php
// declare content type to return
header("Content-type: text/xml");
// create the db connection
$con = mysql_connect("62.217.125.30","it21208","changeit") or die( 'Could not connect to DB: ' . mysql_error() );
// Select the database
mysql_select_db("it21208", $con) or die(mysql_error());
// select character set and encoding
mysql_query("SET NAMES 'utf8';", $con);
mysql_query("SET CHARACTER SET 'utf8';", $con);

// get the title (t) parameter from URL
$title = $_REQUEST["t"];
// prepare the sql query
$sql = "SELECT id, title, genre FROM it21208.movie WHERE title = '" . $title . "'";
// run query
$result = mysql_query($sql);
// there should be only 1 row, since the client used hints to search the table before!!
$row = mysql_fetch_array($result);
// send XML header
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
// create XML elements
echo "<movielist><movie><id>" . $row['id'] . "</id><title>" . $row['title'] . "</title><genre>" . $row['genre'] . "</genre></movie></movielist>";
// close connection
mysql_close($con);
?>