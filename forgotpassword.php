<?php
$curuser = "";
$user = mysql_query("SELECT email FROM member WHERE user='$curuser'");
$u = mysql_fetch_arry($user);
$newpassword = uniqid().mt_rand();
mail($u['email'], "Password Reset", "This is your new password: $newpassword");
$qry = "UPDATE member SET password='$newpassword' WHERE email='$u[email]'";
$runqry = mysql_query($qry);
?>