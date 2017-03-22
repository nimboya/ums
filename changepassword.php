<?php
$curuser = "";
$qry = mysql_real_escape_string("select * from members where username = $curuser");
$runqry = mysql_query($qry);
$user = mysql_fetch_arrya($runqry);
$typedpassword = strip_tags($_POST['typedpassword']); 
$newpassword = strip_tags($_POST['newpassword']);

if($oldpassword == $typedpassword) {
    // Change Password
    $updateq = strip_tags("UPDATE member SET password = '$newpassword' WHERE username='$curuser'");
    $runq = mysql_query($updateq);
    $response = "Password Changed Successfully";   
} else {
    $response = "Old Password is no valid, Password Not Changed";
}
?>