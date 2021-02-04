        <?php
		$dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
		 $dbname = 'FACEBOOK';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
          if(!$conn){
            echo 'Connected failure<br>';
         }
		 ?>