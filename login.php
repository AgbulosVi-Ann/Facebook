 
<?php

      $servername = "localhost";
      $username = "root";
      $password = "";
      $databasename = "dbfacebook";

      $connect = mysqli_connect($servername , $username , $password , $databasename);
    /*  if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
      }
      echo "Connected successfully";
      echo "";
      */
      if (isset($_POST['submit'])) {

         $query="select * from dbfacebook where email='".$email."' AND password'".$password."' limit 1 ";

         $run = mysqli_query($connect,$query);
            if ($run) {
               echo "form login successfully";
            }
            else{
               echo "form not login";
            }
         }
   ?>