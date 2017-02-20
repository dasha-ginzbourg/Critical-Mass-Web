<?php include( "time.php"); ?></p>
<script type="text/javascript">
        function delayer() {
            window.location = "vote.php"
        }
</script>

<body onload="setTimeout('delayer()', fofo)">
<div id="logo">

        <div class="cmlogo">
        </div>
    </div>
    <div class="text">
    </div>
<div id="poll"></div>
<!-- <section class="blue button">
<input id="thecount" type="button" class="blue button" name="vote" value="0" onclick="getVote(this.value)">
</section>
<section class="red button">
<input id="thecounttoo" type="button" name="vote" class="red button" value="1" onclick="getVote(this.value)">
</section> -->
<div class="text">

<p><?php include( "cats.php"); ?></p>

</div>
<div id="clear"></div>

<div class="clock"></div>
<div class="message"></div>


</body>
</html> 