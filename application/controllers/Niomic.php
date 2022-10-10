<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Niomic extends CI_Controller
{

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

    public  function edit_data($nis="")
    {
        $data['pelajar'] = $this->db->get_where('tbl_pelajar', array('nis'=>$nis),1)->row();

        $this->load->view('top');
        $this->load->view('edit_data', $data);
        $this->load->view('bottom');
    }

    public  function tambah_data()
    {
        $this->load->view('top');
        $this->load->view('tambah_data');
        $this->load->view('bottom');
    }

    public function add()
    {
        $data = array(
            'nis' => $this->input->post('nis'),
            'nama' => $this->input->post('nama'),
            'kelas' => $this->input->post('kelas'),
            'jurusan' => $this->input->post('jurusan'),
            'email' => $this->input->post('email'),
        );

        if($this->db->insert('tbl_pelajar', $data)){
            $this->session->set_flashdata("success", "Berhasil menambahkan data pelajar");
            echo "<script>window.location.href='".base_url()."Niomic"."';</script>";
        }else{
            $this->session->set_flashdata("error", "Gagal menambahkan data pelajar");
            echo "<script>window.location.href='".base_url()."Niomic"."';</script>";
        }
    }

    public function update()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'kelas' => $this->input->post('kelas'),
            'jurusan' => $this->input->post('jurusan'),
            'email' => $this->input->post('email'),
        );


        $this->db->where('nis',$this->input->post('nis'));

        if($this->db->update('tbl_pelajar', $data)){
            $this->session->set_flashdata("success", "Berhasil merubah data pelajar");
            echo "<script>window.location.href='".base_url()."Niomic"."';</script>";
        }else{
            $this->session->set_flashdata("error", "Gagal merubah data pelajar");
            echo "<script>window.location.href='".base_url()."Niomic"."';</script>";
        }
    }
    
    public function delete($nis) {
        if($this->db->delete('tbl_pelajar', array('nis'=>$nis))){
            $this->session->set_flashdata("success", "Berhasil menghapus data pelajar");
            echo "<script>window.location.href='".base_url()."Niomic"."';</script>";
        }
    }
}
