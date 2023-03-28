<?php 
require_once("../connectionclass.php");
$mid=$_REQUEST['mid'];
$obj=new connectionclass() ; 
$full_name=$_POST['full_name'] ; 
$gender=$_POST['gender'] ; 

$qry="insert into child(full_name,gender,fk_member_id)values('$full_name','$gender','$mid')"; 
 $data=$obj->Manipulation($qry); 
var_dump($data);
header("location:show_child.php?mid=".$mid );
?>