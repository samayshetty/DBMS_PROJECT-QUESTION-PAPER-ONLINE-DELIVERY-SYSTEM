<!DOCTYPE html>
<html>
<head>
  <link href="style2.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  <title>Register Users</title>
  
</head>
<body>
  <nav class="navtop">
    <div>
      <h1>QPODS</h1>

      <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
    </div>
  </nav>

<div class="users">
  <h1>Login</h1>

    <form action="register_users_backend.php" method="post">
      <table>

    <tr>
      <td><label class="required">Employee ID</label></td>
      <td><input type="text" name="empid" placeholder="Employee ID" id="empid"  ></td>
    </tr>

    <tr>
      <td> Employee First Name </td>
      <td><input type="text" name="emp_fn" placeholder="Employee First Name" id="emp_fn" ></td>
    </tr>

    <tr>
      <td> Employee Last Name </td>
      <td><input type="text" name="emp_ln" placeholder="Employee Last Name" id="emp_ln" ></td>
    </tr>

    <tr>
      <td>   Employee Role  </td>
      <td><select name="role">
        <option value="Select">Select</option>}
        <option value="principal">Principal</option>
        <option value="e_dcs">External DCS</option>
        <option value="i_dcs">Internal DCS</option>
      </select>
      </td>
    </tr>

    <tr>
      <td> Phone Number </td>
      <td><input type="text" name="phnum" placeholder="Phone Number" id="phnum"></td>
    </tr>

    <tr>
      <td> Mail ID </td>
      <td><input type="text" name="mailid" placeholder="Mail ID" id="mailid"></td>
    </tr>

    <tr>
      <td><label class="required"> College ID </label></td>
      <td><input type="text" name="collid" placeholder="College ID" id="collid" ></td>
    </tr>

    <tr>
      <td> <label class="required">Username </label></td>
      <td><input type="text" name="username" placeholder="Username" id="uname" ></td>
    </tr>

    <tr>
      <td><label class="required"> Password </label></td>
      <td><input type="password" name="pass" placeholder="Password" id="pword" ></td>
    </tr>

    </table>

<table>
    <input type="submit" name="insert" value="Insert">
    <input type="submit" name="view" value="View">
    <input type="submit" name="delete" value="Delete">
    <input type="submit" name="submit" value="Submit">
</table>
    </form>

  </div>


</body>
</html>
