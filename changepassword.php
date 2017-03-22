<?php
$curuser = "";
$qry = mysql_real_escape_string("select * from members where username = $curuser");
$runqry = mysql_query($qry);
$user = mysql_fetch_array($runqry);
$oldpassword = $user['oldpassword'];
$typedpassword = strip_tags($_POST['typedpassword']); 
$newpassword = strip_tags($_POST['newpassword']);
$retypepassword = strip_tags($_POST['retypepassword']);

if($oldpassword == $typedpassword) {
    // Change Password
    $updateq = strip_tags("UPDATE member SET password = '$newpassword' WHERE username='$curuser'");
    $runq = mysql_query($updateq);
    $response = "Password Changed Successfully";   
}

else if($newpassword == $retypepassword) {
    $response = "The Password you typed dont match, please try again";
} 

}else {
    $response = "Old Password is no valid, Password Not Changed";
}
?>