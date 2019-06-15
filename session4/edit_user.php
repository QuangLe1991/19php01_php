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
      $id = $_GET['id'];
      $errClassName = $errClassEmail = $errClassBirthday = $errClassPhone = $errClassGender = $errClassCity = '' ;
      $errTextName = $errTextEmail = $errTextBirthday = $errTextPhone = $errTextGender = $errTextCity = '';
      $name = $email = $phone = $gender = $city = '';
      if (isset($_POST['edit'])) {
        $name  = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $birthday = $_POST['birthday'];
        $birthday = date("Y-m-d",strtotime($birthday));
        $gender = isset($_POST['gender'])?$_POST['gender']:NULL;
        if ($name == '') {
          $errClassName = 'has-error';
          $errTextName = 'Please input your name';
        }
        if ($email == '') {
          $errClassEmail = 'has-error';
          $errTextEmail = 'Please input your email';
        }
        if ($birthday == '') {
          $errClassBirthday = 'has-error';
          $errTextBirthday = 'Please input your birthday';
        }
        if ($phone == '') {
          $errClassPhone = 'has-error';
          $errTextPhone = 'Please input your phone';
        }
        if ($city == '') {
          $errClassCity = 'has-error';
          $errTextCity = 'Please input your city';
        }
        if ($name != '' && $email != '' && $phone != '' && $city != '') {
          $sql = "UPDATE users SET name='$name', email='$email', birthday='$birthday', phone='$phone', gender='$gender', city='$city' WHERE id=$id";
          if (mysqli_query($connect, $sql) === TRUE) {
            // chuyen trang trong PHP
            header("Location: list_user.php");
          } else {
            echo $sql;
          }
        } else {
          echo $name;
          echo $email;
          echo $phone;
          echo $gender;
          echo $city;
        }
      }
    ?>
    <?php  
        //Lay lai thong tin de hien thi
        include 'connect.php';
        $id = $_GET['id'];
        $sql = "SELECT * FROM users WHERE id=$id";
        $result = mysqli_query($connect,$sql);
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $email = $row['email'];
        $birthday = $row['birthday'];
        $phone = $row['phone'];
        $gender = $row['gender'];
        $city = $row['city'];
    ?>
    <!-- Main content -->
    <section class="content">
	     <!-- This is edit user page -->
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit user</h3>
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
                  <label for="exampleInputEmail">Email</label>
                  <input type="text" name="email" class="form-control" id="exampleInputEmail" placeholder="Enter email" value="<?php echo $email;?>">
                  <span class="help-block"><?php echo $errTextEmail;?></span>
                </div>
                <div class="form-group">
                  <label for="exampleInputPhone">Phone</label>
                  <input type="text" name="phone" class="form-control" id="exampleInputPhone" placeholder="Enter phone" value="<?php echo $phone;?>"> 
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Avatar</label>
                  <input type="file" id="exampleInputFile">
                </div>
                <!-- radio -->
                <div class="form-group">
                  <label>
                    <input type="radio" name="gender" class="minimal" ($gender == 'male')?checked:unchecked>Male
                  </label>
                  <label>
                    <input type="radio" name="gender" class="minimal" ($gender == 'female')?checked:unchecked>Female
                  </label>
                  <label>
                    <input type="radio" name="gender" class="minimal" ($gender == 'other')?checked:unchecked>Other
                </div>
                <div class="form-group">
                    <label>City</label>
                    <select name="city" class="form-control select2" style="width: 100%;">
                      <option value="<?php echo $city;?>"><?php echo $city;?></option>
                      <option value="Alaska">Alaska</option>
                      <option value="California">California</option>
                      <option value="Delaware">Delaware</option>
                    </select>
                </div>
                <div class="form-group <?php echo $errClassBirthday;?>">
                  <label>Date:</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="birthday" name="birthday" value="<?php echo $birthday;?>" >
                  </div>
                  <span class="help-block"><?php echo $errTextBirthday;?></span>
                    <!-- /.input group -->
                </div>                     
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="edit">Edit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include 'common/footer.php';?>