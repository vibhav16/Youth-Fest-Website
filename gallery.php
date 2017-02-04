<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Impressions 2k17</title>
  <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="page-in">
<div class="page">
<div class="main">
<div class="header">
<div class="header-top">
<h1>IMPRESSIONS <span>2K17</span></h1>
</div>
<div class="header-bottom">
<img src="imgs/e.jpg" />
</div>
<div class="topmenu">
<ul>
  <li style="background: transparent none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; padding-left: 0px;"><a href="sample.php"><span>Home</span></a></li>
  <li><a href="aboutus.php"><span>About&nbsp;us</span></a></li>
  <li><a href="whatsnew.php"><span>What's&nbsp;new</span></a></li>
  <li><a href="gallery.php"><span>Gallery</span></a></li>
  <li><a href="contact.php"><span>Contact</span></a></li>
  <li><a href="sponsors.php"><span>Sponsors</span></a></li>
  <li><a href="login.php"><span>Log In</span></a></li>
</ul>
</div>
</div>
<div class="content">
<div class="content-left">
<div class="row1">
<h1 class="title">Impressions <span>Gallery </span></h1>

<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="imgs/a.jpg" style="width:70%">
  <img class="mySlides" src="imgs/b.jpg" style="width:70%">
  <img class="mySlides" src="imgs/i.jpg" style="width:120%">
  <img class="mySlides" src="imgs/c.jpg" style="width:120%">
  <img class="mySlides" src="imgs/d.jpg" style="width:70%">
  <img class="mySlides" src="imgs/e.jpg" style="width:120%">
  <img class="mySlides" src="imgs/f.jpg" style="width:120%">
  <img class="mySlides" src="imgs/g.jpg" style="width:120%">
  <img class="mySlides" src="imgs/h.jpg" style="width:120%">  
  <img class="mySlides" src="imgs/j.jpg" style="width:120%">
  <img class="mySlides" src="imgs/k.jpg" style="width:120%">
  <img class="mySlides" src="imgs/concert.jpg" style="width:120%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change image every 3 seconds
}
</script>

</div>

</div>
<div class="content-right">
<div class="mainmenu">
<h2 class="sidebar1">Main Menu</h2>
<ul>
  <li><a href="dj.php">DJ NIGHT</a></li>
  <li><a href="tech.php">TECH TALK</a></li>
  <li><a href="treasure.php">TREASURE HUNT</a></li>
  <li><a href="funny.php">FUNNY GAMES</a></li>
  <br><br><br><br>
</ul>
</div>
<div class="contact">
<h2 class="sidebar2">Contact</h2>
<div class="contact-detail">
<p class="green"><strong><label>VIBHAV GOEL</label></strong></p>
<p class="green"><strong>PURU JAIN</strong></p>
<p class="green"><strong>RITIK JAIN</strong></p><p class="green"><strong>APAAR CHAUDHARY</strong></p>
<p><strong>Venue :</strong> Jaypee Institute Of Information Technology , Noida(sector-62)<br>
</p>
<p><strong>E-mail :</strong> &nbsp;&nbsp;&nbsp;vibhavgoel97@gmail.com</p>
<p><strong>Phone :</strong> &nbsp;&nbsp;&nbsp;+91-9560302416<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+91-9881853693</p>
</div>
</div>
</div>
</div>
<div class="footer">
<p>&copy; Copyright 2016. All Rights Reserved.
</p>
<ul>
  <li style="border-left: medium none;"><a href="sample.php"><span>Home</span></a></li>
  <li><a href="aboutus.php"><span>About&nbsp;us</span></a></li>
  <li><a href="whatsnew.php"><span>What's&nbsp;new</span></a></li>
  <li><a href="gallery.php"><span>Gallery</span></a></li>
  <li><a href="contact.php"><span>Contact</span></a></li>
  <li><a href="sponsors.php"><span>Sponsors</span></a></li>
  <li style="padding-right: 0px;"><a href="feedback.php"><span>Feedback</span></a></li>
</ul>
</div>
</div>
</div>
</div>

</body></html>