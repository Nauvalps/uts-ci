<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Halaman Utama</a></div>
              <div class="breadcrumb-item">Index</div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Data Mahasiswa</h4>
                  </div>
                  <div class="card-body">
                    <?php 
                    $query = $this->db->query('SELECT * FROM mahasiswa');
                    echo $query->num_rows();
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-info">
                  <i class="fas fa-book-open"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Data Matakuliah</h4>
                  </div>
                  <div class="card-body">
                    <?php 
                    $query = $this->db->query('SELECT * FROM matakuliah');
                    echo $query->num_rows();
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="section-body">
              
          </div>
        </section>
      </div>