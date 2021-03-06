<!-- =================================== start: content =================================== -->

          <!-- Begin Page Content -->
          <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800"><?php echo $tabTitle ?></h1>
            </div>

            <div class="row justify-content-center">

              <div class="col-lg-10">

                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                  <!-- Card Header - Dropdown -->
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"><?php echo $subTitle ?></h6>
                    <div class="dropdown no-arrow">
                      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                      </a>
                    </div>
                  </div>
                  <!-- Card Body -->
                  <div class="card-body">
                    <div class="row justify-content-center my-3">
                      <a href=<?php echo base_url("{$modules}/upload-file/excel") ?> class="btn btn-success col-3 mx-1">
                        <i class="fas fa-file-excel"></i> Import Excel
                      </a>
                      <a href=<?php echo base_url("{$modules}/upload-file/pdf") ?> class="btn btn-danger col-3 mx-1">
                        <i class="fas fa-file-pdf"></i> Upload PDF
                      </a>
                        <!-- <a class="btn btn-light col-3 mx-1 disabled">Coming soon</a> -->
                    </div>
                    <div class="row justify-content-center my-3">
                      <!-- <a class="btn btn-light col-3 mx-1 disabled">Coming soon</a> -->
                      <a class="btn btn-light col-3 mx-1 disabled">Coming soon</a>
                      <a class="btn btn-light col-3 mx-1 disabled">Coming soon</a>
                    </div>
                    <div class="row justify-content-center my-3">
                      <!-- <a class="btn btn-light col-3 mx-1 disabled">Coming soon</a> -->
                      <a class="btn btn-light col-3 mx-1 disabled">Coming soon</a>
                      <a class="btn btn-light col-3 mx-1 disabled">Coming soon</a>
                    </div>
                  </div>
                </div>

              </div>

            </div>

          </div>
          <!-- /.container-fluid -->

<!-- =================================== end: content =================================== -->
