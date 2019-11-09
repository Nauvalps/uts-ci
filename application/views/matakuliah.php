<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Matakuliah</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Data Matakuliah</a></div>
              <div class="breadcrumb-item">Matakuliah</div>
            </div>
          </div>

          <div class="section-body">
          <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                  <div class="buttons">
                      
                      <a href="#" id="modal-1" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Data </a>
                    </div>
                  </div>
                  <div class="card-body">
                  <?php echo $this->session->flashdata('message');?>
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Kode Matakuliah</th>
                            <th>Nama Matakuliah</th>
                            <th>Sks</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($mata_kuliah as $matkul){
                            ?>
                          <tr>
                            <td><?= $no++?></td>
                            <td><?= $matkul->kd_matakuliah?></td>
                            <td><?= $matkul->nama_matakuliah?></td>
                            <td><?= $matkul->sks?></td>
                            <td>
                                <a href="<?php echo base_url('Matakuliah/edit/'.$matkul->kd_matakuliah)?>" class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Edit</a>
                                <a href="<?= base_url('Matakuliah/delete/'.$matkul->kd_matakuliah)?>" onclick="return confirm('Apakah yakin ingin menghapus data?');" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a>
                                
                            </td>
                          </tr>
                        </tbody>
                            <?php }?>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </section>
        <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Tambah Data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <!-- <div class="card"> -->
                  <form class="needs-validation" autocomplete="off" novalidate="" action="<?php echo base_url().'Matakuliah/add'?>" method="post">
                    <!-- <div class="card-body"> -->
                      <div class="form-group">
                        <label>KODE MATAKULIAH</label>
                        <input type="text" class="form-control" required="" name="kd_matakuliah">
                        <div class="invalid-feedback">
                        KODE MATAKULIAH Wajib Di isi!
                        </div>
                      </div>
                      <div class="form-group">
                        <label>NAMA MATAKULIAH</label>
                        <input type="text" class="form-control" required="" name="nama_matakuliah">
                        <div class="invalid-feedback">
                        Nama Matakuliah Wajib Di isi!
                        </div>
                      </div>
                      <div class="form-group">
                        <label>SKS</label>
                        <input type="text" class="form-control" required="" name="sks">
                        <div class="invalid-feedback">
                        SKS Wajib Di isi!
                        </div>
                      </div>
                    <!-- </div> -->
                <!-- </div> -->
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                <!-- <div class="card-footer text-right"> -->
                      <button class="btn btn-primary">Submit</button>
                    <!-- </div> -->
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      </div>