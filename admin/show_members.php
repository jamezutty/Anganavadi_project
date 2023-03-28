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
$qry="select * from member ";  
  $obj=new connectionclass() ; 
$data=$obj->GetTable($qry);
 ?> 
  <table class="table table-bordered" >
 <tr> 
   <th>NAME</th>  
   <th>ADDRESS</th>  
   <th>AADHAR NO</th>  
   <th>PLACE</th>  
   <th>DATE OF BIRTH</th>  
   <th>REGISTERATION DATE</th>  
  </tr> 
<?php  
 foreach($data as $row){
 ?> 
 <tr> 
<?php 
 $pk_key=$row['member_id'];
 ?>
  <td><?php  echo $row['fullname']; ?>  </td> 
 <td><?php  echo $row['address']; ?>  </td> 
 <td><?php  echo $row['aadhar_no']; ?>  </td> 
 <td><?php  echo $row['place']; ?>  </td> 
 <td><?php  echo $row['dob']; ?>  </td> 
 <td><?php  echo $row['reg_date']; ?>  </td> 
 <td><a href="show_child.php?mid=<?php echo $pk_key;?>">Show Child </a>  </td> 
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