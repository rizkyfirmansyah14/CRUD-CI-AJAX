<?php defined('BASEPATH') OR die('No direct script access allowed');

class modelSistem extends CI_Model{


    public function get_user(){
        $data = $this->db->get('masyarakat');
        return $data->result();
    }

    public function lvel()
	{
		$this->db->select('level');
		$query = $this->db->get('masyarakat');
		return $query->result();
	}

    public function count_user(){
        $data = $this->db->get('masyarakat');
        return $data->num_rows();
    }

    public function get_p(){
        $data = $this->db->get('pengaduan');
        return $data->result_array();
    }

    public function get_p2(){
        $data = $this->db->get('pengaduan');
        return $data->result();
    }

    public function count_p(){
        $data = $this->db->get('pengaduan');
        return $data->num_rows();
    }

    public function cek_login($table, $where){
        return $this->db->get_where($table, $where);
    }

    // export to exel

    public function getAll()
     {
          $this->db->select('*');
          $this->db->from('masyarakat');
          return $this->db->get();
     }

     public function getAll2()
     {
          $this->db->select('*');
          $this->db->from('pengaduan');
          return $this->db->get();
     }

 
     public function delete($id){
        $where = array('id_p' => $id);
        $this->db->where($where);
        $this->db->delete('pengaduan');
        header("Location:".base_url()."sistem/laporan");
    }

    function edit_data($where,$table){		
        return $this->db->get_where($table,$where);
    }

    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
    }	
    

    // ajaxx

    function ambildata($table){
        return $this->db->get($table);
    }

    function tambahdata($data, $table){
        $this->db->insert($table, $data);
    }

    // ajax datables

    public function getdatauser()
    {
        $this->db->select('*');
        $this->db->from('masyarakat');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function insertuser($data)
    {
        return $this->db->insert('pengaduan', $data);
    }

    function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
    }
    
    // function edit
	public function getIdBarang($id_barang)
	{
		$this->db->where("id_P", $id_barang);
		$query = $this->db->get('pengaduan');
		return $query->result();
	}

	public function updateBarang($id_barang, $data)
	{
		$this->db->where("id_p", $id_barang);
		$this->db->update("pengaduan", $data);
	}

     }

    

