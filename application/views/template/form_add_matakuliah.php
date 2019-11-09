<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tambah Matakuliah</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Tambah Matakuliah<</a></div>
              <div class="breadcrumb-item"><a href="#">Halaman Tambah Matakuliah</a></div>
              <div class="breadcrumb-item">Matakuliah<</div>
            </div>
          </div>

          <div class="section-body">
              <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                  <div class="card">
                  <form class="needs-validation" novalidate="" action="<?php echo base_url().'Matakuliah/add'?>" method="post" autocomplete="off"> 
                    <!-- <div class="card-header">
                      <h4>JavaScript Validation</h4>
                    </div> -->
                    <div class="card-body">
                    <div class="form-group">
                        <label>KODE MATAKULIAH</label>
                        <input type="text" class="form-control" required="" name="kd_matakuliah">
                        <div class="invalid-feedback">
                        Kode Matakuliah Wajib Di isi!
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
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
          </div>
        </section>
      </div>