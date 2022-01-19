<?php
class Register extends CI_Controller{
        public function index()
        {
            $this->form_validation->set_rules('nama','Nama','required',['required' => 'nama Wajib diisi!']);
            $this->form_validation->set_rules('username','Username','required',['required' => 'username Wajib diisi!']);
            $this->form_validation->set_rules('password_1','Password','required|matches[password_2]',['required' => 'Password Wajib diisi!','matches' =>'password tidak cocok']);
            $this->form_validation->set_rules('password_2','Password','required|matches[password_1]');
            if($this->form_validation->run() == FALSE){
            $this->load->view('template/header');
            $this->load->view('register');
            $this->load->view('template/footer');
        }else{
            $data = array(
                'id' => '',
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password_1'),
                'role_id' => 2,
            );
            $this->db->insert('tb_user',$data);
            redirect('auth/login');
        }
    }
}