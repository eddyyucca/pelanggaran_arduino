<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['pageTitle'] = 'Pelanggaran Lalu Lintas';
		$data['pesanPertama'] = 'Hello from ';
		$data['pesanKedua'] = 'Hello';
		$data['pesanKetiga'] = 'Data ini dari Controller Welcome';

		// memanggil model alumni
		$this->load->model('m_pelanggaran');

		// Pengambil data alumni dari fungsi getAlumni pada model_alumni
		$data['alumni'] = $this->m_pelanggaran->getPelanggaran();

		$this->load->view('welcome_message', $data);
	}
}
