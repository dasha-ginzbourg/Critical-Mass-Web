$(document).ready(function () {
    $("#addMe").click(function () {
        var counter = parseInt($("#hiddenVal").val());
        counter++;
        $("#hiddenVal").val(counter);
        $("#theCount").text(counter);
    });
    $("#addMetoo").click(function () {
        var counter = parseInt($("#hiddenValtoo").val());
        counter++;
        $("#hiddenValtoo").val(counter);
        $("#theCounttoo").text(counter);
    });
});
$(function () {
        var clock;
        var d = new Date(); //date
        var m = d.getMinutes(); //minutes
        var s = d.getSeconds(); //seconds
        var x = m % 6; //elapsed minutes
        var y = m * 60; // total number of seconds
        var mr = 6 - x; //remaining minutes
        var q = mr * 60; //minutes to seconds
        var sr = 60 - s; // remaining seconds
        var v = q + sr; // total remaining seconds
        var nx = v % 90; // 90 sec timer
        var n = nx + 1; // 90 sec timer
        var fx = v % 45; // 45 sec timer
        var f = fx + 1; // 45 sec timer
        var nmf = n - 4; //fade delay
        var time = 360 - v; //total elapsed seconds
        var to = f * 1000; //45 second counter + 2 x 1000
        var reset = 0
        var fofo = foo + 45;
        

    clock = $('.clock').FlipClock(foo, {
clockFace: 'MinuteCounter',
        countdown: true,
        callbacks: {
            stop: function () {
                $('.message').html('<p>time\'s up</p>');
                $('.message > p:nth-child(1)').hide().fadeIn(2000)
            }
        }
    });
    // setTimeout(function () {
    //     setInterval(function () {
    //         clock.increment();
    //     }, fofo);
    // });
});
