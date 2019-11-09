<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <?php foreach($matakuliah as $matkul){?>
          <div class="section-header">
            <h1>Edit Matakuliah</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Edit Matakuliah</a></div>
              <div class="breadcrumb-item"><a href="#">Halaman Edit Matakuliah</a></div>
              <div class="breadcrumb-item">Matakuliah</div>
            </div>
          </div>

          <div class="section-body">
              <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                  <div class="card">
                  <form class="needs-validation" novalidate="" action="<?php echo base_url().'Matakuliah/update'?>" method="post">
                    <!-- <div class="card-header">
                      <h4>JavaScript Validation</h4>
                    </div> -->
                    <div class="card-body">
                      <div class="form-group">
                        <label>NPM</label>
                        <input type="text" class="form-control <?php echo form_error('kd_matakuliah') ? 'is-invalid': ''?>" required="" name="kd_matakuliah" placeholder="Masukkan Npm" value="<?php echo $matkul->kd_matakuliah?>" readonly="">
                        <div class="invalid-feedback">
                          Kode Matakuliah Wajib Di isi!
                        </div>
                      </div>
                      <div class="form-group">
                        <label>NAMA MATAKULIAH</label>
                        <input type="text" class="form-control" required="" name="nama_matakuliah" value="<?php echo $matkul->nama_matakuliah?>">
                        <div class="invalid-feedback">
                        Nama Matakuliah Wajib Di isi!
                        </div>
                      </div>
                      <div class="form-group">
                        <label>SKS</label>
                        <input type="text" class="form-control" required="" name="sks" value="<?php echo $matkul->sks?>">
                        <div class="invalid-feedback">
                        Sks Wajib Di isi!
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                  </form>
                  <?php } ?>
                  </div>
                </div>
              </div>
          </div>
        </section>
      </div>