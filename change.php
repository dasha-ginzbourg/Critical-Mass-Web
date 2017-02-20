<?php include( "header.php"); ?>
<?php include( "countip.php"); ?>
<p>Critical Mass Round Title Control</p>

<?php
  function one() {
    file_put_contents("cats.php","Round # 1</p><p>Battle of Bloody Gulch");
  }

  if (isset($_GET['one'])) {
    one();
  }
?>


<a class="buttonx button" href='change.php?one=true'>round 1</a>

<?php
  function two() {
    file_put_contents("cats.php","Round # 2</p><p>Battle for Narva Bridgehead");
  }

  if (isset($_GET['two'])) {
    two();
  }
?>
<a class="buttonx button" href='change.php?two=true'>round 2</a>

<?php
  function three() {
    file_put_contents("cats.php","Round # 3</p><p>Operation Valkyrie");
  }

  if (isset($_GET['three'])) {
    three();
  }
?>
<a class="buttonx button" href='change.php?three=true'>round 3</a>



<?php
  function four() {
    file_put_contents("cats.php","Round # 4</p><p>Operation Dracula");
  }

  if (isset($_GET['four'])) {
    four();
  }
?>
<a class="buttonx button" href='change.php?four=true'>round 4</a>



<input type='submit' value='logout'  onclick="window.location.href='logout.php'" class="login">
</body>
</html>