<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="../../index2.php" class="h1"><b>Admin</b>LTE</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Register a new membership</p>

        <?php if (isset($_GET['error'])) { ?>
          <div class="alert alert-danger">
            <?php echo $_GET['error']; ?>
          </div>
        <?php } ?>

        <!-- Display success message -->
        <?php if (isset($_GET['success'])) { ?>
          <div class="alert alert-success"><?php echo $_GET['success']; ?>
        </div>
            <?php } ?>

            <form action="register-index.php" method="post">
              <div class="input-group mb-3">
                <div class="form-group col-md-4">
                  <?php if (isset($_GET['first_name'])) { ?>
                    <input type="text" name="first_name" pattern="[A-Za-z ]+" title="Only alphabets are allowed" class="form-control" placeholder="First Name" value="<?php echo $_GET['first_name']; ?>">
                  <?php } else { ?>
                    <input type="text" name="first_name" pattern="[A-Za-z ]+" title="Only alphabets are allowed" class="form-control" placeholder="First Name">
                  <?php } ?>
                </div>
                <div class="form-group col-md-4">
                  <?php if (isset($_GET['middle_name'])) { ?>
                    <input type="text" name="middle_name" pattern="[A-Za-z ]+" title="Only alphabets are allowed" class="form-control" placeholder="Middle Name" value="<?php echo $_GET['middle_name']; ?>">
                  <?php } else { ?>
                    <input type="text" name="middle_name" pattern="[A-Za-z ]+" title="Only alphabets are allowed" class="form-control" placeholder="Middle Name">
                  <?php } ?>
                </div>
                <div class="form-group col-md-4">
                  <?php if (isset($_GET['last_name'])) { ?>
                    <input type="text" name="last_name" pattern="[A-Za-z ]+" title="Only alphabets are allowed" class="form-control" placeholder="Last Name" value="<?php echo $_GET['last_name']; ?>">
                  <?php } else { ?>
                    <input type="text" name="last_name" pattern="[A-Za-z ]+" title="Only alphabets are allowed" class="form-control" placeholder="Last Name">
                  <?php } ?>
                </div>
              </div>
              <div class="input-group mb-3">
                <?php if (isset($_GET['uname'])) { ?>
                  <input type="text" name='uname' class="form-control" placeholder="Username" value="<?php echo $_GET['uname']; ?>">
                <?php } else { ?>
                  <input type="text" name='uname' class="form-control" placeholder="Username">
                <?php } ?>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
              <?php if (isset($_GET['email'])) { ?>
              <input type="email" name='email' pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter a valid email address" class="form-control" placeholder="Email" value="<?php echo $_GET['email']; ?>">
            <?php } else { ?>
              <input type="email" name='email' pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter a valid email address" class="form-control" placeholder="Email">
            <?php } ?>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
              <?php if (isset($_GET['password'])) { ?>
              <input type="password" name='password' class="form-control" placeholder="Password" value="<?php echo $_GET['password']; ?>">
            <?php } else { ?>
              <input type="password" name='password' class="form-control" placeholder="Password">
            <?php } ?>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
              <?php if (isset($_GET['cpassword'])) { ?>
              <input type="password" name='cpassword' class="form-control" placeholder="Retype Password" value="<?php echo $_GET['cpassword']; ?>">
            <?php } else { ?>
              <input type="password" name='cpassword' class="form-control" placeholder="Retype Password">
            <?php } ?>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                    <label for="agreeTerms">
                      I agree to the <a href="#">terms</a>
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">Register</button>
                </div>
                <!-- /.col -->
              </div>
            </form>

            <div class="social-auth-links text-center">
              <a href="#" class="btn btn-block btn-primary">
                <i class="fab fa-facebook mr-2"></i>
                Sign up using Facebook
              </a>
              <a href="#" class="btn btn-block btn-danger">
                <i class="fab fa-google-plus mr-2"></i>
                Sign up using Google+
              </a>
            </div>

            <a href="login-v2.php" class="text-center">I already have a membership</a>
            </div>
            <!-- /.form-box -->
          </div><!-- /.card -->
      </div>
      <!-- /.register-box -->

      <!-- jQuery -->
      <script src="../../plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap 4 -->
      <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- AdminLTE App -->
      <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>