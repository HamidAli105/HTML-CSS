<html>

<head> 
  <title> Fetch Data </title>
    
	 <link rel="stylesheet" type="text/css" href="College.css" />
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	 <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  </head>
  
  <body>
 <div class="container">
<?php

   $h =$_POST['CRMS'];
   
    include('Header.php');
	
$sql = "SELECT * FROM ONLINE WHERE CRMS LIKE '$h'";
         if($result = mysqli_query($conn, $sql)){
		 echo "";}else {echo "not ok";}
          $row = mysqli_fetch_assoc($result);
/*           if(mysqli_num_rows($result) > 0) {
               while($row = mysqli_fetch_assoc($result)) {
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
        
     	

     
   */
?>
        <table border= "0" width="1000px" style="color:#666" height= "900px" class="borderstyle">
		
			
		     
	  <tr class="clsgrup6">
		        <td> Name of Bride:<?php  echo $row["BNAME"]; ?>  </td>
				<td> Bride CNIC NO: <?php echo  $row["BCNIC"]; ?> </td> <br />
				
				
		</tr>
		 
			<tr class="clsgrup5">
		       <td> Bride of Father Name: <?php echo $row["BFNAME"]; ?> </td>
				<td> Bride of Fahter CNIC NO: <?php echo $row["BFCNIC"]; ?> </td>
				
				
		</tr>
		        <tr class="clsgrup3">
		        <td> Age of Bride: <?php echo $row["BAGE"]; ?> </td>
				<td> Bride of Martial Status: <?php echo $row["BMARTIAL"]; ?> </td>
				
				
		</tr> 
          <tr class="clsgrup4">
		        <td> Address of Bride: <?php echo $row["BADDRESS"]; ?> </td>
				<td> Date of Marriage of Bride: <?php echo $row["BMDATE"]; ?> </td>
				
				
		</tr>
        <tr class="clsgrup1">
		        <td>  SOLEMNIZED Name: <?php echo $row["BSOLEMNIZED"]; ?> </td>
				<td> SOLEMNIZED CNIC NO: <?php echo $row["BSCNIC"]; ?> </td>
				
				
		</tr>
          <tr class="clsgrup2">
		        <td> Date of Entry Marriage of Bride: <?php echo $row["BEDATE"]; ?> </td>
				<td> Date of Issue of Marriage of Bride: <?php echo $row["BIDATE"]; ?> </td>
				
				
		</tr> 
		<tr class="clsgrup2">
		        <td> Union Council Sactry Name: <?php echo $row["BUSIGN"]; ?> </td>
				<td> Union Council Sactry CNIC NO: <?php echo $row["BUCNIC"]; ?> </td>
				
				
		</tr> 
		
		
		
		</table>
		</div>
	<link rel="stylesheet" type="text/css" href="js/jquery.js" />
    <link rel="stylesheet" type="text/css" href="js/bootstrap.js" />
	
</body>
</html>