
<html>
<head>
 <title> Online Nikah </title>
 
 </head>
 <body>
 
 
  <?php

$a =$_POST['CRMS'];
$b =$_POST['FORM'];
$c =$_POST['BNAME'];
$d =$_POST['BCNIC'];
$e =$_POST['BFNAME'];
$f =$_POST['BFCNIC'];
$g =$_POST['BAGE'];
$h =$_POST['BADDRESS'];
$i =$_POST['BMDATE'];
$j =$_POST['BSOLEMNIZED'];
$k =$_POST['BSCNIC'];
$l =$_POST['BEDATE'];
$m =$_POST['BIDATE'];
$n =$_POST['BUSIGN'];
$o =$_POST['BUCNIC'];
$p =$_POST['GNAME'];
$q =$_POST['GCNIC'];
$r =$_POST['GFNAME'];
$s =$_POST['GFCNIC'];
$t =$_POST['GAGE'];
$u =$_POST['GADDRESS'];
$v =$_POST['GMDATE'];
$w =$_POST['GSOLEMNIZED'];
$x =$_POST['GSCNIC'];
$y =$_POST['GEDATE'];
$z =$_POST['GIDATE'];
$ab =$_POST['GUSIGN'];
$ac =$_POST['GUCNIC'];
$ad =$_POST['BMARTIAL'];
$ae =$_POST['GMARTIAL'];
  
  
  
     include('Header.php');
  
  
  
        
			 
		   
            
			$sql = "INSERT INTO ONLINE(CRMS,FORM,BNAME,BCNIC,BFNAME,BFCNIC,BAGE,BADDRESS,BMDATE,BSOLEMNIZED,BSCNIC,BEDATE,BIDATE,BUSIGN,BUCNIC,
			                           GNAME,GCNIC,GFNAME,GFCNIC,GAGE,GADDRESS,GMDATE,GSOLEMNIZED,GSCNIC,GEDATE,GIDATE,GUSIGN,GUCNIC,BMARTIAL,GMARTIAL)
                VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s','$t','$u','$v','$w','$x','$y','$z',
				       '$ab','$ac','$ad','$ae')";
		 
		 if (mysqli_query($conn, $sql)){
			echo 'Your data is Inserted Successfully';	 
		 }
		 else
		 {echo 'Not inserted' .mysqli_error();}



 



  
           mysqli_close($conn);
  
      
      ?>

</body>
</html>