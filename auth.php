<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
include('config.php');
require('class.unifi.php');

session_start();

$username = $_GET['username'];
$senha = $_GET['password'];
$mac = $_GET['id'];
$ap = $_GET['ap'];
$url = $_GET['url'];
$data = date("d/m/Y H:i:s");

$result = mysqli_query($con,"SELECT * FROM `creds` WHERE username = '$username' AND password = '$senha'");

if(mysqli_num_rows ($result) > 0 )
{
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $senha;
	
	// Insert the Client Mac Andress in Database
    mysqli_query($con,"UPDATE creds SET mac = '$mac', ap = '$ap', login_time = '$data' WHERE username = '$username'");
	$unifidata = new UnifiApi("login", "password!", "https://192.168.0.4:8443", "default", "version");
	
	// You can uncomment the line bellow to debug the code.
	#$unifidata->set_debug(true);
	
	$unifidata->login();
	$unifidata->authorize_guest($mac, 5);
	header("location:$url");
	mysqli_close($con);
}
else{
	unset ($_SESSION['username']);
	unset ($_SESSION['password']);
	echo "<script>alert('Wrong Username or Password!'); history.back();</script>";
	}
?>
