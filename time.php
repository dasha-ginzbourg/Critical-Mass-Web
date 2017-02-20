<?php
 $minutes = date(i); //minutes
 $seconds = date(s); //seconds
 $elapsed = $minutes/6; //minutes % 6
 $xr = $elapsed - floor($elapsed); //remainder 
 $why = $minutes * 60;
 $y = $xr * 6; // total number of seconds
 $mr = 6 - $y; //remaining minutes
 $q = $mr * 60; //minutes to seconds
 $sr = 60 - $seconds; // remaining minutes
 $v = $q + $sr; // total remaining seconds
 $nx = $v / 90; // 90 sec timer
 $nxx = $nx - floor($nx); //remainder 
 $nnxx = $nxx * 90; //remainder 
 $n = $nnxx + 1; // 90 sec timer
 $fx = $v / 45; // 45 sec timer
 $fxx = $fx - floor($fx);
 $ffxx = $fxx * 45; 
 $difference = $ffxx + 1; // 45 sec timer
?> 
<script>
    var foo =<?php echo $difference; ?>;
    var fff = foo * 1000;
    var fofo = fff + 500;
</script> 