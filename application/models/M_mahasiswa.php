<?php

class M_mahasiswa extends CI_Model {
    
    public $_table = "mahasiswa";

    public $npm;
    public $nama;
    public $jenjang;
    public $jurusan;
    public $kelas;
    
    public function rules() {
        return [
            ['field' => 'npm',
            'label' => 'Npm',
            'rules' => 'required'],

            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'jenjang',
            'label' => 'Jenjang',
            'rules' => 'required'],

            ['field' => 'jurusan',
            'label' => 'Jurusan',
            'rules' => 'required'],

            ['field' => 'kelas',
            'label' => 'Kelas',
            'rules' => 'required']
        ];
    }

    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    public function getId($id){
        return $this->db->get_where($this->_table, ["npm" => $id])->row();
    }

    public function save($data,$table){
        $post = $this->input->post();
        // $this->npm = $post["npm"];
        // $this->nama = $post["nama"];
        // $this->jenjang = $post["jenjang"];
        // $this->jurusan = $post["jurusan"];
        // $this->kelas = $post["kelas"];
        // $this->db->insert($this->table, $this);
        $this->db->insert($table,$data);
    }

    public function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }
    public function update($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
        // $post = $this->input->post();
        // $this->npm = $post["npm"];
        // $this->nama = $post["nama"];
        // $this->jenjang = $post["jenjang"];
        // $this->jurusan = $post["jurusan"];
        // $this->kelas = $post["kelas"];
        
        // $this->db->update($this->_table, $this, array('npm' => $post['npm']));
    }

    public function hapus($where){
        $this->db->where($where);
         $this->db->delete($this->_table);
    }
}
?>