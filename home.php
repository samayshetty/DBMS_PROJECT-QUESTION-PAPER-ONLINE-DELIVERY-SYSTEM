<!DOCTYPE html>
<html>
<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
if(array_key_exists('Systemip', $_POST)) {
  systemip();
}
$ip_address = getHostByName(getHostName());
$MAC = exec('getmac');

// Storing 'getmac' value in $MAC
$MAC = strtok($MAC, ' ');




?>

	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>QPODS</h1>
				<!-- <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>   value=" echo $ip_address?>" -->
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">

			<h2>Welcome back, <?=$_SESSION['name']?>!</h2>

		</div>
			<div class="login">
				<h1>Login</h1>
          <form  action="authenticate2.php" method="post">
					<table>

				  <tr>
						<td>System ID</td>
						<td><input type="text" name="systemid" placeholder="System ID" id="systemid" ></td>
					</tr>

					<tr>
						<td>  Password </td>
						<td><input type="password" name="systempass" placeholder="Password" id="systempass" ></td>
					</tr>

					<tr>
						<td>System IP</td>
						<td><input type="text" name="systemip" placeholder="System IP" id="systemip" value="<?php echo $ip_address?>" required></td>
					</tr>

					<tr>
						<td>	MAC address</td>
						<td><input type="text" name="macaddress" placeholder="MAC Address" id="macaddress" value="<?php echo $MAC?>" required></td>
					</tr>



				</table>
				<table>
					<input type="submit" name="submit" value="Submit">
				</table>
   				</form>
				</div>

	</body>
</html>
