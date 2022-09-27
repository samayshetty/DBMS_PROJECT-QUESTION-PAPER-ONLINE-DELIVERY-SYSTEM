<!DOCTYPE html>
<html>
<head>
  <link href="style2.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  <title>Login</title>


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

    <form action="userlogin_be.php" method="post">
      <table>
        <tr>
          <td>Employee ID</td>
          <td><input type="text" name="empid" placeholder="Employee ID" id="empid" required ></td>
        </tr>
        <tr>
          <td>College ID</td>
          <td><input type="text" name="collid" placeholder="College ID" id="collid" required></td>
        </tr>

        <tr>
          <td> Username </td>
          <td><input type="text" name="username" placeholder="Username" id="uname" required></td>
        </tr>

        <tr>
          <td> Password </td>
          <td><input type="password" name="pass" placeholder="Password" id="pword" required></td>
        </tr>

        </table>
        <table>

            <input type="submit" name="submit" value="Submit">


        </table>
      </form>

    </div>


  </body>
  </html>
