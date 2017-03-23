<?php
$pledgeby = $_POST['pledgeto']; 
$pledgeto = $_POST['pledgeby'];
$fname = uniqid().".jpg";
$trantype = strip_tags($_POST['trantype']);
$amount = strip_tags($_POST['amount']);
$bank = strip_tags($_POST['amount']);
$nameonaccount = strip_tags($_POST['nameonaccount']);
$uploadedfile = strip_tags($fname);
move_uploaded_file($_FILES['file']['tmp_name'], "proofs/".$fname);
$qry = "INSERT INTO proof (pledgeby, pledgeto, trantype, amount, bank, nameonaccount, uploadedfile) VALUES ";
$runqry = mysql_query($qry);

?>