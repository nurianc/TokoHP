<?php
class model_kategori extends CI_model{
public function data_HandPhone()
{
   return $this->db->get_where("tb_barang",array('kategori'=>'HandPhone'));
}
public function data_aksesoris()
{
   return $this->db->get_where("tb_barang",array('kategori'=>'aksesoris'));
}
}