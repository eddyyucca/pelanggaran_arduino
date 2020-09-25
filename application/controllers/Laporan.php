<?php 
	class Laporan extends CI_Controller
	{
		
		
		function __construct()
		{
			parent::__construct();
			$this->load->library('mypdf');
			$this->load->model('m_pdf');
			$this->load->model('m_pelanggaran');

			// $this->mypdf->generate('laporan/pelanggaranpdf');
		}

		function index(){
			$dari = $this->input->post('Dari');
			$sampai = $this->input->post('Sampai');
			
			$x['data']=$this->m_pdf->get_all_pelanggaranpdf($dari,$sampai);
			$this->load->view('laporan/view_laporan',$x);
		}
	}
?>