<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <?php foreach($mahasiswa as $mhs){?>
          <div class="section-header">
            <h1>Edit Mahasiswa</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Edit Mahasiswa</a></div>
              <div class="breadcrumb-item"><a href="#">Halaman Edit Mahasiswa</a></div>
              <div class="breadcrumb-item">Mahasiswa</div>
            </div>
          </div>

          <div class="section-body">
              <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                  <div class="card">
                  <form class="needs-validation" novalidate="" action="<?php echo base_url().'Mahasiswa/update'?>" method="post">
                    <!-- <div class="card-header">
                      <h4>JavaScript Validation</h4>
                    </div> -->
                    <div class="card-body">
                      <div class="form-group">
                        <label>NPM</label>
                        <input type="text" class="form-control <?php echo form_error('npm') ? 'is-invalid': ''?>" required="" name="npm" placeholder="Masukkan Npm" value="<?php echo $mhs->npm?>" readonly="">
                        <div class="invalid-feedback">
                          NPM Wajib Di isi!
                        </div>
                      </div>
                      <div class="form-group">
                        <label>NAMA</label>
                        <input type="text" class="form-control" required="" name="nama" value="<?php echo $mhs->nama?>">
                        <div class="invalid-feedback">
                        Nama Wajib Di isi!
                        </div>
                      </div>
                      <div class="form-group">
                        <label>JENJANG PRODI</label>
                        <input type="text" class="form-control" required="" name="jenjang" value="<?php echo $mhs->jenjang?>">
                        <div class="invalid-feedback">
                        Jenjang Prodi Wajib Di isi!
                        </div>
                      </div>
                      <div class="form-group">
                        <label>JURUSAN</label>
                        <input type="text" class="form-control" required="" name="jurusan" value="<?php echo $mhs->jurusan?>">
                        <div class="invalid-feedback">
                        Jurusan Wajib Di isi!
                        </div>
                      </div>
                      <div class="form-group">
                        <label>KELAS</label>
                        <input type="text" class="form-control" required="" name="kelas" value="<?php echo $mhs->kelas?>">
                        <div class="invalid-feedback">
                        Kelas Wajib Di isi!
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