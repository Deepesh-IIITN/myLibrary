<?php 
session_start();
$name=$_SESSION['sname'];
$roll=$_SESSION['rn'];
$email=$_SESSION['email'];
$str1=$_SESSION['string'];
$bookno = $_GET['book'];
$con = mysqli_connect('localhost','root','','library');
$query ="DELETE FROM $str1 WHERE bookno='$bookno'";
$run=mysqli_query($con,$query);

$temp=strval($_SESSION['lid']);
$temp1=$_SESSION['lname'];
$str2="t".$temp1."".$temp;
$variable="Return";


$query2="INSERT INTO `$str2`(`bookno`, `name`, `roll`, `email` ,`request_type`) VALUES ('$bookno','$name','$roll','$email','$variable')";
$run2=mysqli_query($con,$query2);


$str3="ti".$temp1."".$temp;

$query3="DELETE FROM $str3 WHERE bookno='$bookno' AND email='$email'";
$run3=mysqli_query($con,$query3);


if($run==TRUE && $run2==TRUE && $run3==TRUE)
{ 
 	header('location:lp.php');
}
else
{
	echo "<center><h2 style='color:red;'>Something Went Wrong !!!</h2></center>";
}
?>