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
              <form method="post" action="create_child_exe.php?mid=<?php echo $mid;?>">
<div class="w3l-form-group"> 
    <label class="col-sm-3 control-label">NAME</label> 
    <div class='group'>
		<input required class='form-control'   pattern="[a-zA-Z\s]+" title="only alphabets and spaces allowed"  type='text' name='full_name' id='fullname'/>
	</div>
</div>

<div class="w3l-form-group"> 
	<label class="col-sm-3 control-label">Gender</label> 
	<div class='group'>
        <select name="gender" class='form-control'>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="others">Others</option>
        </select>
    </div>
</div>
<div class="w3l-form-group"> 
	<label class="col-sm-3 control-label">MEMBER ID</label> 
	<div class='group'>
		<input required class='form-control' type='text' name='mid' value='<?php echo $mid ?>'/>
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