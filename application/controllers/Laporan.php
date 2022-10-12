<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->Model('Model');
        $this->load->library('pdf');
    }

	public function index()
	{
		$pdf = new FPDF('1', 'mm', 'A5');

        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', '16');
        $pdf->Cell(190, 7, 'LAPORAN DATA PELAJAR NIOMIC', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', '12');
        $pdf->Cell(190, 7, 'TAHUN 2019', 0, 1, 'C');
        $pdf->Output();
	}

    public function cetak(){

    }
}
