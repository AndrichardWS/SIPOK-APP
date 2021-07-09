   <!-- REFRESH AUTOMATIS -->
   <meta http-equiv="refresh" content="30" />

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> SISTEM INFORMASI PENGELOLAAN KENDARAAN DINAS</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><i class="nav-icon fas fa-tachometer-alt"></i> Dashboard</a></li>
              <li class="breadcrumb-item active"><i class="fa fa-car"> Keluar Masuk Kendaraan</i></a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <!-- Main content -->
    <section class="content">
      <div class="container">

        <!-- ============================================================================== -->




        <div class="row">
          <div class="col-md-12">

             <div class="callout callout-success">

                  <h5><i class="fas fa-bullhorn"></i> Selamat Datang, Admin - <?php echo $_SESSION['level']; ?>!</h5>
                  <hr>

                  <img style="margin-left: auto;margin-right:auto;display:block; width: 300px;" src="<?php echo base_url()?>assets/img/secu.png">

                  <p style="text-align: justify;">&nbsp &nbsp &nbsp Sistem Informasi Pengelolaan Kendaraan Dinas berbasis website atau disingkat SIPOK dirancang pada tahun 2020 dan sudah terhubung langsung dengan aplikasi berbasis android untuk mempermudah admin dalam mencatat pengguna kendaraan dinas pada Kantor Perwakilan Bank Indonesia Provinsi Papua secara online. Untuk mendownload aplikasi ini silakan meng-klik>> <a href="#">Download aplikasi android sekarang!</a></p>  <br>


                </div>
          </div>
        </div>
        



        <!-- ============================================================================== --> 


        <div class="row">
          <div class="col-md-12">

          <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Jumlah Penggunaan Kendaraan Dinas Per Fungsi</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>



             <div class="card-body">

                <div class="chart">
                  <canvas id="bar-chart-perfungsi"></canvas>
                </div>


              </div>
              <!-- /.card-body -->

                  
                </div>
              </div>
              </div>




<!-- ============================================================================== --> 


<div class="row">
          <div class="col-md-6">

          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Jumlah Penggunaan Kendaraan Dinas Per Bulan</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>



             <div class="card-body">

                <div class="chart">
                  <canvas id="bar-chart-penggunaan"></canvas>
                </div>


              </div>
              <!-- /.card-body -->

                  
                </div>
              </div>




                <div class="col-md-6">

          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Jumlah Service Kendaraan Dinas Per Bulan</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>



             <div class="card-body">

                <div class="chart">
                  <canvas id="bar-chart-service"></canvas>
                </div>


              </div>
              <!-- /.card-body -->

                  
                </div>

              </div>



</div>
                




<!-- ============================================================================== -->
        <!-- Small boxes (Stat box) -->
           <div class="row">
          <div class="col-md-12">
            <?=$this->session->flashdata('notif') ?>

          <div class="card">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-car"></i> Keluar Masuk Kendaraan</i></h3><br>
                <a href="<?php echo base_url()?>satpam/Csatpam/dpermohonan_all"><i class="fa fa-download"></i> Cetak Data</a>
                

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>

              <!-- /.card-header -->
              <div class="card-body">

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Status</th>
                  <th>Nip Pegawai</th>
                  <th>Jam Keluar</th>
                  <th>Tanggal Keluar</th>
                  <th>Jam Masuk</th>
                  <th>Tanggal Masuk</th>
                  <th style="width: 10px;">Aksi</th>
                </tr>
                </thead>
                <tbody>





                  <?php 
                  $no=1;
                       foreach($data->result_array() as $i):

                          $id_permohonan=$i['id_permohonan'];
                          $nip_pegawai=$i['nip_pegawai'];
                          $nama_pegawai=$i['nama_pegawai'];
                          $jam_keluar=$i['jam_keluar'];
                          $tanggal_keluar=$i['tanggal_keluar'];
                          $jam_masuk=$i['jam_masuk'];
                          $tanggal_masuk=$i['tanggal_masuk'];
                          $status=$i['status'];
                      ?>


                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php if ($status == 'Pending'): ?>
                          <span class="badge bg-warning"><?php echo $status; ?>. . .</span>
                          <?php elseif ($status == 'Accepted'): ?>
                          <span class="badge bg-success"><?php echo $status; ?></span>
                          <?php elseif ($status == 'Rejected'): ?>
                          <span class="badge bg-info"><?php echo $status; ?></span>
                          <?php elseif ($status == 'Canceled'): ?>
                          <span class="badge bg-danger"><?php echo $status; ?></span>
                        <?php endif; ?></td>
                  <td>[<?php echo $nip_pegawai; ?>] - <?php echo $nama_pegawai; ?></td>
                  <td>
                    <?php if ($jam_keluar == NULL): ?>
                      *Belum diinput!
                    <?php endif; ?>
                    <?php echo $jam_keluar; ?>
                  </td>
                  <td>
                    <?php if ($tanggal_keluar == NULL OR $tanggal_keluar=="0000-00-00"): 
                      echo "*Belum diinput!";?>
                      
                      <?php else :?>
                        <?php $d = new DateTime($tanggal_keluar);

                    echo $d->format('d-M-Y'); ?>
                    <?php endif; ?>
                    </td>
                  <td>
                    <?php if ($jam_masuk == NULL): ?>
                      *Belum diinput!
                    <?php endif; ?>
                    <?php echo $jam_masuk; ?></td>
                  <td>
                    <?php if ($tanggal_masuk == NULL OR $tanggal_masuk=="0000-00-00"): 
                      echo "*Belum diinput!";?>
                      
                      <?php else :?>
                        <?php $d = new DateTime($tanggal_masuk);

                    echo $d->format('d-M-Y'); ?>
                    <?php endif; ?>
                    
                    </td>
                  <td>
                   <span class="badge bg-success"><a href="#" data-toggle="modal" data-target="#lihat-data<?php echo $id_permohonan;?>"><i class="fa fa-eye"> Lihat</i></a></span>

                   <span class="badge bg-warning"><a href="#" data-toggle="modal" data-target="#edit-data<?php echo $id_permohonan;?>"><i class="fa fa-edit"> Input</i></a></span>

                  </td>
                </tr>

                <?php endforeach;?>

                
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Status</th>
                  <th>Nip Pegawai</th>
                  <th>Jam Keluar</th>
                  <th>Tanggal Keluar</th>
                  <th>Jam Masuk</th>
                  <th>Tanggal Masuk</th>
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
<!-- ============================================================================== -->    











<?php 
            foreach($data->result_array() as $i):
                $id_permohonan=$i['id_permohonan'];
                $nip_pegawai=$i['nip_pegawai'];
                $nama_pegawai=$i['nama_pegawai'];
                $nip_pengemudi=$i['nip_pengemudi'];
                $nama_pengemudi=$i['nama_pengemudi'];
                $jenis_kendaraan=$i['jenis_kendaraan'];
                $no_polisi=$i['no_polisi'];
                $nama_kendaraan=$i['nama_kendaraan'];
                $jam_keluar=$i['jam_keluar'];
                $tanggal_keluar=$i['tanggal_keluar'];
                $jam_masuk=$i['jam_masuk'];
                $tanggal_masuk=$i['tanggal_masuk'];                       
                $keperluan=$i['keperluan'];
                $tujuan=$i['tujuan'];
                ?>


<!-- =====================MODAL LIHAT DATA========================= -->    
<div class="modal fade" id="lihat-data<?php echo $id_permohonan;?>" data-backdrop="static">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><i class="nav-icon far fa-id-card nav-icon"></i> Detail Permohonan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>



                        <div class="modal-body">



                          <div class="alert alert-warning alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-info"></i> Keterangan :</h4>
                            <p>Ceklah isi form permohonan anda dengan lengkap, terutama yang bertanda (*). Jika isi form sudah lengkap silakan diunduh. Terimakasih.</p>
                            <a href="<?php echo base_url()?>satpam/Csatpam/dpermohonan_by_id/<?php echo $id_permohonan; ?>" class="btn btn-success"><i class="fa fa-download"></i> Cetak Permohonan</a>
                        </div>


                         <center>
                        <img src="<?php echo base_url()?>assets/img/logo.png" style="width: 180px; height: 180px;" class="img-circle img-thumbnail"><br><br>
                        

                        <h4><b>FORM PENGGUNAAN KENDARAAN DINAS</b></h4>
                        <p><b>Detail Penggunaan Check</b></p>
                      </center><br>
                      
                      <hr>




                    <h4 class="bg-primary">Pegawai</h4>

                     <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nip Pegawai</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Nip Pegawai" disabled="" value="<?php echo $nip_pegawai;?>" style="width: 200px;">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nm. Pegawai</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Nm. Pegawai" disabled="" value="<?php echo $nama_pegawai;?>" style="width: 400px;">
                    </div>
                  </div> <hr> <br>

                  <h4 class="bg-primary">Pengemudi</h4>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nip Pengemudi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Nip Pengemudi" disabled="" value="<?php echo $nip_pengemudi;?>" style="width: 200px;">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nm. Pengemudi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Nm. Pengemudi" disabled="" value="<?php echo $nama_pengemudi;?>" style="width: 400px;">
                    </div>
                  </div> <hr> <br>

                  <h4 class="bg-primary">Kendaraan</h4>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kend</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Jenis Kendaraan" disabled="" value="<?php echo $jenis_kendaraan;?>" style="width: 200px;">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor Polisi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Nomor Polisi" disabled="" value="<?php echo $no_polisi;?>" style="width: 200px;">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nm. Kendaraan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Nm. Kendaraan" disabled="" value="<?php echo $nama_kendaraan;?>" style="width: 400px;">
                    </div>
                  </div> <hr> <br>

                  <h4 class="bg-primary">Lain - Lainnya</h4>


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Jam Keluar</label>
                    <div class="col-sm-10">
                       <div class="input-group">
                      <input type="text" class="form-control" placeholder="Belum ada Jam Keluar!" name="jam_keluar" required value="<?php echo $jam_keluar;?>" disabled="">
                      <div class="input-group-text"><i class="far fa-clock"></i></div>
                    </div>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Keluar</label>
                    <div class="col-sm-10">
                      <div class="input-group date">
                        <input type="text" class="form-control pull-right" name="tanggal_keluar" placeholder="Belum ada Tanggal Keluar!" required disabled="" value="<?php if ($tanggal_keluar == NULL OR $tanggal_keluar=="0000-00-00"): echo "";?><?php else :?><?php $d = new DateTime($tanggal_keluar);echo $d->format('d-M-Y'); ?><?php endif; ?>">
                        <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                      </div>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Jam Masuk</label>
                    <div class="col-sm-10">
                       <div class="input-group">
                      <input type="text" class="form-control" name="jam_masuk" placeholder="Belum ada Jam Masuk!" required value="<?php echo $jam_masuk;?>" disabled="">
                      <div class="input-group-text"><i class="far fa-clock"></i></div>
                    </div>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                    <div class="col-sm-10">
                      <div class="input-group date">
                        <input type="text" class="form-control pull-right" name="tanggal_masuk" placeholder="Belum ada Tanggal Masuk!" required disabled="" value="<?php if ($tanggal_masuk == NULL OR $tanggal_masuk=="0000-00-00"): echo "";?><?php else :?><?php $d = new DateTime($tanggal_masuk);echo $d->format('d-M-Y'); ?><?php endif; ?>">
                        <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                      </div>
                    </div>
                  </div>


                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Keperluan</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="keperluan" rows="3" placeholder="Keperluan" required disabled="" style="width: 400px;"><?php echo $keperluan;?></textarea>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tujuan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Tujuan" name="tujuan" disabled="" value="<?php echo $tujuan;?>" style="width: 400px;">
                    </div>
                  </div> <hr>

                    


                        </div>







                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
<!-- =============================================== -->





<!-- =====================MODAL EDIT DATA========================================== -->
<div class="modal fade" id="edit-data<?php echo $id_permohonan;?>" data-backdrop="static">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title"><i class="fa fa-edit"></i> Ubah Data Permohonan</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                          


              <form role="form" name="myform" method="post" action="<?php echo base_url()?>satpam/Csatpam/edit_permohonan" onsubmit="return validasi_edit(this)">



            <div class="modal-body">

              <center>
                <img src="<?php echo base_url()?>assets/img/logo.png" style="width: 180px; height: 180px;" class="img-circle img-thumbnail"><br><br>
                

                <h4><b>FORM PENGGUNAAN KENDARAAN DINAS</b></h4>
                <p><b>Details Penggunaan Check</b></p>
              </center><br>
              
              <hr>


              <input type="hidden" name="id_permohonan" value="<?php echo $id_permohonan;?>">
              <input type="hidden" name="nip_pengemudi" value="<?php echo $nip_pengemudi;?>">
              <input type="hidden" name="no_polisi" value="<?php echo $no_polisi;?>">

              <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nip Pegawai</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Nip Pegawai" readonly="" value="[<?php echo $nip_pegawai;?>] - [<?php echo $nama_pegawai;?>]" style="width: 400px;">
                    </div>
                  </div> <br> <hr>

                  <div class="bootstrap-timepicker">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Jam Keluar*</label>
                    <div class="col-sm-10">
                       <div class="input-group">

                        <input type="text" class="form-control timepicker" placeholder="Belum ada Jam Keluar!" name="jam_keluar" value="<?php echo $jam_keluar;?>">
                      <div class="input-group-text"><i class="far fa-clock"></i></div>
                     
                      </div>
                    </div>
                  </div>
                </div>


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Keluar*</label>
                    <div class="col-sm-10">

                      <div class="input-group date">
                        <input type="date" class="form-control pull-right" name="tanggal_keluar" placeholder="Belum ada Tanggal Keluar!" value="<?php echo $tanggal_keluar;?>">
                        <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                      </div>
                    </div>
                  </div>

                  <div class="bootstrap-timepicker">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Jam Masuk*</label>
                    <div class="col-sm-10">
                       <div class="input-group">
                      <input type="text" class="form-control timepicker" name="jam_masuk" placeholder="Belum ada Jam Masuk!" value="<?php echo $jam_masuk;?>">
                      <div class="input-group-text"><i class="far fa-clock"></i></div>
                    </div>
                    </div>
                  </div>
                </div>


                  <div class="form-group row">

                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Masuk*</label>
                    <div class="col-sm-10">
                     <div class="input-group date">
                      <input type="date" class="form-control pull-right" name="tanggal_masuk" placeholder="Belum ada Tanggal Masuk!" value="<?php echo $tanggal_masuk;?>">
                      <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>

                    </div>
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
                  <?php endforeach;?>
<!-- ============================================================================== -->
