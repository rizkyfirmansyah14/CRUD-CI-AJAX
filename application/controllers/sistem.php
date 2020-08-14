<?php 

class sistem extends CI_Controller
{
    public function __construct(){
        parent ::__construct();
        $this->load->model('modelSistem');
    }

    public function base(){
        $data['title'] = "base";

        $data['user'] = $this->modelsistem->get_user();
        $data['c_user'] = $this->modelsistem->count_user();
    }

    public function login(){
        $judul['title'] = "Login";
        $this->load->view('home', $judul);
    }

    public function index(){
        $this->load->view('index');
    }

    public function masuk(){
        $this->load->view('home');
    }

    public function daftar(){
        $this->load->view('register');
    }

    public function coba(){
        $this->load->view('dashboard');
    }

    public function simpan_data(){
        $this->modelSistem->simpan_db();
    }

    // load data
    public function datauser(){
        $data['title'] = "Auction";
        $data['user'] = $this->modelSistem->get_user();
        $data['c_user'] = $this->modelSistem->count_user();

        $this->load->view('dashboard', $data);
    }

    //login_user
    public function loginUser(){
        $usernames = $this->input->post('username');
        $passwords = $this->input->post('password');
        $where = array(
            'username' => $usernames,
            'password' => md5($passwords)
        );
        $cek = $this->modelSistem->cek_login("masyarakat", $where)->num_rows();

        if ($cek > 0) {
            $data_session = array(
                'usernama' => $usernames,
                'status' => 'login'
            );

            $this->session->set_userdata($data_session);

            if ($this->session->userdata('status') == 'login') {
                header("Location:".base_url().'sistem/datauser');
            }else {
                echo "username salah";
            }
        }else {
            echo "data tidak temukan";
        }
    }

       }