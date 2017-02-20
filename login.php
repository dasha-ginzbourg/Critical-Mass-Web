<?php include( "header.php"); ?>
<?php include( "countip.php"); ?>
<?php
//always start session
session_start();

//lets look to see if form has been submitted with a field "username"
if(isset($_POST['username'])){
//you can change the username and password value here...

 if(($_POST['username'] == "cmadmin") && ($_POST['password'] == "DdX7Yw6p23")){
  //if username and passwords match then create session called "secured"
  $_SESSION['secured'] = "Secured";
 }else{
// if the values don't match... show error message

  echo "Oop! Looks like the username and password is not what I'm looking for, sorry you can't continue :( <p>
  <a href='?'>Lets try that again...</a>";
 }
}
//done creating session.
 
//if there IS NO sessions called "secured"
if(!isset($_SESSION['secured'])){
//then display a simple form
//feel free to customize your form nicely :)
echo "<form method='post'>
<p>Critical Mass Login Page</p>
Username: <input type='text' name='username' maxlength='10' placeholder='username' /><br><br>
Password: <input type='password' name='password' maxlength='10' placeholder='password'/><br>
<input type='submit' value='login' class='login'/>
</form>";
}else{
//else if the session is created... show me the HTML page :)
?>
 

 
<html>
<head>
<title>Session Login</title>
</head>
<body>
<p>You have been successfully logged in
</p>
<?php include( "change.php"); ?>
</body>
</html>
 
 
<?php
}
//this closes the else statement... DONE!!!
?>