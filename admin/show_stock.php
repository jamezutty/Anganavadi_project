<?php require_once("header.php");
$fid = $_REQUEST['fid'];
?>
      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-12 col-xs-12">
              <!-- small box -->
              <?php 
require_once("../connectionclass.php");
$qry="select * from food_stock join food on (food_id=fk_food_id)";  
  $obj=new connectionclass() ; 
$data=$obj->GetTable($qry);
 ?> 
  <table class="table table-bordered" >
 <tr> 
   <th>FOOD TITLE</th>  
   <th>QUANTITY</th>  
   <th>DATE</th> 
 </tr> 
<?php  
 foreach($data as $row){
 ?> 
 <tr> 
<?php 
 $pk_key=$row['stock_id'];
 ?>
  <td><?php  echo $row['food_title']; ?>  </td> 
 <td><?php  echo $row['qty']; ?>  </td> 
 <td><?php  echo $row['date']; ?>  </td> 
  
 </tr>
<?php
}
?>
 </table> 

 <h3>UPDATE STOCK</h3>
 <form method="post" action="update_stock_exe.php?fid=<?php echo $fid ?>">
 <div class="w3l-form-group"> 
    <label class="col-sm-3 control-label">Food ID</label> 
    <div class='group'>
		<input required class='form-control' type='text' name='fk_food_id' id='fk_food_id' value='<?php echo $fid ?>'/>
	</div>
</div>
 <div class="w3l-form-group"> 
    <label class="col-sm-3 control-label">Quantity</label> 
    <div class='group'>
		<input required class='form-control' type='text' name='qty' id='qty'/>
	</div>
</div>


<div class="w3l-form-group"> 
	<label class="col-sm-3 control-label">Date</label> 
	<div class='group'>
		<input required class='form-control' type='date' name='date' value=''/>
	</div>
</div>

<div class="w3l-form-group">
    <label class="col-sm-3 control-label"></label>
    <div class="col-sm-6">
      <button type="submit" class="btn btn-success">Submit</button>
      <button type="reset" class="btn btn-danger">Cancel</button>
   </div>
</div>


</form>
            </div><!-- ./col -->
            
          </div><!-- /.row -->
          <!-- Main row -->
       
      </div><!-- /.content-wrapper -->
<?php require_once("footer.php") ?>