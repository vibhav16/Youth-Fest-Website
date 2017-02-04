<?php
   $firstname=$_POST['firstname'];
   $lastname=$_POST['lastname'];
   $phone=$_POST['phone'];
   $query=$_POST['query'];
   if($firstname&&$lastname&&$phone&&$query)
   {
      $connect=mysqli_connect("localhost","root","") or die("couldn't connect to the database");
      mysqli_select_db($connect,"login") or die ("couldn't find database");
      mysqli_query($connect,"insert into contact values('$firstname','$lastname',$phone,'$query')");
      header("location:contactsample.php");
   }
      else
      {
         echo'plz enter properly!!!!';
      }
?>