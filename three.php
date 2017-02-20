<p style="visibility:hidden;"><?php include( "time.php"); ?></p>
<?php include( "files.php"); ?>
<script type="text/javascript">
<script type="text/javascript">
        function delayer() {
            window.location = "three.php"
        }
</script>

<body onload="setTimeout('delayer()', fofo)">
<div id="logo">

        <div class="cmlogo_three">
        </div>
    </div>
    <div class="text">
        <p>Choose the fate of the next round...</p>
    </div>
<div id="poll"></div>
<a href="change.php" class="gear"><img src="gear.png" alt="control panel" width="20" height="20"/></a>
<section class="blue button">
<input id="thecount" type="button" class="blue button" name="vote" value="0" onclick="getVote(this.value)">
</section>
<section class="red button">
<input id="thecounttoo" type="button" name="vote" class="red button" value="1" onclick="getVote(this.value)">
</section>
<div class="text">

<p><?php include( "cats.php"); ?></p>

</div>
<div id="clear"></div>
    <script>
    var foo =<?php echo $difference; ?>;
    </script> 
<div class="clock"></div>
<div class="message"></div>


</body>
</html> 