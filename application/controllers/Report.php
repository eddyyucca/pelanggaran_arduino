<?php 
	class Report extends CI_Controller
	{
		
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_pelanggaran');
		}

		function index(){

			$x['data']=$this->m_pelanggaran->get_pelanggaran();
			$this->load->view('v_report',$x);
		}

		function lihat_report(){
			$x['data']=$this->m_pelanggaran->get_pelanggaran();
			$this->load->view('laporanpdf',$x);
			// redirect('report');
		}
	}
?>