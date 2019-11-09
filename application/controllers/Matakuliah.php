<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {

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
		$this->load->model("M_matakuliah");
		$this->load->library('form_validation');
	}

	public function index(){
		$data["mata_kuliah"] = $this->M_matakuliah->getAll();
		$this->load->view("template/header");
		$this->load->view("template/sidebar");
		$this->load->view("matakuliah", $data);
		// $this->load->view("template/delete_mahasiswa");
		$this->load->view("template/footer");
	}

	public function add(){
        // $matakuliah = $this->M_matakuliah;
        $kd_matakuliah = $this->input->post('kd_matakuliah');
        $nama_matakuliah = $this->input->post('nama_matakuliah');
        $sks = $this->input->post('sks');
        $data = array(
            'kd_matakuliah' => $kd_matakuliah,
            'nama_matakuliah' => $nama_matakuliah,
            'sks' => $sks,
        );
			$this->M_matakuliah->save($data,'matakuliah');
			$this->session->set_flashdata('message','<div class="alert alert-success">
			Data Matakuliah Berhasil Di Tambahkan
		  </div>');
            redirect('Matakuliah/index');
		// $this->load->view("template/header");
		// $this->load->view("template/sidebar");
		// // $this->load->view("template/form_add_matakuliah");
		// $this->load->view("template/footer");
		
	}

	public function edit($id){
		// if(!isset($id)) redirect('matakuliah');
		$where = array('kd_matakuliah' => $id);
		$data['matakuliah'] = $this->M_matakuliah->edit_data($where,'matakuliah')->result();

		// $mata_kuliah = $this->M_matakuliah;
		// $validasi = $this->form_validation;
		// $validasi->set_rules($mahasiswa->rules());
		// if ($validasi->run()) {
		// 	$mahasiswa->update();
		// 	$this->session->set_flashdata('success', 'Berhasil diedit');
		// 	// redirect('Mahasiswa/index');
		// }
		// $data["mahasiswa"] = $mahasiswa->getId($id);
		// if(!$data["mahasiswa"]) show_404();
		$this->load->view("template/header");
		$this->load->view("template/sidebar");
		$this->load->view("template/form_edit_matakuliah", $data);
		// $this->load->view("template/delete_mahasiswa");
		$this->load->view("template/footer");
	}

	public function delete($id){
			$where = array('kd_matakuliah' => $id);
		$this->M_matakuliah->hapus($where, 'matakuliah');
		$this->session->set_flashdata('message','<div class="alert alert-danger">
			Data Matakuliah Berhasil Di Hapus
		  </div>');
			redirect('Matakuliah/');
		
	}

	public function update(){
		$post = $this->input->post();
        $this->kd_matakuliah = $post["kd_matakuliah"];
        $this->nama_matakuliah = $post["nama_matakuliah"];
        $this->sks = $post["sks"];
		$data = array(
			'nama_matakuliah'  => $post["nama_matakuliah"],
			'sks'  => $post["sks"],
		);
		$where = array(
			'kd_matakuliah' => $post["kd_matakuliah"]
		);
		$this->M_matakuliah->update($where,$data, 'matakuliah');
		$this->session->set_flashdata('message','<div class="alert alert-info">
			Data Matakuliah Berhasil Di Update
		  </div>');
		redirect('Matakuliah/index');
	}
}
