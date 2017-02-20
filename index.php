<p></p>
<?php include( "time.php"); ?>
<?php include( "files.php"); ?>


<script type="text/javascript">
    function delayer() {
        window.location = "index.php"
    }
</script>

<body onload="setTimeout('delayer()', fofo)">
    <div id="logo">

        <div class="cmlogo_one">
            <?php include( "poll_vote.php"); ?>
        </div>
    </div>
    <div class="text">
        <p></p>
    </div>
    <div id="poll"></div>
    <div class="text">

<p>
<?php include( "cats.php"); ?>
</p>

    </div>

    <div id="poll"></div>
    <div id="clear"></div>

    <div class="clock"></div>
    <div class="message"></div>
</body>

</html>