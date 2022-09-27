<?php
$connection=mysqli_connect('localhost','root','','qpods');

$cid=$_POST['cid'];
$subcode=$_POST['subcode'];
$p_uname=$_POST['p_uname'];
$p_pass=$_POST['p_pass'];
$e_uname=$_POST['e_uname'];
$e_pass=$_POST['e_pass'];
$i_uname=$_POST['i_uname'];
$i_pass=$_POST['i_pass'];
$done=0;
$done2=1;
date_default_timezone_set('Asia/Kolkata');
$date = date('H:i:s');

if(isset($_POST['download']))
{
    $query="SELECT * FROM emp_data WHERE username='$p_uname'";
    $res=$connection->query($query);
    $row=$res->fetch_assoc();
    $pass=$row['password'];
    $hash = md5($p_pass);
    if($pass!=$hash)
    {
      echo "<script>
            alert('Invlaid Credentials!');
            window.location.href='pdownload.php';
            </script>";
            $done=1;
    }

    $query="SELECT * FROM emp_data WHERE username='$e_uname'";
    $res=$connection->query($query);
    $row=$res->fetch_assoc();
    $pass=$row['password'];
    $hash = md5($e_pass);
    if($pass!=$hash)
    {
      echo "<script>
            alert('Invlaid Credentials!');
            window.location.href='pdownload.php';
            </script>";
            $done=1;
    }

    $query="SELECT * FROM emp_data WHERE username='$i_uname'";
    $res=$connection->query($query);
    $row=$res->fetch_assoc();
    $pass=$row['password'];
    $hash = md5($i_pass);
    if($pass!=$hash)
    {
      echo "<script>
            alert('Invlaid Credentials!');
            window.location.href='pdownload.php';
            </script>";
            $done=1;
    }
    if($done2==1)
    {
    $query2="SELECT MAX(id) FROM system_access";
    $res = $connection->query($query2);
    $row = $res->fetch_assoc();
    $id=$row['MAX(id)'];
    $query="UPDATE system_access SET logout='$date' WHERE id=$id ";
    $result=mysqli_query($connection,$query);

  }

    if($done==0)
    {
    $query = "SELECT * FROM q_paper WHERE sub_code = '$subcode'";
    $res = $connection->query($query);
    $row = $res->fetch_assoc();
    $qp=$row['qp'];

    header("Content-type:application/pdf ");
    echo $qp;
  }
}
elseif($_POST['upload'])
{
  header("Location:alogin.php");
}




 ?>
