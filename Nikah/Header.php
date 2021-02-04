<?php

          $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
		 $dbname = 'MARRIAGE';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
          if(!$conn){
            echo 'Connected failure<br>';
         } else{ 
		 echo '';}

?>