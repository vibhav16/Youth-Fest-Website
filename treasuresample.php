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
<h1 class="title">You have successfully registered in!!!<span>TREASURE HUNT </span></h1>
<p><strong>IMPRESSIONS the annual techno-cultural-managerial festival of JIIT was founded by Jaiprakash Sewa Sansthan under the patronage of Jaiprakash Associates Ltd. It is a pulsating festival with an array of events, allowing the students a chance to exhibit and participate in technical and academic pursuits of programming, robotics, B-plan competitions, panel discussions, talk shows and many more such creative challenges. On the other hand it also provides ample opportunities to the young students of today to experience and live their passion doing theme walks, fashions shows and at the same time express their talent and versatility through choreography and street plays. </p>

<br >
<ul class="list1">
  <li>Impressions 2k16</li>
  <li>Impressions 2k15</li>
  <li>Impressions 2k14</li>
</ul>
<p>&nbsp;<br>
<strong>Impressions, besides providing a platform for enterprising young talent also helps individuals in identifying their unique skill sets and preparing them to face the competitive environment by participating in various events.<br>
<br>
</p>
</div>
<div class="row2">
<h2 class="subtitle">BOOKING <span>STATUS</span></h2>
<p><?php

      $connect=mysql_connect("localhost","root","") or die("couldn't connect to the database");
      mysql_select_db("login") or die ("couldn't find database");
      $query=mysql_query("call th()");
      $row=mysql_fetch_array($query);
      echo "TOTAL NO OF STUDENTS PARTICIPATED IN TREASURE HUNT ARE:  ";
      echo $row[0];  
?></p>
<p>&nbsp;</p>
<br>
<p align="right"><a href="aboutus.php" class="more">Read More</a></p>
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