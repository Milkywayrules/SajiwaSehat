<!-- =================================== start: content =================================== -->

          <!-- Begin Page Content -->
          <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800"><?php echo $subTitle ?></h1>
            </div>

            <div class="row justify-content-center">

              <div class="col-lg-10">

                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                  <!-- Card Header - Dropdown -->
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Informasi Dasar Staff</h6>
                    <div class="dropdown no-arrow">
                      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                      </a>
                    </div>
                  </div>
                  <!-- Card Body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-4">
                          <div class="row justify-content-center py-3 px-5">
                            <img src=<?php echo base_url("assets/img/avatar/{$user->avatar}") ?> alt="Avatar" width="150px">
                          </div>
                      </div>
                      <div class="col-lg-6">
                        <table>
                          <tbody>
                            <tr>
                              <td>NIP</td>
                              <td width='10%' class="text-center">:</td>
                              <td> <?php echo $user->nip ?> </td>
                            </tr>
                            <tr>
                              <td>Nama</td>
                              <td width='10%' class="text-center">:</td>
                              <td> <?php echo $user->fullname ?> </td>
                            </tr>
                            <tr>
                              <td>Username</td>
                              <td class="text-center">:</td>
                              <td> <?php echo "{$user->username}" ?> </td>
                            </tr>
                            <tr>
                              <td>E-mail</td>
                              <td class="text-center">:</td>
                              <td> <?php echo $user->email ?> </td>
                            </tr>
                            <tr>
                              <td>Telepon</td>
                              <td class="text-center">:</td>
                              <td> <?php echo $user->phone ?> </td>
                            </tr>
                            <tr>
                              <td>Gender</td>
                              <td class="text-center">:</td>
                              <td> <?php echo $user->gender ?> </td>
                            </tr>
                            <tr>
                              <td>Alamat</td>
                              <td class="text-center">:</td>
                              <td> <?php echo $user->address ?> </td>
                            </tr>
                            <tr>
                              <td>Status</td>
                              <td class="text-center">:</td>
                              <td> <?php echo $user->privilege ?> </td>
                            </tr>
                            <tr>
                              <td>Department</td>
                              <td class="text-center">:</td>
                              <td> <?php echo "{$department->deptName} - {$department->id}" ?> </td>
                            </tr>
                            <tr>
                              <td>Akun aktif</td>
                              <td class="text-center">:</td>
                              <td> <i class="fa fa-<?php echo ($user->isActive==1)?('check'):('times'); ?> mt-2"></i> </td>
                            </tr>
                            <tr>
                              <td>Bergabung sejak</td>
                              <td class="text-center">:</td>
                              <?php $user->createdAt = explode(' ', $user->createdAt); ?>
                              <td> <?php echo $user->createdAt[0] ?> </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>

                    <hr>
                    <div class="row justify-content-center">
                      <a href=<?php echo base_url("{$modules}/manage/staff") ?> class="btn btn-secondary">Kembali</a>
                      <a href=<?php echo base_url("{$modules}/manage/staff/edit/{$user->username}") ?> class="btn btn-info mx-1">Ubah</a>
                    </div>
                  </div>
                </div>

              </div>

            </div>

          </div>
          <!-- /.container-fluid -->

<!-- =================================== end: content =================================== -->
