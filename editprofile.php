<?php

$curuser = "";
$runqry = mysql_query("select id from members where username = '$curuser'");
$u = mysql_fetch_array($runqry);

$userid = 
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];

// Perform Update
$updqry = "UPDATE members SET firstname = '$firstname', lastname='$lastname', 
          gender='$gender' WHERE id=$userid";

$runqry = mysql_query($updqry);
$response = "Profile Updated Successfully";
?>