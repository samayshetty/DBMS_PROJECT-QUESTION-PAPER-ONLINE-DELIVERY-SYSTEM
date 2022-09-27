<?php
$connection=mysqli_connect('localhost','root','','qpods');


$emp_id=$_POST['empid'];
$col_id=$_POST['collid'];
$username=$_POST['username'];
$pass=$_POST['pass'];
$hash = md5($pass);

if(isset($_POST['submit']))
{
  $query="SELECT * FROM emp_data WHERE username='$username' AND password='$hash' AND cid='$col_id' AND id='$emp_id' ";
  $res=$connection->query($query);
  if($res->num_rows>0)
  {
    header("Location: pdownload.php");
  }
  else
  {
  echo "<script>
        alert('Enter Valid Credentials!');
        window.location.href='userlogin.php';
        </script>";

  }
}


?>
