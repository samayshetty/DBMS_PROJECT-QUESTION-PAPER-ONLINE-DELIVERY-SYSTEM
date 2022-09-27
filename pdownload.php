<!DOCTYPE html>
<html>
  <head>
    <title>Download Question Paper</title>
    <link href="style3.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  </head>
  	<body >
      <nav class="navtop">
        <div>
          <h1>QPODS</h1>
          <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
      </nav>

<div class="users">
  <h1> Enter Details</h1>
      <form action="pdownload_be.php" method="post">
        <table class="paddingBetweenCols">

        <tr>
          <td> College ID </td>
          <td><input type="text" name="cid" placeholder="College ID" id="cid" ></td>

          <td> Course Code </td>
        <td><input type="text" name="subcode" placeholder="Subject Code" id="subcode" ></td>
      </tr>
    </table>
    <h1> Enter Username and Password </h1>

    <table class="paddingBetweenCols">
      <tr>
        <td>  </td>
        <td> Username </td>
        <td> Password </td>

      </tr>

      <tr>
        <td> Principal </td>
        <td><input type="text" name="p_uname" placeholder="Username" id="p_uname"></td>
        <td><input type="password" name="p_pass" placeholder="Password" id="p_pass" ></td>
      </tr>

      <tr>
        <td> External Deputy Chief Superintendent </td>
        <td><input type="text" name="e_uname" placeholder="Username" id="e_uname"></td>
        <td><input type="password" name="e_pass" placeholder="Password" id="e_pass" ></td>
      </tr>

      <tr>
        <td> Internal Deputy Chief Superintendent </td>
        <td><input type="text" name="i_uname" placeholder="Username" id="i_uname"></td>
        <td><input type="password" name="i_pass" placeholder="Password" id="i_pass" ></td>
      </tr>
    </table>

    <table>

        <input type="submit" name="download" value="Download">
        <input type="submit" name="upload" value="Upload">

    </table>
  </form>
    </div>
    </body>
  </html>
