<!-- =================================== start: content =================================== -->

          <!-- Begin Page Content -->
          <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800"><?php echo "Dashboard Admin" ?></h1>
              <button onclick="" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Excel Report</button>
            </div>

            <!-- start 1st  Row -->
            <div class="row">
              <!-- Total Staff Card -->
              <div class="col-xl-3 col-md-6 mb-4">
                <a href="<?php echo "#" ?>" style="text-decoration:none">
                  <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">RESERVED</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "218" ?></div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <!-- Total Member Card -->
              <div class="col-xl-3 col-md-6 mb-4">
                <a href="<?php echo base_url("{$modules}/manage/siswa") ?>" style="text-decoration:none">
                <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Siswa</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $siswa->total ?></div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-child fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
                </a>
              </div>

              <!-- Total Transactions (Monthly) Card -->
              <div class="col-xl-3 col-md-6 mb-4">
                <a href="<?php echo base_url("{$modules}/manage/department") ?>" style="text-decoration:none">
                <div class="card border-left-info shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Department</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $dept->total ?></div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-sitemap fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
                </a>
              </div>

              <!-- Unopened Message(s) Card -->
              <div class="col-xl-3 col-md-6 mb-4">
                <a href="<?php echo base_url("{$modules}/manage/kelas") ?>" style="text-decoration:none">
                <div class="card border-left-warning shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Kelas</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $kelas->total ?></div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-graduation-cap fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
                </a>
              </div>
            </div>
            <!-- end 1st row -->

            <!-- start 2nd  Row -->
            <div class="row">
              <!-- Total Staff Card -->
              <div class="col-xl-3 col-md-6 mb-4">
                <a href="<?php echo base_url("{$modules}/manage/staff") ?>" style="text-decoration:none">
                  <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Staff</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $staff->total ?></div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-id-card fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <!-- Total Member Card -->
              <div class="col-xl-3 col-md-6 mb-4">
                <a href="<?php echo base_url("{$modules}/manage/staff") ?>" style="text-decoration:none">
                <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Pengurus</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $pengurus->total ?></div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-id-card fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
                </a>
              </div>

              <!-- Total Transactions (Monthly) Card -->
              <div class="col-xl-3 col-md-6 mb-4">
                <a href="<?php echo base_url("{$modules}/manage/staff") ?>" style="text-decoration:none">
                <div class="card border-left-info shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Pelatih</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $pelatih->total ?></div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-id-card fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
                </a>
              </div>

              <!-- Unopened Message(s) Card -->
              <div class="col-xl-3 col-md-6 mb-4">
                <a href="<?php echo base_url("{$modules}/manage/staff") ?>" style="text-decoration:none">
                <div class="card border-left-warning shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Pengajar</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $pengajar->total ?></div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-id-card fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
                </a>
              </div>
            </div>
            <!-- end 2nd row -->

            <!-- Content on 3rd  Row -->
            <div class="row">
              <!-- start Bar Chart card -->
              <div class="col-xl-6 mb-4">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik staff dan siswa</h6>
                  </div>
                  <div class="card-body">
                    <div class="chart-bar">
                      <canvas id="myBarChart"></canvas>
                    </div>
                    <hr>
                    <center>Grafik bar untuk semua data staff dan siswa setiap bulan.</center>
                  </div>
                </div>
              </div>
              <!-- end bar chart card -->
              <!-- start donut Chart -->
              <div class="col-xl-6 mb-4">
                <div class="card shadow mb-4">
                  <!-- Card Header - Dropdown -->
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Donut Chart</h6>
                  </div>
                  <!-- Card Body -->
                  <div class="card-body">
                    <div class="chart-pie pt-4">
                      <canvas id="myPieChart"></canvas>
                    </div>
                    <hr>
                    Styling for the donut chart can be found in the <code>/js/demo/chart-pie-demo.js</code> file.
                  </div>
                </div>
              </div>
              <!-- end donut chart card -->
            </div>

          </div>
          <!-- /.container-fluid -->

<!-- =================================== end: content =================================== -->

<script type="text/javascript">
  function excel(){
    location.href='<?php echo base_url('report/excel'); ?>';
  }
  function pdf(){
    location.href='<?php echo base_url('report/pdf'); ?>';
  }
</script>
