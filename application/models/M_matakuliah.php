<?php

class M_matakuliah extends CI_Model {
    
    public $_tabel = "matakuliah";

    public $kd_matakuliah;
    public $nama_matakuliah;
    public $sks;
    
    public function rules() {
        return [
            ['field' => 'kd_matakuliah',
            'label' => 'Npm',
            'rules' => 'required'],

            ['field' => 'nama_matakuliah',
            'label' => 'Nama',
            'rules' => 'required'],


            ['field' => 'sks',
            'label' => 'Sks',
            'rules' => 'required']
        ];
    }

    public function getAll(){
        return $this->db->get($this->_tabel)->result();
    }

    public function getId($id){
        return $this->db->get_where($this->_tabel, ["kd_matakuliah" => $id])->row();
    }

    public function save($data,$table){
        // $post = $this->input->post();
        // $this->kd_matakuliah = $post["kd_matakuliah"];
        // $this->nama_matakuliah = $post["nama_matakuliah"];
        // $this->sks = $post["sks"];
        // // $this->jurusan = $post["jurusan"];
        // // $this->kelas = $post["kelas"];
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
         $this->db->delete($this->_tabel);
    }
}
?>