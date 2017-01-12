<?php
// create the db connection
$con = mysql_connect("62.217.125.30","it21208","changeit") or die( "Could not connect to DB: " . mysql_error() );
// Select the database
mysql_select_db("it21208", $con) or die(mysql_error());
// select character set and encoding
mysql_query("SET NAMES 'utf8';", $con);
mysql_query("SET CHARACTER SET 'utf8';", $con);

// run the sql query
$result = mysql_query("SELECT * FROM it21208.movie");

// create table header
echo "<table>
<tr>
<th>ID</th>
<th>TITLE</th>
<th>GENRE</th>
</tr>";
// create table rows
while($row = mysql_fetch_array($result)) {
  echo "<tr>";
  echo "<td name=\"tdID\">" . $row['id'] . "</td>";
  echo "<td>" . $row['title'] . "</td>";
  echo "<td>" . $row['genre'] . "</td>";
  echo "</tr>";
}
echo "</table>";
// close connection
mysql_close($con);
?>