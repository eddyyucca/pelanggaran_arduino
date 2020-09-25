<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PLL | Log in</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport'?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/bower_components/bootstrap/dist/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/bower_components/font-awesome/css/font-awesome.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/AdminLTE.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/iCheck/square/blue.css' ?>">
</head>

<body class="hold-transition login-page" style="background-color: #546784;">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="margin-bottom: 20px;">
      <span class="navbar-text">
        <h1 style="color: white;">Pelanggaran Lalu Lintas</h1>
         </span>
    </nav>
<div class="container">
    <div class="login-box">
   <div class="col-4">
   <div class="row">
   
        <!-- /.login-logo -->
        <div class="login-box-body">
            <CENTER><strong>SILAHKAN LOGIN</strong></CENTER>
            <form action="<?php echo base_url() . 'administrator/auth' ?>" method="post">
                <p>
                    <?php echo $this->session->flashdata('msg'); ?>
                </p>
                <div class="form-group has-feedback">
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="col-xs-4"></div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox">Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-4">
                    </div>
                </div>
                    <div class="text-center">
                        <button type="submit"  class="btn btn-primary btn-block btn-flat">Sign In </button>
                    </div>
            </form>

            <hr />
            <p>
                <center>Copyright <?php echo '&copy; 2020' ?> create by <strong>Fathur Rahman </strong><br />All Right Reserved</center>
            </p>
        </div>
    </div>
    </div>
    </div>
 </div>
    <!-- ./wrapper -->
    <script src="<?php echo base_url() . 'assets/bower_components/bootstrap/dist/js/bootstrap.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/bootstrap/js/bootstrap.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/iCheck/icheck.min.js' ?>"></script>
    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' //optional
            });
        });
    </script>
</body>

</html>