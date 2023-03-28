<?php 
require_once("../connectionclass.php");
$obj=new connectionclass() ; 
$member_name=$_POST['member_name'] ; 
$food_name=$_POST['food_name'] ; 
$supply_date=$_POST['supply_date'] ; 
$qty=$_POST['qty'] ; 
$qry="insert into food_supply(fk_food_id,fk_member_id,supply_date,qty)values('$food_name','$member_name','$supply_date','$qty')"; 
 $data=$obj->Manipulation($qry); 
var_dump($data);
header("location:show_supply.php");
?>