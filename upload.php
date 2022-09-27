<!DOCTYPE html>
<html>
<?php
if(isset($_POST['insert']))
{
$connection=mysqli_connect('localhost','root','','qpods');

$subcode=$_POST['subcode'];
$cname=$_POST['cname'];
$scheme=$_POST['scheme'];
$sem=$_POST['sem'];
$branch=$_POST['branch'];
$tmpname=$_FILES['myfile']['tmp_name'];
$fp  = fopen($tmpname, 'r');
  $content = fread($fp, filesize($tmpname));
  $content = addslashes($content);
  fclose($fp);

//echo $data;

$query="INSERT INTO q_paper VALUES ('$subcode','$cname','$scheme','$sem','$branch','$content')";
mysqli_query($connection,$query);

  echo "<script>
        alert('Inserted Successfully');
        window.location.href='pdownload.php';
        </script>";

}
 ?>
<head>
  <link href="style2.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  <title>Upload Question Paper</title>

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

    <form method="post" enctype="multipart/form-data">
      <table>

    <tr>
      <td>Course Code</td>
      <td><input type="text" name="subcode" placeholder="Subject Code" id="subcode"  ></td>
    </tr>

    <tr>
      <td> Course Name </td>
      <td><input type="text" name="cname" placeholder="Course Name" id="cname" ></td>
    </tr>

    <tr>
      <td> Scheme </td>
      <td><input type="text" name="scheme" placeholder="Scheme" id="scheme" ></td>
    </tr>

    <tr>
      <td> Semester </td>
      <td><input type="text" name="sem" placeholder="Semester" id="sem"></td>
    </tr>

    <tr>
      <td> Branch </td>
      <td><input type="text" name="branch" placeholder="Branch" id="branch"></td>
    </tr>

    <tr>
      <td> Upload </td>
      <td><input type="file" name="myfile"/></td>
    </tr>


    </table>

<table>
    <input type="submit" name="insert" value="Insert">
</table>
    </form>

  </div>


</body>
</html>
