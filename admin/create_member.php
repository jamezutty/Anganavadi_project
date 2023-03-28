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
              <form method="post" action="create_member_exe.php">
<div class="w3l-form-group"> 
    <label class="col-sm-3 control-label">NAME</label> 
    <div class='group'>
		<input required class='form-control'   pattern="[a-zA-Z\s]+" title="only alphabets and spaces allowed"  type='text' name='fullname' id='fullname'/>
	</div>
</div>

<div class="w3l-form-group"> 
	<label class="col-sm-3 control-label">ADDRESS</label> 
	<div class='group'>
		<input required class='form-control' type='text' name='address' id='address'/>
	</div>
</div>
<div class="w3l-form-group"> 
	<label class="col-sm-3 control-label">AADHAR NUMBER</label> 
	<div class='group'>
		<input required class='form-control' title="Enter a valid mobile number" type='text' name='aadhar_no' id='aadhar_no'/>
	</div>
</div>


<div class="w3l-form-group">
	<label class="col-sm-3 control-label">DATE OF BIRTH</label> 
	<div class='group'>
	<input required class='form-control' type='date' name='dob' id='dob'/>
	</div>
</div>
<div class="w3l-form-group"> 
	<label class="col-sm-3 control-label">PLACE</label> 
	<div class='group'>
		<input required class='form-control' type='text' name='place' id='place'/>
	</div>
</div>
<div class="w3l-form-group">
	<label class="col-sm-3 control-label">REGISTRATION DATE</label> 
	<div class='group'>
	<input required class='form-control' type='date' name='reg_date' id='reg_date'/>
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