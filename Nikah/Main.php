<html>

<head> 
  <title> Gain Data </title>
  </head>
  
  <body>
<?php

   $h =$_POST['FORM'];
   $a =$_POST['CRMS'];
   
    include('Header.php');
	
$sql = "SELECT * FROM ONLINE WHERE FORM LIKE '$h' && CRMS LIKE '$a'";
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
			   echo "Bride Name is: " . $row["BNAME"]. "<br>";
			   echo "Bride CNIC NO is: " . $row["BCNIC"]. "<br>";
			   echo "Bride Father Name is: " . $row["BFNAME"]. "<br>";
			   echo "Bride Fahter CNIC NO is: " . $row["BFCNIC"]. "<br>";
			   echo "Bride Age is: " . $row["BAGE"]. "<br>";
			   echo "Bride Martial Status is: " . $row["BMARTIAL"]. "<br>";
			   echo "Bride Address is: " . $row["BADDRESS"]. "<br>";
			   echo "Bride Marriage Date is: " . $row["BMDATE"]. "<br>";
			   echo "Bride SOLEMNIZED Name is: " . $row["BSOLEMNIZED"]. "<br>";
			   echo "Bride BSOLEMNIZED CNIC is: " . $row["BSCNIC"]. "<br>";
			   echo "Bride Entry Marriage Date is: " . $row["BEDATE"]. "<br>";
			   echo "Bride Issue Marriage Date is: " . $row["BIDATE"]. "<br>";
			   echo "Bride Union Council Sactry Sign is: " . $row["BUSIGN"]. "<br>";
			   echo "Bride Union Council Sactry CNIC is: " . $row["BUCNIC"]. "<br>";
			   
            }
         } 
else {
            echo "There is no account associate with this email.";}
        
     		mysqli_close($conn);



?>
</body>
</html>