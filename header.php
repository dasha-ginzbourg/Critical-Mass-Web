<?php
$myFile = "control.html";
$fh = fopen($myFile, 'a+') or die("can't open file");
$stringData = $_SERVER['REMOTE_ADDR']."<br>".date('Y-m-d H:i:s')."<br>";
fwrite($fh, $stringData);
fclose($fh);
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width; initial-scale=1.0, maximum-scale=1.0; user-scalable=0;">
<title>Critical Mass</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="css/flipclock.css">
</head>
<body>


