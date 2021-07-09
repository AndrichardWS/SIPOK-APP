   <!-- REFRESH AUTOMATIS -->
   <meta http-equiv="refresh" content="30" />


   <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="<?php echo base_url()?>admin/Cadmin" class="nav-link active">
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
            <a href="<?php echo base_url()?>admin/Ckelola_user" class="nav-link">
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
            <h1 class="m-0 text-dark"> <i class="nav-icon fas fa-tachometer-alt"></i> Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"> <i class="nav-icon fas fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active"> <i class="nav-icon fas fa-tachometer-alt"></i> Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <hr>
    <!-- /.content-header -->


    

<!-- ============================================================================== -->    

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        



        <div class="row">
          <div class="col-md-12">

          <div class="card">
            
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $permohonan; ?></h3>

                <p>Data Permohonan</p>
              </div>
              <div class="icon">
                <i class="fa fa-envelope"></i>
              </div>
              <a href="<?php echo base_url()?>admin/Cpermohonan" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $pegawai; ?></h3>

                <p>Data Pegawai</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="<?php echo base_url()?>admin/Cpegawai" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $pengemudi; ?></h3>

                <p>Data Pengemudi</p>
              </div>
              <div class="icon">
                <i class="fa fa-male"></i>
              </div>
              <a href="<?php echo base_url()?>admin/Cpengemudi" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $kendaraan; ?></h3>

                <p>Data Kendaraan</p>
              </div>
              <div class="icon">
                <i class="fa fa-car"></i>
              </div>
              <a href="<?php echo base_url()?>admin/Ckendaraan" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          
                </div>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
        </div>
        <!-- /.row -->



<!-- ============================================================================== --> 


<div class="row">
          <div class="col-md-12">
            <?=$this->session->flashdata('notif') ?>

          <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Pengajuan Menunggu Verifikasi. . .</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>



              <div class="card-body table-responsive p-0" style="height: 200px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                    <th>Status</th>
                    <th>Nip Pegawai</th>
                    <th>Nip Pengemudi</th>
                    <th>No Polisi</th>
                    <th>Keperluan</th>
                    <th>Tujuan</th>
                    <th style="width:10px;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php foreach($data->result_array() as $i):

                          $id_permohonan=$i['id_permohonan'];
                          $nip_pegawai=$i['nip_pegawai'];
                          $nama_pegawai=$i['nama_pegawai'];
                          $nip_pengemudi=$i['nip_pengemudi'];
                          $nama_pengemudi=$i['nama_pengemudi'];
                          $no_polisi=$i['no_polisi'];
                          $nama_kendaraan=$i['nama_kendaraan'];
                          $keperluan=$i['keperluan'];
                          $tujuan=$i['tujuan'];
                          $status=$i['status'];
                      ?>

                    <tr>

                      <td>
                        <?php if ($status == 'Pending'): ?>
                          <span class="badge bg-warning"><?php echo $status; ?>. . .</span>
                          <?php elseif ($status == 'Accepted'): ?>
                          <span class="badge bg-success"><?php echo $status; ?></span>
                          <?php elseif ($status == 'Rejected'): ?>
                          <span class="badge bg-info"><?php echo $status; ?></span>
                          <?php elseif ($status == 'Canceled'): ?>
                          <span class="badge bg-danger"><?php echo $status; ?></span>
                        <?php endif; ?>
                      </td>

                      <td>[<?php echo $nip_pegawai; ?>] - <?php echo $nama_pegawai; ?></td>
                      <td>
                        <?php if ($nip_pengemudi == NULL): ?>
                          *Belum diinput!
                          <?php else: ?>
                            [<?php echo $nip_pengemudi; ?>] - <?php echo $nama_pengemudi; ?>
                        <?php endif; ?>
                       

                        </td>
                      <td>
                        <?php if ($no_polisi == 'PA000001' or $no_polisi == 'PA000002'): ?>
                          *Belum diinput!
                          <?php else: ?>
                            [<?php echo $no_polisi; ?>] - <?php echo $nama_kendaraan; ?>
                        <?php endif; ?>

                        </td>
                      <td><?php echo $keperluan; ?></td>
                      <td><?php echo $tujuan; ?></td>


                      <td>
                        <span class="badge bg-info"><a href="#" data-toggle="modal" data-target="#lihat-data<?php echo $id_permohonan;?>"><i class="fa fa-id-card"> Detail</i></a></span>
                      </td>
                    </tr>

                    <?php endforeach;?>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

                  


                </div>
                


<!-- ============================================================================== --> 

         <div class="row">
          <div class="col-md-12">

             <div class="callout callout-success">

                  <h5><i class="fas fa-bullhorn"></i> Selamat Datang, Administrator!</h5>
                  <hr>

                   <img style="margin-left: auto;margin-right:auto;display:block; width: 300px;" src="<?php echo base_url()?>assets/img/logo.png">

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

          <div class="card card-primary card-outline">
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

          <div class="card card-primary card-outline">
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

<!-- =====================MODAL DETAIL DATA========================================== -->
<div class="modal fade" id="lihat-data<?php echo $id_permohonan;?>" data-backdrop="static">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title"><i class="fa fa-id-card"> Detail Data Pengajuan</i></h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                          


              <form role="form" name="myform" method="post" action="<?php echo base_url()?>admin/Cadmin/verifikasi_reject_permohonan" onsubmit="return validasi_reject(this)">



            <div class="modal-body">

              <script type="text/javascript">
  
 function validasi_reject(form){

    if (form.nip_pegawai.value =="== PILIH =="){
    alert("Anda belum memilih Nip Pegawai");
    return (false);
 }

 //   if (form.nip_pengemudi.value =="== PILIH =="){
 //    alert("Anda belum memilih Nip Pengemudi");
 //    return (false);
 // }


   if (form.jenis_kendaraan.value =="== PILIH =="){
    alert("Anda belum memilih Jenis Kendaraan");
    return (false);
 }


 //    if (form.no_polisi.value =="== PILIH =="){
 //    alert("Anda belum memilih No Polisi");
 //    return (false);
 // }

    if (form.keperluan.value == ""){
    alert("Keperluan masih kosong!");
    form.keperluan.focus();
    return (false);
  }

      if (form.tujuan.value == ""){
    alert("Tujuan masih kosong!");
    form.tujuan.focus();
    return (false);
  }


   return (true);
 }

</script>

              <center>
                <img src="<?php echo base_url()?>assets/img/logo.png" style="width: 180px; height: 180px;" class="img-circle img-thumbnail"><br><br>
                

                <h4><b>FORM PENGGUNAAN KENDARAAN DINAS</b></h4>
                <p><b>Details Penggunaan Check</b></p>
              </center><br>
              
              <hr>

               <h4 class="bg-primary">Pegawai</h4>

              <input type="hidden" name="id_permohonan" value="<?php echo $id_permohonan;?>">

              <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nip Pegawai*</label>
                    <div class="col-sm-10">
                      <select class="form-control" style="width: 400px;" name="nip_pegawai">
                      <option value="== PILIH ==">== PILIH ==</option>

                      <?php foreach($tbl_pegawai->result_array() as $i):
                      $nip_pegawaii=$i['nip_pegawai'];
                      $nama_pegawai=$i['nama_pegawai'];?>


                      <option value="<?php echo $nip_pegawaii ?>"
                        
                         <?php if ($nip_pegawai == 
                        $nip_pegawaii) { echo "selected"; } ?>
                        >


                        [<?php echo $nip_pegawaii ?>] - <?php echo $nama_pegawai ?>
                      </option>
                    <?php endforeach ?>

                    </select>
                    </div>
                  </div> <hr> <br>


                  <h4 class="bg-primary">Kendaraan</h4>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kend*</label>
                    <div class="col-sm-10">
                      <select class="form-control" style="width: 200px;" name="jenis_kendaraan">
                   

                          <option value="== PILIH ==" selected="">== PILIH ==</option>
                          <option <?php if ($jenis_kendaraan == "Mobil") { echo "selected"; } ?> value="Mobil">Mobil</option>
                          <option <?php if ($jenis_kendaraan == "Motor") { echo "selected"; } ?> value="Motor">Motor</option>

                          </select>
                    </div>
                  </div> <hr> <br>



                  <h4 class="bg-primary">Lain - Lainnya</h4>

                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Keperluan</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="keperluan" rows="3" placeholder="Keperluan" style="width: 400px;"><?php echo $keperluan;?></textarea>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tujuan*</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Tujuan" name="tujuan" value="<?php echo $tujuan;?>" style="width: 400px;">
                    </div>
                  </div>

                 <!--  <input type="hidden" name="accepted" value="Accepted">
                  <input type="hidden" name="rejected" value="Rejected"> -->

                   <hr>


             




                </div>



                <div class="modal-footer">
                          <!-- <button class="btn btn-success" type="submit" name="submitForm" value="terima">Accept</button> -->
                          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#accepted<?php echo $id_permohonan;?>"></i>Accept</button>
                          <button class="btn btn-warning" type="submit">Reject</button>
                          <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Batal</button>

                          </div>
                      </form>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
















<!-- =====================MODAL ACCEPTED DATA========================================== -->
<div class="modal fade" id="accepted<?php echo $id_permohonan;?>" data-backdrop="static">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title"><i class="fa fa-check"> Accepted Data Pengajuan</i></h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                          


              <form role="form" name="myform" method="post" action="<?php echo base_url()?>admin/Cadmin/verifikasi_accept_permohonan" onsubmit="return validasi_accept(this)">



            <div class="modal-body">

              <script type="text/javascript">
  
 function validasi_accept(form){


   if (form.nip_pengemudi.value =="== PILIH =="){
    alert("Anda belum memilih Nip Pengemudi");
    return (false);
 }


    if (form.no_polisi.value =="== PILIH =="){
    alert("Anda belum memilih No Polisi");
    return (false);
 }


   return (true);
 }

</script>

              <center>
                <img src="<?php echo base_url()?>assets/img/logo.png" style="width: 180px; height: 180px;" class="img-circle img-thumbnail"><br><br>
                

                <h4><b>FORM PENGGUNAAN KENDARAAN DINAS</b></h4>
                <p><b>Details Penggunaan Check</b></p>
              </center><br>
              
              <hr>

              <input type="hidden" name="id_permohonan" value="<?php echo $id_permohonan;?>">
              <input type="hidden" name="nip_pegawai" value="<?php echo $nip_pegawai;?>">
              <input type="hidden" name="jenis_kendaraan" value="<?php echo $jenis_kendaraan;?>">
              <input type="hidden" name="keperluan" value="<?php echo $keperluan;?>">
              <input type="hidden" name="tujuan" value="<?php echo $tujuan;?>">

                  <h4 class="bg-primary">Pilih Pengemudi:</h4>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nip Pengemudi*</label>
                    <div class="col-sm-10">
                      <select class="form-control" style="width: 400px;" name="nip_pengemudi">
                      <option>== PILIH ==</option>
                      <?php foreach($tbl_pengemudi->result_array() as $i):
                      $nip_pengemudii=$i['nip_pengemudi'];
                      $nama_pengemudi=$i['nama_pengemudi'];?>

                      <option value="<?php echo $nip_pengemudii ?>"
                        
                        <?php if ($nip_pengemudi == 
                        $nip_pengemudii) { echo "selected"; } ?>
                        >


                        [<?php echo $nip_pengemudii ?>] - <?php echo $nama_pengemudi ?>

                      </option>
                    <?php endforeach ?>

                    </select>
                    </div>
                  </div> <hr> <br>


                 <h4 class="bg-primary">Pilih Kendaraan:</h4>

                 <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor Polisi*</label>
                    <div class="col-sm-10">
                      <select class="form-control" style="width: 400px;" name="no_polisi">
                      <option>== PILIH ==</option>
                      <?php foreach($tbl_kendaraan->result_array() as $i):
                      $no_polisii=$i['no_polisi'];
                      $nama_kendaraan=$i['nama_kendaraan'];
                      $jenis_kendaraan=$i['jenis_kendaraan'];?>

                      <option value="<?php echo $no_polisii ?>"

                        <?php if ($no_polisi == 
                        $no_polisii) { echo "selected"; } ?>
                        >


                        [<?php echo $jenis_kendaraan ?>] - <?php echo $no_polisii ?> - <?php echo $nama_kendaraan ?>



                      </option>
                      <?php endforeach ?>


                    </select>
                    </div>
                  </div> <hr> <br>

                  

                   <hr>


             




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


        






        













    </div><!-- /.container-fluid -->
  </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->