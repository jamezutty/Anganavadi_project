<?php 
require_once("../connectionclass.php");
$fid=$_REQUEST['fid'];
$obj=new connectionclass() ; 
$qty=$_POST['qty'];
$date=$_POST['date'];

$qry="insert into food_stock(fk_food_id,qty,date)values('$fid','$qty','$date')"; 
 $data=$obj->Manipulation($qry); 
var_dump($data);
header("location:show_stock.php?fid=".$fid);
?>