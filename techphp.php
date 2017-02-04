<?php
   $firstname=$_POST['firstname'];
   $lastname=$_POST['lastname'];
   $phone=$_POST['phone'];
   $email=$_POST['email'];
   $college=$_POST['college'];
   if($firstname&&$lastname&&$phone&&$email&&$college)
   {
      $connect=mysqli_connect("localhost","root","") or die("couldn't connect to the database");
      mysqli_select_db($connect,"login") or die ("couldn't find database");
      mysqli_query($connect,"insert into tech values('$firstname','$lastname','$phone','$email','$college')");
      echo "u have succesfully registered!!!";
      header("location:techsample.php");
   }
      else
      {
         echo'plz enter something!!!!';
      }
?>