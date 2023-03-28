<?php 
require_once("../connectionclass.php");
$obj=new connectionclass() ; 
$fullname=$_POST['fullname'] ; 
$address=$_POST['address'] ; 
$aadhar_no=$_POST['aadhar_no'] ; 
$dob=$_POST['dob'] ; 
$place=$_POST['place'] ; 
$reg_date=$_POST['reg_date'] ; 
$qry="insert into member(fullname,address,aadhar_no,dob,place,reg_date)values('$fullname','$address','$aadhar_no','$dob','$place','$reg_date')"; 
 $data=$obj->Manipulation($qry); 
var_dump($data);
header("location:show_members.php");
?>