<?php
   $username=$_POST['username'];
   $password=$_POST['password'];

   if($username&&$password)
   {
      mysql_connect("localhost","root","") or die("couldn't connect to the database");
      mysql_select_db("login") or die ("couldn't find database");
      $query=mysql_query("select * from users where username='$username' and password='$password'");
       $row=mysql_fetch_array($query);
       
        if($username==$row["username"] && $password==$row["password"])
         {  
           
          header("location:loginsample.php");
          }
      else 
        {
           header("location:loginfail.php");
         }
            
       
    }
      
?>