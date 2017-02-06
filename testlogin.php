<?php
session_start();
include 'dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

//the earlier for connecting the php code to the db--
//(!$row = $result->fetch_assoc())
//this mixes up PHP with OOP PHP---out of use in this context

$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
$result = mysqli_query($conn, $sql);
	
if (!$row = mysqli_fetch_assoc($result)) {
	# code...
	echo "Your username or password is incorrect !";
} else {

	$_SESSION['id'] = $row['id'];
}

header("Location: testlogin.html");

