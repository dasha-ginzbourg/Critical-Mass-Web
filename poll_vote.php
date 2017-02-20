<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "red.php";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$yes = $array[0];
$no = $array[1];

if ($vote == 0) {
  $yes = $yes + 1;
}
if ($vote == 1) {
  $no = $no + 1;
}

//insert votes to txt file
$insertvote = $yes."||".$no;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);

fclose($fp);
?>

<img src="poll_b.png" repeat
width='<?php echo(320*round($yes/($no+$yes),2)); ?>'
height='130'>
<img src="poll_r.gif" repeat
width='<?php echo(320*round($no/($no+$yes),2)); ?>'
height='130'><br>

