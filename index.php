<?php
include "includes/includes.php";
?>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,100&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
<style>

    .BallText{
        /*font-family: 'Poppins', sans-serif;*/
        font-family: 'Press Start 2P', cursive;
        font-size: 12px;
        color: white;
        margin-top: -100px;
        display:none;
        z-index: 99999999999;
        top: 56% !important;
        max-width: 125px;\
        word-break: break-word;
    }

    .centered {
        position: fixed;
        top: 50%;
        left: 50%;
        /* bring your own prefixes */
        transform: translate(-50%, -50%);
        text-align: center;
    }

    body{
        background: #fff
    }

    .clicked{
        width: 1200;
        height: 1200;
    }

    .8ball{
        transition:width 2s;
        transition:height 2s; 
        position: fixed;
    }

    .smok{
        width: 10000;
        height: 2000;
        position: fixed;
        opacity: 0.6;
        display:none
    }


    .unclickable{
        pointer-events: none;
    }
</style>

<script>
//    const stuff = ["sight", "may", "grain", "completely", "rule", "space", "ability", "six", "break", "word",
//        "pleasure", "no", "magic", "nothing", "clothes", "safe", "lake", "mixture", "even", "same", "tiny",
//        "between", "halfway", "metal", "system", "example", "planned", "this", "improve", "wrote", "poor",
//        "party", "age", "organized", "damage", "map", "notice", "triangle", "main", "forward", "here", "balloon",
//        "truck", "harder", "upward", "flame", "information", "useful", "difficult", "show", "frequently",
//        "completely", "gray", "stopped", "smallest", "heavy", "known", "street", "swam", "lower", "scientific",
//        "glass", "excited", "bend", "customs", "characteristic", "discovery", "slight", "fog", "worse", "wire",
//        "person", "trip", "belong", "six", "myself", "replied", "milk", "porch", "ancient", "source", "fed", "lady"
//                , "lack", "power", "burst", "cannot", "wise", "valuable", "income", "caught", "alive", "somehow", "grow",
//        "fog", "complex", "spell", "step", "away", "completely"];

const stuff = ['Arkadiy is a bitch'];
//    console.log(stuff);

    var isRunning = false;
    function onclick8Ball() {
        console.log(isRunning);
        if (isRunning) {
            return;
        }

        const winners = [20];
        var clickNum = getRandomInt(20) + 1;


        $('.8ball').addClass('clicked');

        console.log("clickNum:" + clickNum);
        if (winners.indexOf(clickNum) == '-1') {
            setTimeout(function () {
                $('.8ball').removeClass('clicked');
            }, 200);
            return;
        }

        isRunning = true;

        var index = getRandomInt(stuff.length);
        console.log("INDEX:" + index);
        const text = stuff[index];
        setTimeout(function () {
            $('.8ball').removeClass('clicked');
        }, 200);
        $('.smok').fadeIn(3000);

        $('#BallText').html(text);
//        $('.smok').fadeOut(3000);
//        setTimeout(function(){
        $('#resultBall').fadeIn(15000);
        setTimeout(function () {
            $('.BallText').fadeIn(4000);
            setTimeout(function () {
                isRunning = false;
            }, 4000);
        }, 15000);

//        },3000);
    }

    function resetAndTrigger() {
        console.log(isRunning);
        if (isRunning == true) {
            return;
        }
        console.log("RESETTING");
        $('#resultBall').fadeOut(2000);
        $('.BallText').fadeOut(2000);
        $('.smok').fadeOut(2000);
    }

    function getRandomInt(max) {
        return Math.floor(Math.random() * Math.floor(max));
    }





</script>
<body>
    <div class="container-fluid centered " style='z-index: 10000'>
        <img id='resultBall' class=' 8ball' style='display: none;z-index: 100000;position: inherit;' src="8ball.png" onclick='resetAndTrigger()'>
        <img id='shakeBall' class=' 8ball' src="8ball_blank.png" onclick='onclick8Ball()'>
        <span id='BallText' class="BallText centered "></span>
    </div>
    <img class='unclickable clicked smok centered' src="smoke.gif">
</body>