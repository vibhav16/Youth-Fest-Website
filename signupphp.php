<?php
   $id=$_POST['id'];
   $name=$_POST['name'];
   $username=$_POST['username'];
   $password=$_POST['password'];
   if($id&&$name&&$username&&$password)
   {
      $connect=mysqli_connect("localhost","root","") or die("couldn't connect to the database");
      mysqli_select_db($connect,"login") or die ("couldn't find database");
      mysqli_query($connect,"insert into users values($id,'$username','$password','$name')");
      echo "u have succesfully registered!!!";
   }
      else
      {
         echo'plz enter something!!!!';
      }
?>