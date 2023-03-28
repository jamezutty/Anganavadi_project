<?php require_once("header.php") ?>
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
$qry="select * from food ";  
  $obj=new connectionclass() ; 
$data=$obj->GetTable($qry);
 ?> 
  <a href="create_food.php">Create</a>
  <table class="table table-bordered" >
 <tr> 
   <th>Food Id</th>  
   <th>Food Title</th>   
  </tr> 
<?php  
 foreach($data as $row){
 ?> 
 <tr> 
<?php 
 $pk_key=$row['food_id'];
 ?>
 <td><?php  echo $row['food_id']; ?>  </td> 
 <td><?php  echo $row['food_title']; ?>  </td> 
 <td><a href="show_stock.php?fid=<?php echo $pk_key; ?>">Show Stock</a> </td> 
</tr>
<?php
}
?>
 </table> 
            </div><!-- ./col -->
            
          </div><!-- /.row -->
          <!-- Main row -->
       
      </div><!-- /.content-wrapper -->
<?php require_once("footer.php") ?>