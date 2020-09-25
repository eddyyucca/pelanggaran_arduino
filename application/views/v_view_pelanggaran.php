<html>
<head>
	<title>PLL | Pelanggaran</title>
	<meta charset="UTF-8">
	<!-- <link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/lll.jpg' ?>"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/custom.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/icomoon.css') ?> ">


</head>
<body style="background-color: #333333;">
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary" >
	  <span class="navbar-text">
		<h1 style="color: white;">Pelanggaran Lalu Lintas</h1>
		 </span>&nbsp;&nbsp;
		 <a class="btn btn-warning pull-right" href="<?php echo base_url().'administrator/logout'?>"><i style="text-align: center;"></i> Sign out 
		 	<svg class="bi bi-box-arrow-right" width="1em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" d="M11.646 11.354a.5.5 0 0 1 0-.708L14.293 8l-2.647-2.646a.5.5 0 0 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z"/>
				<path fill-rule="evenodd" d="M4.5 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z"/>
				<path fill-rule="evenodd" d="M2 13.5A1.5 1.5 0 0 1 .5 12V4A1.5 1.5 0 0 1 2 2.5h7A1.5 1.5 0 0 1 10.5 4v1.5a.5.5 0 0 1-1 0V4a.5.5 0 0 0-.5-.5H2a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5v-1.5a.5.5 0 0 1 1 0V12A1.5 1.5 0 0 1 9 13.5H2z"/>
			</svg>
		 </a>
	</nav>
	<br>
	<div class="content-wrapper">
	<div class="container con-custom">     
		<h3>Data Pelanggaran</h3>
	
		<br/><br/>
		
		<div class="box">
			<table id="example" class="table table-striped table-bordered" style="width:100%">
			    <thead class="thead-custom">
                <tr>
                <td>Tanggal</td>
                <td><?= $data->tanggal ?></td>
                </tr>

                <tr>
                <td>Waktu</td>
                <td><?= $data->waktu ?></td>
                </tr>

                <tr>
                <td>Foto</td>
                <td><?php echo '<img width="300" height="300" src="data:image/jpeg/jpg/png;base64,'.base64_encode( $data->foto).'" />'?></td>	              
	              </td>
                </tr>
			    </thead>
			</table>
            </div>
	        <a href="<?= base_url('pelanggaran/printsatuview/' . $data->pelanggaran_id) ?>" class="btn btn-primary">Print</a>
			</div><!-- box -->
		</div><!-- container -->
		</div><!-- content -->
		<br/>

		<!-- footer -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="margin-bottom: 20px;">
			<span class="navbar-text">
				<center>
					<small>Copyright <?php echo '&copy; 2020' ?> <a href="http://localhost/pelanggaran">Sistem Informasi Pelanggaran Lalu Lintas</a>. All Right Reserved</small>
				</center>
			</span>
		</nav>

	</body>
	<script src="<?php echo base_url('assets/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/jquery.min.js') ?>"></script>
	
</html>


