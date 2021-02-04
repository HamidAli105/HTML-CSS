<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$h =$_POST['fname'];
$a =$_POST['sname'];
$m =$_POST['phnnbr'];
$i =$_POST['password'];
$d =$_POST['date'];
$j =$_POST['month'];
$u =$_POST['year'];
$t =$_POST['gender'];


 if(isset($_POST['Button'])){
	 

      include ('header.php');
	  
	   $img= $_FILES['image']['name'];
	   $tmp_name= $_FILES['image']['tmp_name'];
	   
	   if(isset($img)){
		 
		if($img!=""){
			
		$location="Upload/";
       
        if(move_uploaded_file($tmp_name,$location.$img)){
			
		echo "Upload image successfully";	
		}else
		
		{  echo "Not upload image";  }
    
         
		} 
		   
	   }
 } 
		   $sql ="INSERT INTO fcbk_record(Fname,Sname,Email,Password,Date,Month,Year,Gender,Image)
                                    VALUES('$h','$a','$m','$i','$d','$j','$u','$t','$img')";
		 
		 if (mysqli_query($conn, $sql)){
			echo 'your data is inserted successfully';	 
		 }
		 else
		 {echo 'Not inserted'.mysqli_error();}
 



			 
		   mysqli_close($conn);


         
	 ?>   


</body>
</html>