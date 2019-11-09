<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_mahasiswa");
		$this->load->library('form_validation');
	}

	public function index(){
		$data["mahasiswa"] = $this->M_mahasiswa->getAll();
		$this->load->view("template/header");
		$this->load->view("template/sidebar");
		$this->load->view("mahasiswa", $data);
		// $this->load->view("template/delete_mahasiswa");
		$this->load->view("template/footer");
	}


	public function form_add(){
		$this->load->view("template/header");
		$this->load->view("template/sidebar");
		$this->load->view("template/form_add_mahasiswa");
		$this->load->view("template/footer");
	}

	public function add(){
		$npm = $this->input->post('npm');
        $nama = $this->input->post('nama');
		$jenjang = $this->input->post('jenjang');
		$jurusan = $this->input->post('jurusan');
		$kelas = $this->input->post('kelas');
        $data = array(
            'npm' => $npm,
            'nama' => $nama,
			'jenjang' => $jenjang,
			'jurusan' => $jurusan,
			'kelas' => $kelas,
        );
			$this->M_mahasiswa->save($data,'mahasiswa');
			$this->session->set_flashdata('message','<div class="alert alert-success">
			Data Mahasiswa Berhasil Di Tambahkan
		  </div>');
            redirect('Mahasiswa/index');
	}

	public function edit($id){
		// if(!isset($id)) redirect('mahasiswa');
		$where = array('npm' => $id);
		$data['mahasiswa'] = $this->M_mahasiswa->edit_data($where,'mahasiswa')->result();
		$this->load->view("template/header");
		$this->load->view("template/sidebar");
		$this->load->view("template/form_edit_mahasiswa", $data);
		// $this->load->view("template/delete_mahasiswa");
		$this->load->view("template/footer");
	}

	public function delete($id){
			$where = array('npm' => $id);
		$this->M_mahasiswa->hapus($where, 'mahasiswa');
		$this->session->set_flashdata('message','<div class="alert alert-danger">
			Data Mahasiswa Berhasil Di Hapus
		  </div>');
			redirect('Mahasiswa/index');
		
	}

	public function update(){
		$post = $this->input->post();
        $this->npm = $post["npm"];
        $this->nama = $post["nama"];
        $this->jenjang = $post["jenjang"];
        $this->jurusan = $post["jurusan"];
		$this->kelas = $post["kelas"];
		$data = array(
			'nama'  => $post["nama"],
			'jenjang'  => $post["jenjang"],
			'jurusan'  => $post["jurusan"],
			'kelas'  => $post["kelas"],
		);
		$where = array(
			'npm' => $post["npm"]
		);
		$this->M_mahasiswa->update($where,$data, 'mahasiswa');
		$this->session->set_flashdata('message','<div class="alert alert-info">
			Data Mahasiswa Berhasil Di Update
		  </div>');
		redirect('mahasiswa/index');
	}
}
