<?php
$conn=mysqli_connect('localhost','root','','george');
$phonen= $_POST['phonen'];
$eusername= $_POST['eusername'];
$epassword= $_POST['epassword'];
$rpassword= $_POST['rpassword'];
$mysql="INSERT INTO 't_george'('phone','username','password','cpassword')VALUES('phonen','eusername','epassword','rpassword')";
$rs=mysqli_query($conn,$mysql);
if($rs)
{
	echo"registration succesful";
}
?>