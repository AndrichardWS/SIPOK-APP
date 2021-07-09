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
            <a href="<?php echo base_url()?>admin/Cpermohonan" class="nav-link active">
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
            <h1 class="m-0 text-dark"> <i class="nav-icon fas fa-envelope"></i> Permohonan Kendaraan</h1>

            <a href="<?php echo base_url()?>admin/exportpdf/Cexport_pdf_dpermohonan/dpermohonan_all"><i class="fa fa-download"></i> Cetak Data</a>


          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"> <i class="nav-icon fas fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active"> <i class="nav-icon fas fa-envelope"></i> Permohonan Kendaraan</li>
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

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah-data"><i class="fa fa-plus"></i> Tambah Data</button>

                

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
                  <th>Nip Pengemudi</th>
                  <th>No Polisi</th>
                  <th>Keperluan</th>
                  <th>Tujuan</th>
                  <th style="width:10px;">Aksi</th>
                </tr>
                </thead>
                <tbody>





                  <?php 
                  $no=1;
                       foreach($data->result_array() as $i):

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
                  <td><?php echo $no++; ?></td>
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
                    <?php if ($no_polisi == 'PA000001' or $no_polisi == 'PA000002' or $no_polisi == NULL): ?>
                      *Belum diinput!
                      <?php else: ?>
                        [<?php echo $no_polisi; ?>] - <?php echo $nama_kendaraan; ?>
                    <?php endif; ?>

                    </td>
                  <td><?php echo $keperluan; ?></td>
                  <td><?php echo $tujuan; ?></td>
                  <td>
                   <span class="badge bg-success"><a href="#" data-toggle="modal" data-target="#lihat-data<?php echo $id_permohonan;?>"><i class="fa fa-eye"></i> Lihat</a></span>

                   <span class="badge bg-warning"><a href="#" data-toggle="modal" data-target="#edit-data<?php echo $id_permohonan;?>"><i class="fa fa-edit"> Ubah</i></a></span>

                   <span class="badge bg-danger"><a href="<?php echo base_url()?>admin/Cpermohonan/hapus_permohonan/<?php echo $id_permohonan; ?>" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')" ><i class="fa fa-trash"> Hapus</i></a></span>

                  </td>
                </tr>

                <?php endforeach;?>

                
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Status</th>
                  <th>Nip Pegawai</th>
                  <th>Nip Pengemudi</th>
                  <th>No Polisi</th>
                  <th>Keperluan</th>
                  <th>Tujuan</th>
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











<!-- =====================MODAL TAMBAH DATA========================= -->    

   <div class="modal fade" id="tambah-data" data-backdrop="static">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><i class="fa fa-plus"></i> Tambah Data Permohonan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>



           <form role="form" name="myform" method="post" action="<?php echo base_url()?>admin/Cpermohonan/tambah_permohonan" onsubmit="return validasi_tambah(this)">

            <div class="modal-body">

<script type="text/javascript">
  
 function validasi_tambah(form){

    if (form.nip_pegawai.value =="== PILIH =="){
    alert("Anda belum memilih Nip Pegawai");
    return (false);
 }

   if (form.nip_pengemudi.value =="== PILIH =="){
    alert("Anda belum memilih Nip Pengemudi");
    return (false);
 }


   if (form.jenis_kendaraan.value =="== PILIH =="){
    alert("Anda belum memilih Jenis Kendaraan");
    return (false);
 }


    if (form.no_polisi.value =="== PILIH =="){
    alert("Anda belum memilih No Polisi");
    return (false);
 }

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


          
              <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="icon fa fa-info"></i> Keterangan :</h4>
                  <p>Isilah form permohonan anda dengan lengkap, terutama yang bertanda (*)</p>
              </div>
              <!-- <input type="text" name="id_permohonan"> -->
              

                <div class="form-group">
                    <label for="exampleSelect1">Nip Pegawai*</label>
                    <select class="form-control" id="nip_pegawai" style="width: 200px;" name="nip_pegawai" onchange="enabledisabletext()">
                      <option>== PILIH ==</option>
                      <?php foreach($tbl_pegawai->result_array() as $i):
                      $nip_pegawai=$i['nip_pegawai'];?>
                      <option value="<?php echo $nip_pegawai ?>"><?php echo $nip_pegawai ?></option>
                    <?php endforeach ?>

                    </select>
                </div>


<script language="javascript">
    function enabledisabletext(){
        if(document.myform.nip_pegawai.value=='== PILIH =='){
        // document.myform.no_bpjs.disabled=true;
         document.myform.nama_pegawai.value="";
        }

    }
</script>



                <div class="form-group">
                  <label>Nama Pegawai</label>
                  <input class="form-control" type="text" placeholder="Nama Pegawai" style="width: 400px;" name="nama_pegawai" required readonly="">

                </div><br>





                <h4 class="bg-primary">Pengemudi</h4>
                <div class="form-group">
                    <label for="exampleSelect1">Nip Pengemudi*</label>
                    <select class="form-control" id="nip_pengemudi" style="width: 200px;" name="nip_pengemudi" required onchange="enabledisabletext1()">
                      <option>== PILIH ==</option>
                      <?php foreach($tbl_pengemudi->result_array() as $i):
                      $nip_pengemudi=$i['nip_pengemudi']; ?>
                      <option value="<?php echo $nip_pengemudi ?>"><?php echo $nip_pengemudi ?></option>
                    <?php endforeach ?>

                    </select>
                </div>


<script language="javascript">
    function enabledisabletext1(){
        if(document.myform.nip_pengemudi.value=='== PILIH =='){
        // document.myform.no_bpjs.disabled=true;
         document.myform.nama_pengemudi.value="";
        }

    }
</script>

                <div class="form-group">
                  <label>Nama Pengemudi</label>
                  <input class="form-control" type="text" placeholder="Nama Pengemudi" style="width: 400px;" name="nama_pengemudi" required readonly="">

                </div><br>




                <h4 class="bg-primary">Kendaraan</h4>
                <div class="form-group">
                    <label for="exampleSelect1">Jenis Kendaraan*</label>
                    <select class="form-control" style="width: 200px;" name="jenis_kendaraan" id="jenis_kendaraan" required>
                      <option value="== PILIH ==">== PILIH ==</option>
                      <?php foreach($tbl_jenis_kendaraan->result_array() as $i):
                      $id_jenis_kendaraan=$i['id_jenis_kendaraan'];
                       $jenis_kendaraan=$i['jenis_kendaraan']; ?>
                      <option value="<?php echo $id_jenis_kendaraan ?>"><?php echo $jenis_kendaraan ?></option>
                      <?php endforeach ?>


                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleSelect1">Nomor Polisi*</label>
                    <select class="no_polisi form-control" style="width: 200px;" name="no_polisi" id="no_polisi" required onchange="enabledisabletext2()">
                      <option value="== PILIH ==">== PILIH ==</option>

                    </select>
                </div>


<script language="javascript">
    function enabledisabletext2(){
        if(document.myform.no_polisi.value=='== PILIH =='){
        // document.myform.no_bpjs.disabled=true;
         document.myform.nama_kendaraan.value="";
        }

    }
</script>


                <div class="form-group">
                  <label>Nama Kendaraan</label>
                  <input class="form-control" type="text" placeholder="Nama Kendaraan" style="width: 400px;" name="nama_kendaraan" required readonly="">
                </div><br>




                <h4 class="bg-primary">Lain - Lainnya</h4>
                <!-- <div class="bootstrap-timepicker">
                  <div class="form-group">
                    <label>Jam Keluar*</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="jam_keluar" readonly="" placeholder="Belum ada Jam Keluar!">
                      <div class="input-group-text"><i class="far fa-clock"></i></div>
                    </div>
                    <p style="color: red;">*[Jam Keluar] diinput oleh: Admin-Satpam</p>
                  </div>
                </div>


              <div class="form-group">
                <label>Tanggal Keluar*</label>
                <div class="input-group date">
                  <input type="text" class="form-control pull-right" readonly="" name="tanggal_keluar" placeholder="Belum ada Tanggal Keluar!">
                  <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                </div>
                <p style="color: red;">*[Tanggal Keluar] diinput oleh: Admin-Satpam</p>
              </div>


              <div class="bootstrap-timepicker">
                  <div class="form-group">
                    <label>Jam Masuk*</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="jam_masuk" readonly="" placeholder="Belum ada Jam Masuk!">
                      <div class="input-group-text"><i class="far fa-clock"></i></div>
                    </div>
                    <p style="color: red;">*[Jam Masuk] diinput oleh: Admin-Satpam</p>
                  </div>
                </div>


              <div class="form-group">
                <label>Tanggal Masuk*</label>
                <div class="input-group date">
                  <input type="text" class="form-control pull-right"  name="tanggal_masuk" placeholder="Belum ada Tanggal Masuk!" readonly="">
                  <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                </div>
                <p style="color: red;">*[Tanggal Masuk] diinput oleh: Admin-Satpam</p>
              </div> -->


              <div class="form-group">
                   <label>Keperluan</label>
                    <textarea class="form-control" name="keperluan" rows="3" placeholder="Keperluan" style="width: 400px;"></textarea>
                 </div>


                <div class="form-group">
                  <label>Tujuan*</label>
                  <input class="form-control" type="text" placeholder="Tujuan" style="width: 400px;" name="tujuan">
                </div>

                <!-- <div class="form-group">
                  <label>Status*</label>
                  <select class="form-control" style="width: 200px;" name="status">
                      <option value="== PILIH ==">== PILIH ==</option>
                      <option value="Pending">Pending</option>
                      <option value="Accepted">Accepted</option>
                      <option value="Rejected">Rejected</option>
                      <option value="Canceled">Canceled</option>
                  </select>
                </div> -->




            </div>



            <div class="modal-footer">
              <button class="btn btn-primary" type="submit"><i class="fa fa-check"></i></button>
              <button class="btn btn-warning" type="Reset"><i class="fa fa-redo"></i></button>

                <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times-circle"></i></button>
              </div>
              </form>
            </div>
          
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
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
                $status=$i['status'];
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
                            <a href="<?php echo base_url()?>admin/exportpdf/Cexport_pdf_dpermohonan/dpermohonan_by_id/<?php echo $id_permohonan; ?>" class="btn btn-success"><i class="fa fa-download"></i> Cetak Permohonan</a>
                        </div>


                         <center>
                        <img src="<?php echo base_url()?>assets/img/logo.png" style="width: 180px; height: 180px;" class="img-circle img-thumbnail"><br><br>
                        

                        <h4><b>FORM PENGGUNAAN KENDARAAN DINAS</b></h4>
                        <p><b>Detail Penggunaan Check</b></p>
                        <?php if ($status == 'Pending'): ?>
                          <span class="badge bg-warning"><?php echo $status; ?>. . .</span>
                          <?php elseif ($status == 'Accepted'): ?>
                          <span class="badge bg-success"><?php echo $status; ?></span>
                          <?php elseif ($status == 'Rejected'): ?>
                          <span class="badge bg-info"><?php echo $status; ?></span>
                          <?php elseif ($status == 'Canceled'): ?>
                          <span class="badge bg-danger"><?php echo $status; ?></span>
                        <?php endif; ?>
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
                      <input type="text" class="form-control" placeholder="Nomor Polisi" disabled="" value="<?php if ($no_polisi == "PA000001" OR $no_polisi == "PA000002"): echo "";?><?php else :?><?php echo $no_polisi ?><?php endif; ?>" style="width: 200px;">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nm. Kendaraan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Nm. Kendaraan" disabled="" value="<?php if ($nama_kendaraan == "Mobil" OR $nama_kendaraan == "Motor"): echo "";?><?php else :?><?php echo $nama_kendaraan ?><?php endif; ?>" style="width: 400px;">
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
                     <p style="color: red;">*[Jam keluar] diinput oleh: Admin-Satpam</p>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Keluar</label>
                    <div class="col-sm-10">
                      <div class="input-group date">
                        <input type="text" class="form-control pull-right" name="tanggal_keluar" placeholder="Belum ada Tanggal Keluar!" required disabled="" value="<?php if ($tanggal_keluar == NULL OR $tanggal_keluar=="0000-00-00"): echo "";?><?php else :?><?php $d = new DateTime($tanggal_keluar);echo $d->format('d-M-Y'); ?><?php endif; ?>">
                        <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                      </div>
                       <p style="color: red;">*[Tanggal keluar] diinput oleh: Admin-Satpam</p>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Jam Masuk</label>
                    <div class="col-sm-10">
                       <div class="input-group">
                      <input type="text" class="form-control" name="jam_masuk" placeholder="Belum ada Jam Masuk!" required value="<?php echo $jam_masuk;?>" disabled="">
                      <div class="input-group-text"><i class="far fa-clock"></i></div>
                    </div>
                     <p style="color: red;">*[Jam masuk] diinput oleh: Admin-Satpam</p>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                    <div class="col-sm-10">
                      <div class="input-group date">
                        <input type="text" class="form-control pull-right" name="tanggal_masuk" placeholder="Belum ada Tanggal Masuk!" required disabled="" value="<?php if ($tanggal_masuk == NULL OR $tanggal_masuk=="0000-00-00"): echo "";?><?php else :?><?php $d = new DateTime($tanggal_masuk);echo $d->format('d-M-Y'); ?><?php endif; ?>">
                        <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                      </div>
                       <p style="color: red;">*[Tanggal masuk] diinput oleh: Admin-Satpam</p>
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
                          


              <form role="form" name="myform" method="post" action="<?php echo base_url()?>admin/Cpermohonan/edit_permohonan" onsubmit="return validasi_edit(this)">



            <div class="modal-body">

              <script type="text/javascript">
  
 function validasi_edit(form){

    if (form.nip_pegawai.value =="== PILIH =="){
    alert("Anda belum memilih Nip Pegawai");
    return (false);
 }

   if (form.nip_pengemudi.value =="== PILIH =="){
    alert("Anda belum memilih Nip Pengemudi");
    return (false);
 }


   if (form.jenis_kendaraan.value =="== PILIH =="){
    alert("Anda belum memilih Jenis Kendaraan");
    return (false);
 }


    if (form.no_polisi.value =="== PILIH =="){
    alert("Anda belum memilih No Polisi");
    return (false);
 }

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


                  <h4 class="bg-primary">Pengemudi</h4>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nip Pengemudi*</label>
                    <div class="col-sm-10">
                      <select class="form-control" style="width: 400px;" name="nip_pengemudi">
                      <option>== PILIH ==</option>
                      <?php foreach($tbl_pengemudii->result_array() as $i):
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


                  <h4 class="bg-primary">Kendaraan</h4>

                  <!-- <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kend*</label>
                    <div class="col-sm-10">
                      <select class="form-control" style="width: 200px;" name="jenis_kendaraan">
                   

                          <option value="== PILIH ==" selected="">== PILIH ==</option>
                          <option <?php if ($jenis_kendaraan == "Mobil") { echo "selected"; } ?> value="Mobil">Mobil</option>
                          <option <?php if ($jenis_kendaraan == "Motor") { echo "selected"; } ?> value="Motor">Motor</option>

                          </select>
                    </div>
                  </div> -->

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kend*</label>
                    <div class="col-sm-10">
                     <input class="form-control" type="text" placeholder="Jenis Kendaraan" style="width: 200px;" name="jenis_kendaraan" readonly="" value="<?php echo $jenis_kendaraan;?>">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor Polisi*</label>
                    <div class="col-sm-10">
                      <select class="form-control" style="width: 400px;" name="no_polisi">
                      <option>== PILIH ==</option>
                      <?php foreach($tbl_kendaraann->result_array() as $i):
                      $no_polisii=$i['no_polisi'];
                      $nama_kendaraan=$i['nama_kendaraan'];?>

                      <option value="<?php echo $no_polisii ?>"

                        <?php if ($no_polisi == 
                        $no_polisii) { echo "selected"; } ?>
                        >


                        [<?php echo $no_polisii ?>] - <?php echo $nama_kendaraan ?>



                      </option>
                      <?php endforeach ?>


                    </select>
                    </div>
                  </div> <hr> <br>

                  <h4 class="bg-primary">Lain - Lainnya</h4>

                  <!-- <div class="bootstrap-timepicker">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Jam Keluar*</label>
                    <div class="col-sm-10">
                       <div class="input-group">

                        <input type="text" class="form-control" placeholder="Belum ada Jam Keluar!" name="jam_keluar" readonly="" value="<?php echo $jam_keluar;?>">
                      <div class="input-group-text"><i class="far fa-clock"></i></div>
                     
                      </div>
                      <p style="color: red;">*[Jam Keluar] diinput oleh: Admin-Satpam</p>
                    </div>
                  </div>
                </div>


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Keluar*</label>
                    <div class="col-sm-10">

                      <div class="input-group date">
                        <input type="text" class="form-control pull-right" id="datepicker2" name="tanggal_keluar" placeholder="Belum ada Tanggal Keluar!" readonly="" value="<?php echo $tanggal_keluar;?>">
                        <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                      </div>
                      <p style="color: red;">*[Tanggal Keluar] diinput oleh: Admin-Satpam</p>
                    </div>
                  </div>

                  <div class="bootstrap-timepicker">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Jam Masuk*</label>
                    <div class="col-sm-10">
                       <div class="input-group">
                      <input type="text" class="form-control" name="jam_masuk" placeholder="Belum ada Jam Masuk!" readonly="" value="<?php echo $jam_masuk;?>">
                      <div class="input-group-text"><i class="far fa-clock"></i></div>
                    </div>
                    <p style="color: red;">*[Jam masuk] diinput oleh: Admin-Satpam</p>
                    </div>
                  </div>
                </div>


                  <div class="form-group row">

                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Masuk*</label>
                    <div class="col-sm-10">
                     <div class="input-group date">
                      <input type="text" class="form-control pull-right" id="datepicker5" name="tanggal_masuk" placeholder="Belum ada Tanggal Masuk!" readonly="" value="<?php echo $tanggal_masuk;?>">
                      <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>

                    </div>
                    <p style="color: red;">*[Tanggal masuk] diinput oleh: Admin-Satpam</p>
                    </div>

                  </div>
 -->

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


                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Status*</label>
                    <div class="col-sm-10">
                      <select class="form-control" style="width: 200px;" name="status">
                      <option value="" selected="">== PILIH ==</option>
                      <option <?php if ($status == "Pending") { echo "selected"; } ?> value="Pending">Pending</option>

                      <option <?php if ($status == "Accepted") { echo "selected"; } ?> value="Accepted">Accepted</option>

                      <option <?php if ($status == "Rejected") { echo "selected"; } ?> value="Rejected">Rejected</option>

                      <option <?php if ($status == "Canceled") { echo "selected"; } ?> value="Canceled">Canceled</option>
                      </select>
                    </div>
                  </div>

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