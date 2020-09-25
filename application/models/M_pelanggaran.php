<?php
	class M_pelanggaran extends CI_Model {

		public function get_pelanggaran()
		{
			$hsl=$this->db->query("SELECT *from tb_pelanggaran order by pelanggaran_id desc");
			return $hsl;
		}

		
		function hapus_pelanggaran($kode){
			$hsl=$this->db->query("DELETE from tb_pelanggaran where pelanggaran_id='$kode'");
			return $hsl;
		}

		public function get_view_pelanggaran($kode){
		$this->db->where('pelanggaran_id',$kode);
		return	$this->db->get('tb_pelanggaran')->row();
		}

	}
?>