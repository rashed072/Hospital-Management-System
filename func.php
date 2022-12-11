<?php 
$con=mysqli_connect("localhost","root","","hmsdb");
if(isset($_POST['login_submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="SELECT * FROM logintb WHERE username='$username' AND password='$password'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)>0)
	{
		header("location: admin-panel.php");
	}
	else
	{
		echo "<script>alert('Error login')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	}
}
if(isset($_POST['pat_submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$docapp=$_POST['docapp'];
	$query="INSERT into doctorapp(fname,lname,email,contact,docapp) VALUES('$fname','$lname','$email','$contact','$docapp')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "<script>alert('Appointment registered.')</script>";
		echo "<script>window.open('admin-panel.php','_self')</script>";
	}
}
function get_patient_details(){
	global $con;
	$query="SELECT * FROM doctorapp";
	$result=mysqli_query($con,$query);
	while ($row=mysqli_fetch_array($result)) {
		$fname=$row['fname'];
	$lname=$row['lname'];  
	$email=$row['email'];
	$contact=$row['contact'];
	$docapp=$row['docapp'];
	echo "<tr>
      <td>$fname</td>
      <td>$lname</td>
      <td>$email</td>
      <td>$contact</td>
      <td>$docapp</td>
    </tr>";
	}
}

 ?>
 

