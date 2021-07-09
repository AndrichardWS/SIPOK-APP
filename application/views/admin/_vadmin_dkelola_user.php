     <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="<?php echo base_url()?>admin/Cadmin" class="nav-link">
             <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url()?>admin/Cpermohonan" class="nav-link">
             <i class="nav-icon fas fa-envelope"></i>
              <p>
                Permohonan Kendaraan
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url()?>admin/Cservice" class="nav-link">
             <i class="nav-icon fas fa-cog"></i>
              <p>
                Service Kendaraan
              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-desktop"></i>
              <p>
                Data Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url()?>admin/Cpegawai" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url()?>admin/Cpengemudi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengemudi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url()?>admin/Ckendaraan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kendaraan</p>
                </a>
              </li>
              <!-- <hr> -->
              <li class="nav-item">
                <a href="<?php echo base_url()?>admin/Cfungsi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fungsi</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?php echo base_url()?>admin/Cpangkat" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pangkat</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="<?php echo base_url()?>admin/Claporan" class="nav-link">
             <i class="nav-icon fas fa-book"></i>
              <p>
                Laporan
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url()?>admin/Ckelola_user" class="nav-link active">
             <i class="nav-icon fas fa-user"></i>
              <p>
                Kelola User
              </p>
            </a>
          </li>
          
          
          
         
          
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<!-- ============================================================================== -->    


























  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> <i class="nav-icon far fa-user"></i> Kelola User</h1>

            <a href="<?php echo base_url()?>admin/exportpdf/Cexport_pdf_duser/duser_all"><i class="fa fa-download"></i> Cetak Data</a>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"> <i class="nav-icon fas fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active"> <i class="nav-icon far fa-user"></i> Kelola User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <hr>

<!-- ============================================================================== -->    

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
           <div class="row">
          <div class="col-md-12">

          <div class="card card-primary card-outline">
              <div class="card-header">
                <?=$this->session->flashdata('notif') ?>
                <!-- <h3 class="card-title"><i class="fa fa-envelope"> Permohonan Kendaraan</i></h3> -->
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah-data">
                  <i class="fa fa-plus"></i> Tambah Data
                </button> -->





                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>


                          <table class="table table-bordered table-striped">
                                <tr class="text-center">
                                    <td width="150"><i><b>Hak Akses</b></i></td>
                                    <td width="150"><i><b>Administrator</b></i></td>
                                    <td width="150"><i><b>Pengemudi</b></i></td>
                                    <td width="150"><i><b>Satpam</b></i></td>
                                    <td width="150"><i><b>Pegawai</b></i></td>
                                </tr>
                                <tr>
                                    <td>Permohonan Kendaraan</td>
                                    <td class="text-center"><i class="fa fa-check"></i></td>
                                    <td class="text-center"><i class="fa fa-check"></i></td>
                                    <td class="text-center"><i class="fa fa-check"></i></td>
                                    <td class="text-center"><i class="fa fa-times-circle"></td>
                                </tr>
                                <tr>
                                    <td>Service Kendaraan</td>
                                    <td class="text-center"><i class="fa fa-check"></i></td>
                                    <td class="text-center"><i class="fa fa-check"></i></td>
                                    <td class="text-center"><i class="fa fa-times-circle"></td>
                                    <td class="text-center"><i class="fa fa-times-circle"></td>
                                </tr>
                                <tr>
                                    <td>Data Master</td>
                                    <td class="text-center"><i class="fa fa-check"></i></td>
                                    <td class="text-center"><i class="fa fa-check"></i></td>
                                    <td class="text-center"><i class="fa fa-times-circle"></td>
                                    <td class="text-center"><i class="fa fa-times-circle"></td>
                                </tr>
                                <tr>
                                    <td>Laporan</td>
                                    <td class="text-center"><i class="fa fa-check"></i></td>
                                    <td class="text-center"><i class="fa fa-times-circle"></td>
                                    <td class="text-center"><i class="fa fa-times-circle"></td>
                                      <td class="text-center"><i class="fa fa-times-circle"></td>
                                </tr>
                                <tr>
                                    <td>Kelola User</td>
                                    <td class="text-center"><i class="fa fa-check"></i></td>
                                    <td class="text-center"><i class="fa fa-times-circle"></td>
                                    <td class="text-center"><i class="fa fa-times-circle"></td>
                                    <td class="text-center"><i class="fa fa-times-circle"></td>
                                </tr>
                                <tr>
                                    <td>Pesan Kendaraan</td>
                                    <td class="text-center"><i class="fa fa-times-circle"></i></td>
                                    <td class="text-center"><i class="fa fa-times-circle"></i></td>
                                    <td class="text-center"><i class="fa fa-times-circle"></i></td>
                                    <td class="text-center"><i class="fa fa-check"></i></td>
                                </tr>
                                <tr>
                                    <td>Riwayat Pesanan</td>
                                    <td class="text-center"><i class="fa fa-times-circle"></i></td>
                                    <td class="text-center"><i class="fa fa-times-circle"></i></td>
                                    <td class="text-center"><i class="fa fa-times-circle"></i></td>
                                    <td class="text-center"><i class="fa fa-check"></i></td>
                                </tr>
                                
                            </table>

              <!-- /.card-header -->
              <div class="card-body">


                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width:10px;">No</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Level</th>
                  <th>Status</th>
                  <th style="width:10px;">Aksi</th>
                </tr>
                </thead>
                <tbody>

                  <?php 
                  $no=1;
                       foreach($data->result_array() as $i):

                          $id_pengguna=$i['id_pengguna'];
                          $username=$i['username'];
                          $password=$i['password'];
                          $level=$i['level'];
                          $status=$i['status'];
                      ?>

                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $username; ?></td>
                  <td><?php echo $password; ?></td>
                  <td><?php echo $level; ?></td>
                  <td><?php if ($status == 'Aktif'): ?>
                          <span class="badge bg-success"><?php echo $status; ?></span>
                          <?php elseif ($status == 'Tidak Aktif'): ?>
                          <span class="badge bg-danger"><?php echo $status; ?></span>
                        <?php endif; ?></td>
                  <td>

                   

                    <span class="badge bg-warning"><a href="#" data-toggle="modal" data-target="#edit-data<?php echo $id_pengguna;?>"><i class="fa fa-edit"></i> Ubah</a></span>

                  </td>
                </tr>

                 <?php endforeach;?>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Level</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </tfoot>
              </table>

              
           

                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
        </div>
        <!-- /.row -->

        













    </div><!-- /.container-fluid -->
  </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->





<?php 
                  $no=1;
                       foreach($data->result_array() as $i):

                          $id_pengguna=$i['id_pengguna'];
                          $username=$i['username'];
                          $password=$i['password'];
                          $level=$i['level'];
                          $status=$i['status'];
                      ?>



   <!-- =====================MODAL EDIT DATA========================= -->    
<div class="modal fade" id="edit-data<?php echo $id_pengguna;?>" data-backdrop="static">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><i class="fa fa-edit"></i> Ubah Data User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

                         <form role="form" name="myform" method="post" action="<?php echo base_url()?>admin/Ckelola_user/edit_user" onsubmit="return validasi_edit(this)">


<script type="text/javascript">
  function validasi_edit(form){

      if (form.username.value == ""){
    alert("Username masih kosong!");
    form.username.focus();
    return (false);
  }


  if (form.level.value =="== PILIH =="){
    alert("Anda belum memilih level!");
    return (false);
 }


  if (form.status.value =="== PILIH =="){
    alert("Anda belum memilih status!");
    return (false);
 }


  return (true);
  }
</script>





                        <div class="modal-body">

                        <input type="hidden" name="id_pengguna" value="<?php echo $id_pengguna;?>">
                        <div class="form-group">
                          <label>Username*</label>
                          <input class="form-control" type="text" placeholder="Username" style="width: 200px;" name="username" value="<?php echo $username;?>">

                        </div>

                        <div class="form-group">
                          <label>Password*</label><br>
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#reset-password<?php echo $id_pengguna;?>"><i class="fa fa-redo"></i> Reset Password</button>

                        </div>

                        <div class="form-group">
                          <label for="exampleSelect1">Level*</label>
                          <select class="form-control" style="width: 200px;" name="level">
                            <option value="== PILIH ==">== PILIH ==</option>
                            <option <?php if ($level == "Administrator") { echo "selected"; } ?> value="Administrator">Administrator</option>
                            <option <?php if ($level == "Pengemudi") { echo "selected"; } ?> value="Pengemudi">Pengemudi</option>
                            <option <?php if ($level == "Satpam") { echo "selected"; } ?> value="Satpam">Satpam</option>
                            <option <?php if ($level == "Pegawai") { echo "selected"; } ?> value="Pegawai">Pegawai</option>
                          </select>
                          </select>
                      </div>

                        <div class="form-group">
                          <label for="exampleSelect1">Status*</label>
                          <select class="form-control" style="width: 200px;" name="status">
                            <option value="== PILIH ==">== PILIH ==</option>
                            <option <?php if ($status == "Aktif") { echo "selected"; } ?> value="Aktif">Aktif</option>
                            <option <?php if ($status == "Tidak Aktif") { echo "selected"; } ?> value="Tidak Aktif">Tidak Aktif</option>
                          </select>
                      </div>


                       

                        </div>







                        <div class="modal-footer">
                          <button class="btn btn-primary" type="submit"><i class="fa fa-check"></i></button>
                          <button class="btn btn-warning" type="Reset"><i class="fa fa-redo"></i></button>

                            <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times-circle"></i></button>
                          </div>
                      </form>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
<!-- =============================================== -->






<!-- ===================== RESET PASSWORD ========================== -->
<div class="modal fade" id="reset-password<?php echo $id_pengguna;?>" data-backdrop="static">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><i class="fa fa-redo"></i> Reset Password</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form role="form" name="myform" method="post" action="<?php echo base_url()?>admin/Ckelola_user/reset_password_pegawai">
            <div class="modal-body">

                <input type="hidden" name="id_pengguna" value="<?php echo $id_pengguna;?>">
                <!-- <input type="hidden" name="username" value="<?php echo $username;?>"> -->
              
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Password Default*</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Password" name="password" value="12345" style="width: 300px;">
                    </div>
                  </div>

               



            </div>






            <div class="modal-footer">
              <button class="btn btn-primary" type="submit"><i class="fa fa-check"></i></button>
              <button class="btn btn-warning" type="Reset"><i class="fa fa-redo"></i></button>

                <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times-circle"></i></button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
<!-- ============================================================================== -->

<?php endforeach; ?>