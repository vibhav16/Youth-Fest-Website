<?php
   $firstname=$_POST['firstname'];
   $lastname=$_POST['lastname'];
   $phone=$_POST['phone'];
   $comment=$_POST['comment'];
   if($firstname&&$lastname&&$phone&&$comment)
   {
      $connect=mysqli_connect("localhost","root","") or die("couldn't connect to the database");
      mysqli_select_db($connect,"login") or die ("couldn't find database");
      mysqli_query($connect,"insert into feedback values('$firstname','$lastname',$phone,'$comment')");
      echo " ->>  Thanks for feedback !!!!!!!!!";
   }
      else
      {
         echo'plz enter properly!!!!';
      }
?>