<?php 
require_once("../connectionclass.php");
$obj=new connectionclass() ; 
$food_title=$_POST['food_title'] ; 

$qry="insert into food(food_title)values('$food_title')"; 
 $data=$obj->Manipulation($qry); 
var_dump($data);
header("location:show_food.php");
?>