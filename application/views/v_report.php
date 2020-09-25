<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PLL | Report</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/custom.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/icomoon.css') ?> ">
	
</head>
<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="margin-bottom: 20px;">
			<span class="navbar-text">
				<h1 style="color: white;">Report</h1>
			</span>
		</nav>
	<br>
	<div class="content-wrapper">
	<div class="container con-custom">   

<!-- /.box-header -->
           
          <div class="box">
            <div class="box-header">
            	
              <h3 class="col-xs-4 box-title">Tampilkan Report Data Pelanggaran</h3>
            </div>
            
            <!-- /.box-header -->
            <div class="box-body">
           <form method='post' class='form-horizontal' action="laporan">
          <div class="box-body">

            <div class="form-group">
            	
              <label for="nama_pelanggan" class="col-sm-2 control-label">Dari</label>
              <div class="col-sm-4">
                <input type="date" class="form-control"  name="Dari">
              </div>
            </div>
             <div class="form-group">
             	
              <label for="alamat_pelanggan" class="col-sm-2 control-label">Sampai</label>
              <div class="col-sm-4">
                <input type="date" class="form-control" id="alamat_pelanggan" name="Sampai">
              </div>
            </div>
 
            <div class="box-footer">
            	<div class="form-group">
                <div class="col-sm-2">
              		<input type="submit" name="submit"  value="Lihat" class="btn btn-info" >
                   <!-- <a class="btn btn-success btn-flat" href="<?php echo base_url('report/lihat_report/');?>"><span class="fa fa-plus-square"></span> Lihat </a> -->
                   <!-- <a class="btn btn-success btn-flat" href="<?php echo base_url('report/lihat_report/');?>">Lihat</a> -->
                   <!-- <a data-toogle="tooltip" title="hapus" class="btn btn-success btn-flat" href="<?php echo base_url('report/lihat_report/');?>">Lihat</a> -->
            	</div>
        	</div>
          </form>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
  </div>

	
</body>
<script src="<?php echo base_url('assets/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap.min.js') ?>"></script>
</html>