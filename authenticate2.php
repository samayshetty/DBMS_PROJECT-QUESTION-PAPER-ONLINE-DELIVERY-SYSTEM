<?php
	$connection=mysqli_connect('localhost','root','','qpods');

	$system_id=$_POST['systemid'];
	$ip_add=$_POST['systemip'];
	$mac_add=$_POST['macaddress'];
	$sys_pass=$_POST['systempass'];
	date_default_timezone_set('Asia/Kolkata');
	$date = date('H:i:s');
	$date2= date('Y-m-d');
	$flag=0;


	if(isset($_POST['submit']))
	{
	$query="SELECT * FROM system_data WHERE system_id='$system_id' AND pwd='$sys_pass'";
	$result=mysqli_query($connection,$query);
	$rowcount=mysqli_num_rows($result);
	if(($rowcount)>0)
		{
			$query="INSERT INTO system_access (mac,login,access_date) VALUES ('$mac_add','$date','$date2') ";
			$result=mysqli_query($connection,$query);
			$flag=1;
		if($flag==1)
		{
    header("Location: register_users.php");
	}
	}
	else
	{
		echo "<script>
          alert('Invalid Credentials!');
          window.location.href='home.php';
          </script>";
	}


}



?>
