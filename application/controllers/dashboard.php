<?php

class Dashboard extends CI_Controller{
    public function __construct()
    {
        parent ::__construct();
        if($this->session->userdata('role_id')!='1'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Anda Belum Login!!!!!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
              redirect('auth/login');
        }
    }
    
    public function tambah_keranjang($id)
    {
        $barang =$this->model_barang->find($id);
        $data = array(
            'id' => $barang->id_brg,
            'qty'=>1,
            'price'=>$barang->harga,
            'name'=>$barang->nama_brg
        );
        $this->cart->insert($data);
        redirect('welcome');
    }
    public function detail_keranjang()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('keranjang');
        $this->load->view('template/footer');
    }
    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('welcome');
    }
    public function pembayaran()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('template/footer');
    }
    public function proses_pesanan()
    {
        $is_processed = $this->model_invoice->index();
        if($is_processed){
        $this->cart->destroy();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('proses_pesanan');
        $this->load->view('template/footer');
        }else{
            echo"maaf Pesanan Anda Gagal Diproses!";
        }
    }
    public function detail($id_brg)
    {
        $data['barang']= $this->model_barang->detail_brg($id_brg);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('detail_barang',$data);
        $this->load->view('template/footer');
    }
}