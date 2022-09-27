<!DOCTYPE html>
<html>
<head>
  <style>
          #back{
            width: 100%;
          	padding: 15px;
         	  margin-top: 20px;
          	background-color: #3274d6;
          	border: 0;
          	cursor: pointer;
          	font-weight: bold;
          	color: #ffffff;
          	transition: background-color 0.2s;
          }
        #emp_data {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        #emp_data td, #emp_data th {
          border: 1px solid #ddd;
          padding: 8px;
        }

        #emp_data tr:nth-child(even){background-color: #f2f2f2;}

        #emp_data tr:hover {background-color: #ddd;}

        #emp_data th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #3274d6;
          color: white;
          }
    </style>
</head>

<?php
$connection=mysqli_connect('localhost','root','','qpods');

$emp_id=$_POST['empid'];
$emp_fname=$_POST['emp_fn'];
$emp_lname=$_POST['emp_ln'];
$emp_role=$_POST['role'];
$emp_phnum=$_POST['phnum'];
$emp_mailid=$_POST['mailid'];
$col_id=$_POST['collid'];
$username=$_POST['username'];
$pass=$_POST['pass'];
$hash = md5($pass);



if(isset($_POST['insert']))
{
        $query3="INSERT INTO emp_data VALUES ('$emp_id','$emp_fname','$emp_lname','$emp_role','$emp_phnum','$emp_mailid','$col_id','$username','$hash')";
        if(mysqli_query($connection,$query3))
        {
          echo "<script>
                alert('Inserted Successfully');
                window.location.href='register_users.php';
                </script>";
        }
        else
        {
          echo "<script>
                alert('Enter Valid Credentials!');
                window.location.href='register_users.php';
                </script>";
        }
}
elseif (isset($_POST['view']))
{
            $sql="SELECT * FROM emp_data";
            $result = mysqli_query($connection,$sql);
            ?>
            <div class="box-body table-responsive no-padding">
               <table id="emp_data">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Role</th>
                        <th>Phone Number</th>
                        <th>E-mail ID</th>
                        <th>Username</th>
                        <th>Password</th>
                    </tr>
                    <tr>

                      <?php
          if (mysqli_num_rows($result) > 0)
          {
            while ($row = $result->fetch_assoc())
            {
              ?>
              <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['fname']; ?></td>
                  <td><?php echo $row['lname']; ?></td>
                  <td><?php echo $row['role']; ?></td>
                  <td><?php echo $row['phnum']; ?></td>
                  <td><?php echo $row['mail_id']; ?></td>
                  <td><?php echo $row['username']; ?></td>
                  <td><?php echo $row['password']; ?></td>
              </tr>
              <?php
            }
          }
              ?>

                    </tr>
                 </table>
              </div>
              <p>
              <button id="back" onclick="history.go(-1);">Back </button>
            </p>
          <?php
}
elseif(isset($_POST['delete']))
{
  $query2="DELETE FROM emp_data WHERE id='$emp_id'";
  $result = mysqli_query($connection,$query2);
  echo "<script>
        alert('Deleted Successfully!');
        window.location.href='register_users.php';
        </script>";


}

elseif(isset($_POST['submit']))
{
  header("Location: userlogin.php");
}

else
{
  echo "<script>
        alert('Enter Valid Credentials!');
        window.location.href='register_users.php';
        </script>";
}

?>

 </html>
