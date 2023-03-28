<?php require_once("header.php"); 
$mid=$_REQUEST['mid'];
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
              <form method="post" action="create_supply_exe.php">


<div class="w3l-form-group"> 
	<label class="col-sm-3 control-label">Member </label> 
	<div class='group'>
        <select name="member_name" class='form-control'>
        <?php 
require_once("../connectionclass.php");
$qry="select * from member ";  
  $obj=new connectionclass() ; 
$data=$obj->GetTable($qry);
 ?> 
  
<?php  
 foreach($data as $row){
 ?> 
 <tr> 
<?php 
 $pk_key=$row['member_id'];
 ?>
  
 <option value="<?php echo $pk_key;?>"><?php  echo $row['fullname']; ?> ,<?php  echo $row['place']; ?>  </option>
<?php
}
?>
           
             
        </select>
    </div>
</div>
<div class="w3l-form-group"> 
	<label class="col-sm-3 control-label">Food </label> 
	<div class='group'>
        <select name="food_name" class='form-control'>
            <?php
            $qry="select * from food ";  
            $obj=new connectionclass() ; 
          $data=$obj->GetTable($qry);
           ?> 
            
          <?php  
           foreach($data as $row){
           ?> 
           <tr> 
          <?php 
           $pk_key=$row['food_id'];
           ?>
            
           <option value="<?php echo $pk_key;?>"><?php  echo $row['food_title']; ?> </option>
          <?php
          }
          ?> 
        </select>
    </div>
</div>
<div class="w3l-form-group"> 
	<label class="col-sm-3 control-label">Supply Date</label> 
	<div class='group'>
		<input required class='form-control' type='date' name='supply_date' value='supply_date'/>
	</div>
</div>
<div class="w3l-form-group"> 
    <label class="col-sm-3 control-label">Quantity</label> 
    <div class='group'>
		<input required class='form-control' type='text' name='qty' id='qty'/>
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