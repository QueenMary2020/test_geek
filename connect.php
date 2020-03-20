<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$connect = mysqli_connect("localhost","root","");
mysqli_select_db($connect, 'projet');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
