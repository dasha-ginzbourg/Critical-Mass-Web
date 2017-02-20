
<?php
$username = "root";
$password = "kill1234";
$hostname = "localhost";

$dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

$selected = mysql_select_db("mass_meter", $dbhandle) or die("Could not select examples");
$result = mysql_query("SELECT id, ip,bluepts,redpts, vote_date FROM roundone");
while ($row = mysql_fetch_array($result)) {
    echo "ID:" . $row['id'] . "<br />" . " IP:" . $row['ip'] . "<br />" . "blue: " . $row['bluepts'] . "<br />" . "red: " . $row['redpts'] . "<br />" . "Date: " . $row['vote_date'] . "<br />";
}

$result = mysql_query("SELECT id, ip,bluepts,redpts, vote_date FROM roundtwo");
while ($row = mysql_fetch_array($result)) {
    echo "ID:" . $row['id'] . "<br />" . " IP:" . $row['ip'] . "<br />" . "blue: " . $row['bluepts'] . "<br />" . "red: " . $row['redpts'] . "<br />" . "Date: " . $row['vote_date'] . "<br />";
}

$result = mysql_query("SELECT id, ip,bluepts,redpts, vote_date FROM roundthree");
while ($row = mysql_fetch_array($result)) {
    echo "ID:" . $row['id'] . "<br />" . " IP:" . $row['ip'] . "<br />" . "blue: " . $row['bluepts'] . "<br />" . "red: " . $row['redpts'] . "<br />" . "Date: " . $row['vote_date'] . "<br />";
}

$result = mysql_query("SELECT id, ip,bluepts,redpts, vote_date FROM roundfour");
while ($row = mysql_fetch_array($result)) {
    echo "ID:" . $row['id'] . "<br />" . " IP:" . $row['ip'] . "<br />" . "blue: " . $row['bluepts'] . "<br />" . "red: " . $row['redpts'] . "<br />" . "Date: " . $row['vote_date'] . "<br />";
}

mysql_close($dbhandle);
?> 