<?php
session_start();

if(isset($_SESSION['secured']))

unset($_SESSION['secured']);

?>

<script>
window.location = "login.php";
</script>