<?php 

class modelSistem extends CI_Model{

    public function simpan_db(){

        // $config['upload_path'] = './asset/';
        // $config['allowed_types'] = 'jpg|png|gif';
        // $config['max_Size'] = '2048000';
        // $config['file_name'] = url_title($this->input->post('gambar'));
        // $filename = $this->upload->file_name;
        // $this->upload->initalize($config);
        // $this->upload->do_upload('gambar');
        // $data = $this->upload->data();


        $data = array(
            'nik' => "",
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'telp' => $this->input->post('telp'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            // 'status' => $this->input->post('status'),
            // 'image' => $data['file_name'],
        );

        $this->db->insert('masyarakat', $data);
        // echo "data berhasil di simpan"
        header("Location:".base_url().'sistem/index');
    }

    public function get_user(){
        $data = $this->db->get('masyarakat');
        return $data->result();
    }

    public function count_user(){
        $data = $this->db->get('masyarakat');
        return $data->num_rows();
    }

    public function cek_login($table, $where){
        return $this->db->get_where($table, $where);
    }

    // amdin

    public function get_admin(){
        $data = $this->db->get('petugas');
        return $data->result();
    }

    public function count_admin(){
        $data = $this->db->get('petugas');
        return $data->num_rows();
    }

    public function cek_masuk($table, $where){
        return $this->db->get_where($table, $where);
    }
}