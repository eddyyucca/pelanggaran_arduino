<?php  
	class M_pdf extends CI_Model
	
	{
		function get_all_pelanggaranpdf($dari,$sampai){
			// $this->db->where('tanggal', $dari);
			// $this->db->where('tanggal', $sampai);

			$this->db->select('*');
			$this->db->from('tb_pelanggaran');
			$this->db->where('tgl>=', $dari);
			$this->db->where('tgl<=', $sampai);
			$data = $this->db->get();
			
			
				return $data->result();
		}
	}

?>