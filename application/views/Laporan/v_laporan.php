<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Data Pelanggaran</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/custom.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/icomoon.css') ?> ">
	
</head>
<body>
<?php
	$Dari=$_POST['Dari'];
	$Sampai=$_POST['Sampai'];
?>
		<CENTER><h3 style="text-align: center"><b>LAPORAN HASIL PELANGGARAN</b></h3>
			<p> 
				Dari Tanggal <?php echo "$Dari"; ?> 
				Sampai <?php echo "$Sampai"; ?>
			</p>
		</CENTER>
	
	<div class="container con-custom">
	<table class="table-bordered" width="100%">
		<thead>
			<tr>
				<th style="text-align: center">No</th>
				<th style="text-align: center">Tanggal</th>
				<th style="text-align: center">Waktu</th>
				<th colspan="4" style="text-align: center">Foto</th>	
			</tr>
		</thead>
		<tbody>
			 <?php 
				$no=0;
				$data=$this->db->query(
					"SELECT * from tb_pelanggaran where tanggal BETWEEN '$Dari' AND '$Sampai'");
					foreach ($data->result_array() as $i) :
		                $no++;
		                
		                $waktu=$i['waktu'];
				        $foto=$i['foto'];
				        $del=$i['tanggal'];
				        $tanggal=$i['tgl'];

				?>
			<tr>
				<td style="text-align: center;vertical-align: middle;"> <?php echo $no; ?></td>
				<td style="text-align: center;vertical-align: middle;"> <?php echo $tanggal; ?></td>
				<td style="text-align: center;vertical-align: middle;"> <?php echo $waktu; ?></td>
				<td colspan="4" style="text-align: center;vertical-align: middle;"> <?php echo '<img width="70" height="70" src="data:image/jpeg/jpg/png;base64,'.base64_encode( $i['foto'] ).'"/>'?></td>
			</tr>
			<?php endforeach;?>
		</tbody>	
	</table>
	</div>
	 <script>window.print();</script>
  
	
	
</body>
<script src="<?php echo base_url('assets/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap.min.js') ?>"></script>
</html>