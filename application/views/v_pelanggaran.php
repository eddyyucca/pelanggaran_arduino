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
		<a class="btn btn-success " href="<?php echo base_url().'Report'?>"><i style="text-align: center;"></i>
			<svg class="bi bi-file-earmark-text" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path d="M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z"/>
				  <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z"/>
				  <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
			</svg>
		Report </a>
		<br/><br/>
		<div class="box">
			<table id="example" class="table table-striped table-bordered" style="width:100%">
			    <thead class="thead-custom">
			      <tr>
			        <th>No</th>
			        <th>Tanggal</th>
			        <th>Waktu</th>
			        <th>Foto</th>
			        <th>Aksi</th>
			      </tr>
			    </thead>
			    <?php 
					$no=0;
					foreach ($data->result_array() as $i) :
		                $no++;
		                
		                $waktu=$i['waktu'];
	                    $foto=$i['foto']; 
	                    $del=$i['tanggal'];             
	                    $tanggal=$i['tgl'];              
				?>
				<tbody class="tbody-custom">
			      <td><?php echo $no;?></td>
			      <td><?php echo $tanggal;?></td>
	              <td><?php echo $waktu;?></td>	             
	              <td><?php echo '<img width="150" height="150" src="data:image/jpeg/jpg/png;base64,'.base64_encode( $foto).'" />'?></td>	              
	              <td align="center"> 
	  				<a data-toogle="tooltip" title="hapus" class="mb-1 btn btn-danger" href="<?php echo base_url('pelanggaran/pelanggaran_hapus/'.$i['pelanggaran_id']);?>" onclick = "return confirm('Yakin akan hapus data no <?php echo $no; ?> ?');">
	  					<svg class="bi bi-trash-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
						</svg>

	  					<span>hapus</span></a>
	  				<a data-toogle="tooltip" title="hapus" class="mb-1 btn btn-primary" href="<?php echo base_url('pelanggaran/pelanggaran_view/'.$i['pelanggaran_id']);?>">
	  					

	  					<span>View</span></a>
	              </td>
	              </tbody>
	            </tr> 
	            <?php endforeach; ?>
	        	</tbody>
			  </table>
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


