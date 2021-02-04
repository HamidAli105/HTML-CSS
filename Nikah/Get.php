<html>

<head> 
  <title> Get Data </title>
  </head>
  
  <body>
<?php

   $h =$_POST['FORM'];
   
    include('Header.php');
	
$sql = "SELECT * FROM ONLINE WHERE FORM LIKE '$h'";
         if($result = mysqli_query($conn, $sql)){
		 echo "";}else {echo "not ok";}

         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               echo "Groom Name is: " . $row["GNAME"]. "<br>";
			   echo "Groom CNIC NO is: " . $row["GCNIC"]. "<br>";
			   echo "Groom Father Name is: " . $row["GFNAME"]. "<br>";
			   echo "Groom Fahter CNIC NO is: " . $row["GFCNIC"]. "<br>";
			   echo "Groom Age is: " . $row["GAGE"]. "<br>";
			   echo "Groom Martial Status is: " . $row["GMARTIAL"]. "<br>";
			   echo "Groom Address is: " . $row["GADDRESS"]. "<br>";
			   echo "Groom Marriage Date is: " . $row["GMDATE"]. "<br>";
			   echo "Groom SOLEMNIZED Name is: " . $row["GSOLEMNIZED"]. "<br>";
			   echo "Groom BSOLEMNIZED CNIC is: " . $row["GSCNIC"]. "<br>";
			   echo "Groom Entry Marriage Date is: " . $row["GEDATE"]. "<br>";
			   echo "Groom Issue Marriage Date is: " . $row["GIDATE"]. "<br>";
			   echo "Groom Union Council Sactry Sign is: " . $row["GUSIGN"]. "<br>";
			   echo "Groom Union Council Sactry CNIC is: " . $row["GUCNIC"]. "<br>";
			   
            }
         } 
else {
            echo "There is no account associate with this email.Please <a href=\"Index.php\"> Sign up here:";}
        
     		mysqli_close($conn);



?>
</body>
</html>