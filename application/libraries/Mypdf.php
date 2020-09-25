<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('assets/dompdf/autoload.inc.php');
use Dompdf\Dompdf;
// use Dompdf\Options;


Class Mypdf 
{
	protected $ci;

	public function __construct()
	{
		$this->ci =& get_instance();
	}

	public function generate($view, $data = array(), $filename = 'Data_Pelanggaran', $paper ='A4', $orientation = 'potrait')
	{
		$dompdf = new Dompdf();
		$dompdf->set_option('isRemoteEnabled', TRUE);
		$html = $this->ci->load->view($view, $data, TRUE);
		$dompdf->loadHtml($html);
		$dompdf->setPaper($paper. $orientation);
		$dompdf->render();
		ob_clean();
		$dompdf->stream($filename . ".pdf", array("Attachment" => false));
		// $this->stream($this->$filename, array("Attachment" => false));
}

}
?>
