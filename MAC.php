<?php

// PHP code to get the MAC address of Client
$MAC = exec('getmac');

// Storing 'getmac' value in $MAC
$MAC = strtok($MAC, ' ');


$IP = $_SERVER['REMOTE_ADDR'];

$ip_address = getHostByName(getHostName());
echo GetMAC();

function GetMAC() {
   ob_start();
   system('getmac');
   $Content = ob_get_contents();
   ob_clean();
   return substr($Content, strpos($Content, '\\') - 20, 17);
}



// $IP stores the ip address of client
echo "Client's IP address is: $IP";
echo "MAC address of client is: $MAC";
?>


$query="SELECT * FROM emp_data WHERE username='$username' AND password='$hash' AND cid='$col_id' AND id='$emp_id' ";
$res=$connection->query($query);
/*$row=$res->fetch_assoc();
$pass=$row['password'];
echo $pass;*/


if($res->num_rows>0)
{
  header("Location: pdownload.php");

}
else {
echo "<script>
      alert('Enter Valid Credentials!');
      window.location.href='register_users.php';
      </script>";

}
}

'$subcode','$cname','$scheme','$sem','$branch',
