<?php include( "header.php"); ?></p>

<?php

$link = mysql_connect("localhost", "root", "Wayne!1234");
mysql_select_db("mass_meter", $link);

$result = mysql_query("SELECT * FROM demo2", $link);
$num_rows = mysql_num_rows($result);

echo "$num_rows";


// Make a MySQL Connection

$query = "SELECT score_type, COUNT(round) FROM demo2 GROUP BY 1"; 
	 
$result = mysql_query($query) or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){
	echo "<br>There are ". $row['COUNT(round)'] ." ". $row['	1'] ." points.";
}
?>
