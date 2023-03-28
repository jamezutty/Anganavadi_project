<?php
session_start();
require_once("../../connectionclass.php");
$obj=new connectionclass();
$username=$_POST['username'];
$password=$_POST['password']; 
$user_type=$_POST['user_type'];
$qry="select user_type from login where username='$username' and password='$password' and user_type='$user_type' ";
$exe=$obj->GetSingleData($qry);

$_SESSION['username']=$username;

if($exe=='admin')
{
	$_SESSION['user_type']=$exe;
	header("location:../../admin/index.php");
}
elseif ($exe=='worker') 
{
	$_SESSION['user_type']=$exe;
	header("location:../../worker/index.php");
}
else
{
	 echo $obj->alert("Invalid Username or password","login.php");
}
?>