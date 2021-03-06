<?php include 'common/header.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <?php 
    	include 'connect.php';
      $errClassName = $errClassEmail = '';
      $errTextName = $errTextEmail = '';
      $name = $email = '';
      if (isset($_POST['register'])) {
        $name  = $_POST['name'];
        $email = $_POST['email'];
        if ($name == '') {
          $errClassName = 'has-error';
          $errTextName = 'Please input your name';
        }
        if ($email == '') {
          $errClassEmail = 'has-error';
          $errTextEmail = 'Please input your email';
        }
        if ($name != '' && $email != '') {
        	$sql = "INSERT INTO users(name, email) VALUES ('$name', '$email')";
        	if (mysqli_query($connect, $sql) === TRUE) {
        		// chuyen trang trong PHP
        		header("Location: list_user.php");
        	}
        }
      }
    ?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Register form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="#" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group <?php echo $errClassName;?>">
                  <label for="exampleInputName">Name</label>
                  <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Enter name" value="<?php echo $name;?>">
                  <span class="help-block"><?php echo $errTextName;?></span>
                </div>
                <div class="form-group <?php echo $errClassEmail;?>">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo $email;?>">
                  <span class="help-block"><?php echo $errTextEmail;?></span>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Phone</label>
                  <input type="text" class="form-control" id="exampleInputPhone" placeholder="Enter phone">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Avatar</label>
                  <input type="file" id="exampleInputFile">
                </div>
                <!-- radio -->
                <div class="form-group">
                  <label>
                    <input type="radio" name="r1" class="minimal" checked>Male
                  </label>
                  <label>
                    <input type="radio" name="r1" class="minimal">Female
                  </label>
                  <label>
                    <input type="radio" name="r1" class="minimal">Other
                </div>
                <div class="form-group">
                    <label>City</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option value="">Choose city</option>
                      <option value="Alaska">Alaska</option>
                      <option value="California">California</option>
                      <option value="Delaware">Delaware</option>
                    </select>
                </div>
                <div class="form-group">
                  <label>Date:</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="birthday">
                  </div>
                    <!-- /.input group -->
                </div>                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="register">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include 'common/footer.php';?>