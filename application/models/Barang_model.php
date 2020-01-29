<?php
class Barang_model extends CI_Model
{

  public function getAllBarang()
  {
    return $this->db->get('barang')->result_array();
  }

  public function getBarangId($id)
  {
    return $this->db->get_where('barang', ['id' => $id])->row_array();
  }

  public function tambahBarang()
  {
    #Code here
    $data = [
      'nama_barang' => $this->input->post('namabarang'),
      'harga' => $this->input->post('harga')
    ];
    $this->db->insert('barang', $data);
  }

  public function ubahBarang()
  {
    // Code here
    $data = [
      'nama_barang' => $this->input->post('namabarang'),
      'harga' => $this->input->post('harga')
    ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('barang', $data);
  }

  public function hapusBarang($id)
  {
    // Code Here
    $this->db->delete('barang', ['id' => $id]);
  }
}
