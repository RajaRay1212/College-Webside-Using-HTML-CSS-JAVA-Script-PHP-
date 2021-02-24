<?php
    
	$Reg_Number   = $_POST['reg_no'];
	$student_Name = $_POST['t1'];
	$father_Name = $_POST['t2'];
	$mother_Name = $_POST['t3'];
	$gender      = $_POST['r'];
	$address     = $_POST['t4'];
	$course      = $_POST['select'];
	$dob         = $_POST['d1'];
	$twelth_Marks = $_POST['t5'];
	$mobile_No      = $_POST['t6'];
	$reg_date    = $_POST['d2'];
	
	echo $Reg_Number;
    echo "<br>";	
    echo $student_Name;	
    echo "<br>";
	echo $father_Name;
	echo "<br>";
	echo $mother_Name;	
	echo "<br>";
	echo $gender;
	echo "<br>";
    echo $address;
	 echo "<br>";
    echo $course;	 
    echo "<br>";	
	echo $dob;
	echo "<br>";
	echo $twelth_Marks;	
	echo "<br>";
	echo $reg_date;
	echo "<br>";
	
$host = 'localhost:3306';
$user = 'root';
$pass = '1234';
$db='ssmv2';
$h = mysqli_connect($host, $user, $pass,$db);
	 
	 $q="insert into bed3 values(".$Reg_Number.",'".$student_Name."','".$father_Name."','".$mother_Name."','".$gender."','".$address."','".$course."','".$dob."','".$twelth_Marks."','".$mobile_No."','".$reg_date."')";

if(mysqli_query($h, $q))
{
     echo "Record inserted successfully";
}
else
{
   echo "Could not insert record:".mysqli_error($h);
}
	
	
	
	
	
	
	
	
	
	
	