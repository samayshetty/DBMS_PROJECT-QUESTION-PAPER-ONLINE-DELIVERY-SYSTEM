<?php
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s');
$date2= date('Y-m-d');
$pass='principal01';
$hash=md5($pass);
echo $hash;
echo $date;
?>
<html>
<label class="required">Name:</label>
<input type="text">

<style>
  .required:after {
    content:" *";
    color: red;
  }
</style>
</html>

id='$emp_id' AND cid='$col_id' AND
