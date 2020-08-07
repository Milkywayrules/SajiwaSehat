<!-- =================================== start: content =================================== -->

          <!-- Begin Page Content -->
          <div class="container-fluid px-5">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <div class="">
                <h1 class="h3 mb-0 text-gray-800"><?php echo $subTitle ?> </h1>
              </div>
              <div class="">
                <button onclick="excel_report()" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm my-1"><i class="fas fa-file-excel fa-sm"></i> Excel Report</button>
                <button onclick="pdf_report()" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm my-1"><i class="fas fa-file-pdf fa-sm"></i> PDF Report</button>
              </div>
            </div>

            <!-- Content Row -->
            <!-- <div class="row"> -->

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Total staff : <?php echo ($totStaff != FALSE)?(count($totStaff)):('0') ?> terdaftar</h6>
                <div class="dropdown no-arrow">
                  <a class="btn btn-sm btn-dark" href=<?php echo current_url()."/tambah" ?>>
                    <i class="fas fa-plus fa-sm fa-fw"></i> Tambah Staff
                  </a>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive px-3">
                  <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0" align='center'>
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama Lengkap</th>
                        <th>No Telepon</th>
                        <th>Job</th>
                        <th>Status</th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if ($totStaff != FALSE) { ?>
                        <?php $no = 1 ?>
                        <?php foreach ($totStaff as $row): ?>
                          <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo $row->nip ?></td>
                            <td><?php echo $row->fullname ?></td>
                            <td><?php echo $row->phone ?></td>
                            <td><?php echo $row->privilege ?></td>
                            <td class="text-center"> <i class="fa fa-<?php echo ($row->isActive==1)?('check'):('times'); ?> mt-2"></i> </td>
                            <td width='15%' align='center'>
                              <div class="row justify-content-center">
                                <a href=<?php echo current_url()."/detail/{$row->nip}" ?> class="btn-sm btn-primary text-decoration-none my-1 mx-1"><i class="fa fa-eye"></i></a>
                                <a href=<?php echo current_url()."/edit/{$row->nip}" ?> class="btn-sm btn-info text-decoration-none my-1"><i class="fa fa-edit"></i></a>
                              </div>
                            </td>
                          </tr>
                          <?php $no++; endforeach; ?>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>
          <!-- /.container-fluid -->

<!-- =================================== end: content =================================== -->
