<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Barang_model', 'BM');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['judul'] = "Halaman Data Barang";
    $data['barang'] = $this->BM->getAllBarang();
    $this->load->view('templates/header', $data);
    $this->load->view('barang/index', $data);
    $this->load->view('templates/footer');
  }

  public function tambah()
  {

    $data['judul'] = "Tambah Data Barang";
    $this->form_validation->set_rules('namabarang', 'Nama Barang', 'required');
    $this->form_validation->set_rules('harga', 'Harga Barang', 'required');

    if ($this->form_validation->run() == false) {
      # Jika validasi gagal
      $this->load->view('templates/header', $data);
      $this->load->view('barang/tambah');
      $this->load->view('templates/footer');
    } else {
      # jika validasi benar
      $this->BM->tambahBarang();
      redirect('barang');
    }
    // $this->BM->tambahBarang();
    // redirect('Barang');
    // $this->BM->tambahBarang();
    // $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Barang Berhasil ditambahkan!</div>'); //buat pesan akun berhasil dibuat
    // redirect('barang');
  }

  public function ubah($id)
  {
    $data['judul'] = "Ubah Data Barang";
    $data['barang'] = $this->BM->getBarangId($id);
    $this->form_validation->set_rules('namabarang', 'Nama Barang', 'required');
    $this->form_validation->set_rules('harga', 'Harga Barang', 'required');

    if ($this->form_validation->run() == false) {
      # Jika validasi gagal
      $this->load->view('templates/header', $data);
      $this->load->view('barang/ubah', $data);
      $this->load->view('templates/footer');
    } else {
      # jika validasi benar
      $this->BM->ubahBarang();
      redirect('barang');
    }
  }

  public function hapus($id)
  {
    #Code here
    $this->BM->hapusBarang($id);
    redirect('barang');
  }
}
