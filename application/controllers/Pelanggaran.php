<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggaran extends CI_Controller {

		function __construct()
		{
			parent::__construct();
			// $this->load->library('my_image_lib');
			$this->load->model('m_pelanggaran');
		}

		function index(){
			$x['data']=$this->m_pelanggaran->get_pelanggaran();
			$this->load->view('v_pelanggaran',$x);
		}

		function pelanggaran_hapus($kode){
			// $kode=$this->input->post('waktu');
			$this->m_pelanggaran->hapus_pelanggaran($kode);
			echo $this->session->set_flashdata('msg','success-hapus');
			redirect('pelanggaran');
		}
		function pelanggaran_view($kode){
			// $kode=$this->input->post('waktu');
			$x['data']=$this->m_pelanggaran->get_view_pelanggaran($kode);
			$this->load->view('v_view_pelanggaran',$x);
		}
		function printsatuview($kode){
			// $kode=$this->input->post('waktu');
			$x['data']=$this->m_pelanggaran->get_view_pelanggaran($kode);
			$this->load->view('print_pelanggaran_satu',$x);
		}

		
}
