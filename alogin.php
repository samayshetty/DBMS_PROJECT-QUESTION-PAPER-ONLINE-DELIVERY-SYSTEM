<!DOCTYPE html>
<html>
<head>
  <link href="style2.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  <title>Register Users</title>

</head>
<body class="loggedin">
  <nav class="navtop">
    <div>
      <h1>QPODS</h1>

      <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
    </div>
  </nav>

<div class="users">
  <h1>Login</h1>

    <form action="alogin_be.php" method="post">
      <table>

    <tr>
      <td><label class="required">Username</label></td>
      <td><input type="text" name="username" placeholder="Username" id="empid"  ></td>
    </tr>

    <tr>
      <td> Password </td>
      <td><input type="password" name="password" placeholder="Password" id="emp_fn" ></td>
    </tr>



<table>

    <input type="submit" name="submit" value="Submit">
</table>
    </form>

  </div>


</body>
</html>
