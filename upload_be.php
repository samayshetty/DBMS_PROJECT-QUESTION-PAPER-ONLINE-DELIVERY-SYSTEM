<?php
$connection=mysqli_connect('localhost','root','','qpods');

$subcode=$_POST['subcode'];
$cname=$_POST['cname'];
$scheme=$_POST['scheme'];
$sem=$_POST['sem'];
$branch=$_POST['branch'];
$myfile=$_POST['myfile'];
if(isset($_POST['insert']))
{
$data=file_get_contents($_FILES['myfile']['tmp_name']);
$stmt=$connection->prepare("INSERT INTO q_paper VALUES ('$subcode,$cname,$scheme,$sem,$branch,$data') ");
$stmt->execute();
echo"done";
}
 ?>
