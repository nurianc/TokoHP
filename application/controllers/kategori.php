<?php
class Kategori extends CI_Controller{
    public function HandPhone()
    {
        $data['HandPhone'] = $this->model_kategori->data_HandPhone()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('HandPhone',$data);
        $this->load->view('template/footer');
    }
    public function aksesoris()
    {
        $data['aksesoris'] = $this->model_kategori->data_aksesoris()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('aksesoris',$data);
        $this->load->view('template/footer');
    }
}