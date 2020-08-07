<!-- =================================== start: content =================================== -->

          <!-- Begin Page Content -->
          <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800"><?php echo $subTitle ?></h1>
            </div>

            <div class="row justify-content-center">

              <div class="col-lg-10">

                <!-- Dropdown Card -->
                <div class="card shadow mb-4">
                  <!-- Card Header - Dropdown -->
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Informasi Dasar Staff</h6>
                    <div class="dropdown no-arrow">
                      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#hapusModal">Hapus</a>
                      </div>
                    </div>
                  </div>
                  <!-- Card Body -->
                  <!-- open form -->
                  <form method="post">
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
                                <td>
                                  <input type="text" id='edit-nip'
                                    name="edit-nip" placeholder="Nomor Induk Pengurus"
                                    class="form-control <?php if(form_error('edit-nip') !== ''){ echo 'is-invalid'; } ?>" readonly
                                    value="<?php echo $user->nip ?>">
                                  <sub class="form-text text-danger text-nowrap"> <?php echo form_error('edit-nip') ?> </sub>
                                </td>
                              </tr>
                              <tr>
                                <td>Username</td>
                                <td class="text-center">:</td>
                                <td>
                                  <input type="text" id='edit-username'
                                    name="edit-username" placeholder="Username"
                                    class="form-control <?php if(form_error('edit-username') !== ''){ echo 'is-invalid'; } ?>"
                                    value="<?php echo (set_value('edit-username'))?(set_value('edit-username')):($user->username); ?>">
                                  <sub class="form-text text-danger text-nowrap"> <?php echo form_error('edit-username') ?> </sub>
                                </td>
                              </tr>
                              <tr>
                                <td>E-mail</td>
                                <td class="text-center">:</td>
                                <td>
                                  <input type="text" id='edit-email'
                                  name="edit-email" placeholder="E-mail"
                                  class="form-control <?php if(form_error('edit-email') !== ''){ echo 'is-invalid'; } ?>"
                                  value="<?php echo (set_value('edit-email'))?(set_value('edit-email')):($user->email); ?>">
                                  <sub class="form-text text-danger text-nowrap"> <?php echo form_error('edit-email') ?> </sub>
                                </td>
                              </tr>
                              <tr>
                                <td>Nama</td>
                                <td class="text-center">:</td>
                                <td>
                                  <input type="text" id='edit-fullname'
                                    name="edit-fullname" placeholder="Nama Lengkap"
                                    class="form-control <?php if(form_error('edit-fullname') !== ''){ echo 'is-invalid'; } ?>"
                                    value="<?php echo (set_value('edit-fullname'))?(set_value('edit-fullname')):($user->fullname); ?>">
                                  <sub class="form-text text-danger text-nowrap"> <?php echo form_error('edit-fullname') ?> </sub>
                                </td>
                              </tr>
                              <tr>
                                <td>No Telepon</td>
                                <td class="text-center">:</td>
                                <td>
                                  <input type="text" id='edit-phone'
                                    name="edit-phone" placeholder="No Telepon"
                                    class="form-control <?php if(form_error('edit-phone') !== ''){ echo 'is-invalid'; } ?>"
                                    value="<?php echo (set_value('edit-phone'))?(set_value('edit-phone')):($user->phone); ?>">
                                  <sub class="form-text text-danger text-nowrap"> <?php echo form_error('edit-phone') ?> </sub>
                                </td>
                              </tr>
                              <tr>
                                <td>Alamat</td>
                                <td class="text-center">:</td>
                                <td>
                                  <textarea name="edit-address" placeholder="Alamat lengkap" rows="3" cols="35"
                                  class="form-control"><?php echo (set_value('edit-address'))?(set_value('edit-address')):($user->address); ?></textarea>
                                  <sub class="form-text text-danger text-nowrap"> <?php echo form_error('edit-address') ?> </sub>
                                </td>
                              </tr>
                              <tr>
                                <td>Gender</td>
                                <td class="text-center">:</td>
                                <td>
                                  <div class="form-group row">
                                    <div class="col-lg-8">
                                      <div class="form-row my-1 mx-1">
                                        <div class="custom-control custom-checkbox form-check form-check-inline">
                                          <input type="radio" id="editGenderM" name="edit-gender"
                                            class="custom-control-input"
                                            value="M" <?php echo ($user->gender != 'M')?:('checked') ?>>
                                          <label class="custom-control-label" for="editGenderM">Male</label>
                                        </div>
                                        <div class="custom-control custom-checkbox form-check form-check-inline">
                                          <input type="radio" id="editGenderF" name="edit-gender"
                                            class="custom-control-input"
                                            value="F" <?php echo ($user->gender != 'F')?:('checked') ?>>
                                          <label class="custom-control-label" for="editGenderF">Female</label>
                                        </div>
                                      </div>
                                      <sub class="form-text text-danger text-nowrap"> <?php echo form_error('add-gender') ?> </sub>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>Status</td>
                                <td class="text-center">:</td>
                                <?php $privileges = array('pengurus', 'pelatih', 'pengajar'); ?>
                                <td>
                                  <div class="form-group">
                                    <select class="form-control" name="edit-privilege">
                                      <option>-- pilih status --</option>
                                      <?php foreach ($privileges as $priv): ?>
                                        <option value=<?php echo "{$priv}" ?> <?php echo ($user->privilege == $priv)?('selected'):('') ?>>
                                           <?php echo "{$priv}" ?>
                                         </option>
                                      <?php endforeach; ?>
                                    </select>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>Department</td>
                                <td class="text-center">:</td>
                                <td>
                                  <div class="form-group">
                                    <select class="form-control" name="edit-department">
                                      <option>-- pilih department --</option>
                                      <?php foreach ($department as $dept): ?>
                                        <option value=<?php echo "{$dept->id}" ?> <?php echo ($user->deptId == $dept->id)?('selected'):('') ?>>
                                           <?php echo "{$dept->deptName} - {$dept->id}" ?>
                                         </option>
                                      <?php endforeach; ?>
                                    </select>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>Akun aktif</td>
                                <td class="text-center">:</td>
                                <td>
                                  <div class="btn-group btn-group-toggle my-1" data-toggle="buttons">
                                    <label class="btn btn-sm btn-<?php echo ($user->isActive==0)?('danger active'):('secondary'); ?>">
                                      <input type="radio" name="edit-statusAktif" id="option1" value=0 <?php echo ($user->isActive==0)?('checked'):(''); ?>>
                                      <i class="fa fa-times my-1 mx-2"></i>
                                    </label>
                                    <label class="btn btn-sm btn-<?php echo ($user->isActive==1)?('success active'):('secondary'); ?>">
                                      <input type="radio" name="edit-statusAktif" id="option2" value=1 <?php echo ($user->isActive==1)?('checked'):(''); ?>>
                                      <i class="fa fa-check my-1 mx-2"></i>
                                    </label>
                                  </div>
                                </td>
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
                        <a href=<?php echo base_url("{$modules}/manage/staff") ?> class="btn btn-secondary mx-1">Kembali</a>
                        <button type="submit" class="btn btn-success mx-1" >Simpan</button>
                      </div>
                    </div>
                  </form>
                  <!-- close form -->
                </div>

              </div>

            </div>

          </div>
          <!-- /.container-fluid -->

<?php //<!-- =================================== start: MODALS =================================== --> ?>

          <!-- start: Hapus Modal-->
          <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Yakin ingin hapus data?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <center>
                    NIP : <?php echo "{$user->nip}" ?>
                    <br>
                    Nama : <?php echo "{$user->fullname}" ?>
                  </center>
                  <hr width='80%'>
                  Tekan "Hapus" dibawah jika kamu yakin ingin hapus data di atas
                </div>
                <div class="modal-footer">
                  <form method="post" action=<?php echo base_url("{$modules}/manage/staff/hapus/{$user->nip}") ?>>
                    <button class="btn btn-danger" type="submit" name="Hapus">Hapus</button>
                  </form>
                  <button class="btn btn-primary" type="button" data-dismiss="modal">Batal</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end: hapus modal -->

<?php //<!-- =================================== end: MODALS =================================== --> ?>

<!-- =================================== end: content =================================== -->
