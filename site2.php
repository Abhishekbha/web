<?php
$a=$_POST["name"];
$b=$_POST["email"];
$c=$_POST["phone"];
$d=$_POST["gest"];  
$conn=mysqli_connect("localhost","abhi","","abhi2");
$query="INSERT INTO `kaka`(`name`, `email`, `phone`, `gest`) VALUES ('$a','$b','$c','$d')";
$run=mysqli_query($conn,$query);
if($run==true)
{
	echo "Your Reservation is Done";
}
else
{
	echo "not";
}



?>
<style>
  


</style>
<a href="siteone.html"><button type="button"  > BACK</a>

 