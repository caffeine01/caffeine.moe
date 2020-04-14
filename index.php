<?php
  $bg = array('bg.jpg', 'bg2.jpg', 'bg3.jpg', 'bg4.jpg');

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>
<!DOCTYPE HTML>
<html>
<head>
<style type="text/css">
<!--
body{
background: url(/<?php echo $selectedBg; ?>) no-repeat;
}
-->
</style>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Juicy.exe</title>
<link rel="icon" href="favicon.png">
</head>
<body>
<iframe width="0%" height="0" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/677357316&color=%23ff5500&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
<h1>Welcome</h1>
<div id="bruh">
 <a href="https://www.youtube.com/channel/UCK9MOt51GLgCwLm0fcHJ_EA">Youtube</a><br>
</div>
<div id="bruh2">
 <a href="https://www.instagram.com/thisisashitusername/" >Instagram</a><br>
</div>
<div id="bruh3">
 <a href="https://soundcloud.com/linuxvapour">Soundcloud</a><br>
</div>
<style>
body {
  font-family: 'Roboto';font-size: 22px;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
    h1{
text-align: center;
position: absolute;
top: 30%;
left: 50%;
margin-right: -50%;
transform: translate(-50%, -50%);
background: url(textimg.png) no-repeat;
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
    }
    #bruh{
text-align: center;
position: absolute;
top: 40%;
left: 50%;
margin-right: -50%;
transform: translate(-50%, -50%);
color: black;
    }
    #bruh2{
        text-align: center;
position: absolute;
top: 45%;
left: 50%;
margin-right: -50%;
transform: translate(-50%, -50%);
color: black
    }
    #bruh3{
        text-align: center;
position: absolute;
top: 50%;
left: 50%;
margin-right: -50%;
transform: translate(-50%, -50%);
color: black;
    }
    a{
        color: black
    }
</style>
</body>
</html>
