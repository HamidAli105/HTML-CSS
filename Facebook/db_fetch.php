<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Fetch Data</title>
<link rel="stylesheet" type="text/css" href="New1.css" />
</head>

<body>
<?php

$h =$_POST['email'];
$a =$_POST['password'];



include ('header.php');

         $sql = "SELECT * FROM fcbk_record WHERE email LIKE '$h' && password LIKE '$a'";
         if($result = mysqli_query($conn, $sql)){
		 echo "";}else {echo "not ok";}
         $row = mysqli_fetch_assoc($result);
    /*    if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               echo "WeLcoMe to: " . $row["Fname"]. "<br>";
			   echo "Email: " . $row["Email"]. "<br>";
			   echo "Day:" . $row["Date"]. "<br>";
			   echo "Month: " . $row["Month"]. "<br>";
			   echo "Year:" . $row["Year"]. "<br>";
			   echo "Gender:" . $row["Gender"]. "<br>";
			  echo "Your Image:" . $row["Image"]. "<br>";
            }
		
         } else {
		 echo "There is no account associate with this email. Please <a href=\"Index.php\">Sign up here";}
   
    */  
	 ?>
     <div class="main1">
	 <table width="1340px" height="640px"> 
     
     <tr> 
            <td>Picture:<img src="Upload/<?php echo $row["Image"]; ?>" width="150px" height="150px" </td> 
     </tr> 
     
      <tr class="fname"> 
              <td> Name: <?php echo $row["Fname"]; ?>  </td> 
			   <td>   Gender: <?php echo  $row["Gender"]; ?> </td>
      </tr>
	 
		 
	    
		<tr class="datemargn">
		   <td> <?php echo $row["Date"]; ?>  <?php echo $row["Month"]; ?> <?php echo $row["Year"]; ?>  </td>
		    
		
		</tr>
		
 
 
</table>
</div>

</body>
</html>