<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Niomic extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->Model('Model');
    }

	public function index()
	{
        $data['judul'] = 'Selamat Datang di Niomic';
        $data['isi'] = 'Isi Pesan bla bla bla';
        $data['pelajar'] = $this->Model->get_pelajar();
        $this->load->view('top');
		$this->load->view('tables', $data);
        $this->load->view('bottom');
	}

    public  function tambah_data() {
        $this->load->view('top');
		$this->load->view('tambah_data');
        $this->load->view('bottom');
    }
}
