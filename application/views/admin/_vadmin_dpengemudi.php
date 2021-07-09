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
          
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
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
                <a href="<?php echo base_url()?>admin/Cpengemudi" class="nav-link active">
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
            <h1 class="m-0 text-dark"> <i class="nav-icon far fa-circle nav-icon"></i> Data Pengemudi</h1>

            <a href="<?php echo base_url()?>admin/exportpdf/Cexport_pdf_dpengemudi/dpengemudi_all"><i class="fa fa-download"></i> Cetak Data</a>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"> <i class="nav-icon fas fa-desktop"></i> Data Master</a></li>
              <li class="breadcrumb-item active"> <i class="nav-icon far fa-circle nav-icon"></i> Data Pengemudi</li>
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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah-data">
                  <i class="fa fa-plus"></i> Tambah Data
                </button>




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
                  <th>Status</th>
                  <th>Karakter</th>
                  <th>Nip</th>
                  <th>Nama Pengemudi</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Jenis Kelamin</th>
                  <th>No Telp</th>
                  <th style="width:10px;">Aksi</th>
                </tr>
                </thead>
                <tbody>


                  <?php 
                  $no=1;
                       foreach($data->result_array() as $i):

                          $nip_pengemudi=$i['nip_pengemudi'];
                          $nama_pengemudi=$i['nama_pengemudi'];
                          $tempat_lahir=$i['tempat_lahir'];
                          $tanggal_lahir=$i['tanggal_lahir'];
                          $jenis_kelamin=$i['jenis_kelamin'];
                          $no_telp=$i['no_telp'];
                          $status_peng=$i['status_peng'];
                          $foto=$i['foto'];
                      ?>

                <tr>
                  <td><?php if ($status_peng == 'Aktif'): ?>
                          <span class="badge bg-success"><?php echo $status_peng; ?></span>
                          <?php elseif ($status_peng == 'Tidak Aktif'): ?>
                          <span class="badge bg-danger"><?php echo $status_peng; ?></span>
                        <?php endif; ?>
                  </td>
                  <td>
                    <?php if ($foto != NULL): ?>
                      <img src="<?php echo base_url(); ?>assets/pasfoto/<?php echo $foto; ?>" style="width: 80px; height: 80px;" class="img-circle img-thumbnail"><br>

                        <?php elseif ($foto == NULL & $jenis_kelamin == 'Laki-laki'): ?>
                        <img src="<?php echo base_url()?>assets/img/driver1.png" style="width: 80px; height: 80px;" class="img-circle img-thumbnail"><br>
                        <?php elseif ($foto == NULL & $jenis_kelamin =='Perempuan'): ?>
                        <img src="<?php echo base_url()?>assets/img/driver2.png" style="width: 80px; height: 80px;" class="img-circle img-thumbnail"><br>
                        <?php endif; ?></td>
                  <td><?php echo $nip_pengemudi; ?></td>
                  <td><?php echo $nama_pengemudi; ?></td>
                  <td><?php echo $tempat_lahir; ?></td>
                  <td><?php $d = new DateTime($tanggal_lahir);

                    echo $d->format('d-M-Y'); ?></td>
                  <td><?php echo $jenis_kelamin; ?></td>
                  <td><?php echo $no_telp; ?></td>
                  <td>
                   <span class="badge bg-success"><a href="#" data-toggle="modal" data-target="#lihat-data<?php echo $nip_pengemudi;?>"><i class="fa fa-eye"> Lihat</i></a></span>

                   <span class="badge bg-warning"><a href="#" data-toggle="modal" data-target="#edit-data<?php echo $nip_pengemudi;?>"><i class="fa fa-edit"> Ubah</i></a></span>

                   <span class="badge bg-danger"><a href="<?php echo base_url()?>admin/Cpengemudi/hapus_pengemudi/<?php echo $nip_pengemudi; ?>" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')" ><i class="fa fa-trash"> Hapus</i></a></span>

                  </td>
                </tr>

                <?php endforeach;?>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>Status</th>
                  <th>Karakter</th>
                  <th>Nip</th>
                  <th>Nama Pengemudi</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Jenis Kelamin</th>
                  <th>No Telp</th>
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






<!-- =====================MODAL TAMBAH DATA========================= -->    
<div class="modal fade" id="tambah-data" data-backdrop="static">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><i class="fa fa-plus"></i> Tambah Data Pengemudi</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

                        <form role="form" name="myform" method="post" action="<?php echo base_url()?>admin/Cpengemudi/tambah_pengemudi" onsubmit="return validasi_tambah(this)" enctype="multipart/form-data">

                        <div class="modal-body">

<script type="text/javascript">
  function validasi_tambah(form){

  if (form.nip_pengemudi.value == ""){
    alert("Nip Pengemudi masih kosong!");
    form.nip_pengemudi.focus();
    return (false);
  }


    var mincar = 10;
  if (form.nip_pengemudi.value.length < mincar){
    alert("Panjang Nip Pengemudi Minimal 10 Karakter!");
    form.nip_pengemudi.focus();
    return (false);
  }


  if (form.nama_pengemudi.value == ""){
    alert("Nama Pengemudi masih kosong!");
    form.nama_pengemudi.focus();
    return (false);
  }

  if (form.tempat_lahir.value == ""){
    alert("Tempat Lahir masih kosong!");
    form.tempat_lahir.focus();
    return (false);
  }


    if (form.tanggal_lahir.value == ""){
    alert("Tanggal Lahir masih kosong!");
    form.tanggal_lahir.focus();
    return (false);
  }


  if (form.jenis_kelamin.value =="== PILIH =="){
    alert("Anda belum memilih jenis kelamin!");
    return (false);
 }


 if (form.no_telp.value != ""){
  var x = (form.no_telp.value);
  var status = true;
  var list = new Array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
  for (i=0; i<=x.length-1; i++)
  {
  if (x[i] in list) cek = true;
  else cek = false;
 status = status && cek;
  }
  if (status == false)
  {
  alert("Nomor Telp harus angka!");
  form.no_telp.focus();
  return false;
  }
  } 


  if (form.no_telp.value == ""){
    alert("Nomor Telp masih kosong!");
    form.no_telp.focus();
    return (false);
  }


      var mincar = 12;
  if (form.no_telp.value.length < mincar){
    alert("Panjang Nomor Telp Minimal 12 Karakter!");
    form.no_telp.focus();
    return (false);
  }

  if (form.no_telp.value.length > mincar){
    alert("Panjang Nomor Telp Minimal 12 Karakter!");
    form.no_telp.focus();
    return (false);
  }



  return (true);
  }



</script>

                          <div class="alert alert-warning alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-info"></i> Keterangan :</h4>
                            <p>Isilah form pengemudi anda dengan lengkap, terutama yang bertanda (*)</p>
                        </div>
                    


                        <div class="form-group">
                          <label>Nip Pengemudi*</label>
                          <input class="form-control" type="text" placeholder="Nip Pengemudi" style="width: 200px;" name="nip_pengemudi">

                        </div>


                        <div class="form-group">
                          <label>Nama Pengemudi*</label>
                          <input class="form-control" type="text" placeholder="Nama Pengemudi" style="width: 400px;" name="nama_pengemudi">

                        </div>


                        <div class="form-group">
                          <label>Tempat Lahir</label>
                          <input class="form-control" type="text" placeholder="Tempat Lahir" style="width: 400px;" name="tempat_lahir">

                        </div>


                        <div class="form-group">
                          <label>Tanggal Lahir</label>
                          <div class="input-group date">
                            <input type="text" class="form-control pull-right" id="datepicker" name="tanggal_lahir" placeholder="Tanggal Lahir">
                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                          </div>
                        </div>


                        <div class="form-group">
                          <label for="exampleSelect1">Jenis Kelamin*</label>
                          <select class="form-control" style="width: 200px;" name="jenis_kelamin">
                            <option value="== PILIH ==">== PILIH ==</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                          </select>
                      </div>


                      <div class="form-group">
                        <label>Nomor Telp*</label>
                        <input class="form-control" type="text" placeholder="Nomor Telp" style="width: 200px;" name="no_telp">
                      </div>

                      <div class="form-group">
                        <label>Upload Foto</label>
                        <input type="file" name="filefoto"  class="form-control" style="width: 400px;">
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





<?php 
                foreach($data->result_array() as $i):
                    $nip_pengemudi=$i['nip_pengemudi'];
                    $nama_pengemudi=$i['nama_pengemudi'];
                    $tempat_lahir=$i['tempat_lahir'];
                    $tanggal_lahir=$i['tanggal_lahir'];
                    $jenis_kelamin=$i['jenis_kelamin'];
                    $no_telp=$i['no_telp'];
                    $foto=$i['foto'];
                ?>





<!-- =====================MODAL LIHAT DATA========================= -->    
<div class="modal fade" id="lihat-data<?php echo $nip_pengemudi;?>" data-backdrop="static">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><i class="nav-icon far fa-id-card nav-icon"></i> Detail Pengemudi</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>



                        <div class="modal-body">



                          <div class="alert alert-warning alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-info"></i> Keterangan :</h4>
                            <p>Ceklah isi form pengemudi anda dengan lengkap, terutama yang bertanda (*). Jika isi form sudah lengkap silakan diunduh. Terimakasih.</p>
                            <a href="<?php echo base_url()?>admin/exportpdf/Cexport_pdf_dpengemudi/dpengemudi_by_id/<?php echo $nip_pengemudi ?>" class="btn btn-success"><i class="fa fa-download"></i> Cetak Pengemudi</a>
                        </div>


                         <center>
                        <?php if ($foto != NULL): ?>
                      <img src="<?php echo base_url(); ?>assets/pasfoto/<?php echo $foto; ?>" style="width: 180px; height: 180px;" class="img-circle img-thumbnail"><br>

                        <?php elseif ($foto == NULL & $jenis_kelamin == 'Laki-laki'): ?>
                        <img src="<?php echo base_url()?>assets/img/driver1.png" style="width: 180px; height: 180px;" class="img-circle img-thumbnail"><br>
                        <?php elseif ($foto == NULL & $jenis_kelamin =='Perempuan'): ?>
                        <img src="<?php echo base_url()?>assets/img/driver2.png" style="width: 180px; height: 180px;" class="img-circle img-thumbnail"><br>
                        <?php endif; ?>

                        <h5><b><?php echo $nama_pengemudi;?></b></h5>
                        <p><b><?php echo $nip_pengemudi;?></b></p>
                      </center><br>
                      
                      <hr>





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
                  </div>


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Tempat Lahir" disabled="" value="<?php echo $tempat_lahir;?>" style="width: 400px;">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                      <div class="input-group date">
                        <input type="text" class="form-control pull-right" name="tanggal_lahir" placeholder="Tanggal Lahir" required disabled="" value="<?php $d = new DateTime($tanggal_lahir); echo $d->format('d-M-Y'); ?>">
                        <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                      </div>
                    </div>
                  </div>


                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Jenis Kelamin" disabled="" value="<?php echo $jenis_kelamin;?>" style="width: 400px;">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor Telp</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Nomor Telp" disabled="" value="<?php echo $no_telp;?>" style="width: 200px;">
                    </div>
                  </div>

                    


                        </div>







                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
<!-- =============================================== -->



<!-- =====================MODAL EDIT DATA========================= -->    
<div class="modal fade" id="edit-data<?php echo $nip_pengemudi;?>" data-backdrop="static">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><i class="fa fa-edit"></i> Ubah Data <b>[<?php echo $nama_pengemudi; ?>]</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

                        <form role="form" name="myform" method="post" action="<?php echo base_url()?>admin/Cpengemudi/edit_pengemudi" onsubmit="return validasi_edit(this)" enctype="multipart/form-data">


<script type="text/javascript">
  function validasi_edit(form){

  if (form.nip_pengemudi.value == ""){
    alert("Nip Pengemudi masih kosong!");
    form.nip_pengemudi.focus();
    return (false);
  }


    var mincar = 10;
  if (form.nip_pengemudi.value.length < mincar){
    alert("Panjang Nip Pengemudi Minimal 10 Karakter!");
    form.nip_pengemudi.focus();
    return (false);
  }


  if (form.nama_pengemudi.value == ""){
    alert("Nama Pengemudi masih kosong!");
    form.nama_pengemudi.focus();
    return (false);
  }

  if (form.tempat_lahir.value == ""){
    alert("Tempat Lahir masih kosong!");
    form.tempat_lahir.focus();
    return (false);
  }


    if (form.tanggal_lahir.value == ""){
    alert("Tanggal Lahir masih kosong!");
    form.tanggal_lahir.focus();
    return (false);
  }


  if (form.jenis_kelamin.value =="== PILIH =="){
    alert("Anda belum memilih jenis kelamin!");
    return (false);
 }


 if (form.no_telp.value != ""){
  var x = (form.no_telp.value);
  var status = true;
  var list = new Array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
  for (i=0; i<=x.length-1; i++)
  {
  if (x[i] in list) cek = true;
  else cek = false;
 status = status && cek;
  }
  if (status == false)
  {
  alert("Nomor Telp harus angka!");
  form.no_telp.focus();
  return false;
  }
  } 


  if (form.no_telp.value == ""){
    alert("Nomor Telp masih kosong!");
    form.no_telp.focus();
    return (false);
  }


      var mincar = 12;
  if (form.no_telp.value.length < mincar){
    alert("Panjang Nomor Telp Minimal 12 Karakter!");
    form.no_telp.focus();
    return (false);
  }

  if (form.no_telp.value.length > mincar){
    alert("Panjang Nomor Telp Minimal 12 Karakter!");
    form.no_telp.focus();
    return (false);
  }



  return (true);
  }



</script>


                        <div class="modal-body">


                        <center>
                        <?php if ($foto != NULL): ?>
                      <img src="<?php echo base_url(); ?>assets/pasfoto/<?php echo $foto; ?>" style="width: 180px; height: 180px;" class="img-circle img-thumbnail"><br>

                        <?php elseif ($foto == NULL & $jenis_kelamin == 'Laki-laki'): ?>
                        <img src="<?php echo base_url()?>assets/img/driver1.png" style="width: 180px; height: 180px;" class="img-circle img-thumbnail"><br>
                        <?php elseif ($foto == NULL & $jenis_kelamin =='Perempuan'): ?>
                        <img src="<?php echo base_url()?>assets/img/driver2.png" style="width: 180px; height: 180px;" class="img-circle img-thumbnail"><br>
                        <?php endif; ?>

                        <h5><b><?php echo $nama_pengemudi;?></b></h5>
                        <p><b><?php echo $nip_pengemudi;?></b></p>
                      </center><br>
                      
                      <hr>
                    


                        <div class="form-group">
                          <label>Nip Pengemudi*</label>
                          <input class="form-control" type="text" placeholder="Nip Pengemudi" readonly="" name="nip_pengemudi" style="width: 200px;" value="<?php echo $nip_pengemudi;?>">

                        </div>


                        <div class="form-group">
                          <label>Nama Pengemudi*</label>
                          <input class="form-control" type="text" placeholder="Nama Pengemudi" name="nama_pengemudi" style="width: 400px;" value="<?php echo $nama_pengemudi;?>">

                        </div>


                        <div class="form-group">
                          <label>Tempat Lahir</label>
                          <input class="form-control" type="text" placeholder="Tempat Lahir" name="tempat_lahir" style="width: 400px;" value="<?php echo $tempat_lahir;?>">

                        </div>


                        <div class="form-group">
                          <label>Tanggal Lahir</label>
                          <div class="input-group date">
                            <input type="text" class="form-control pull-right" id="datepicker1" name="tanggal_lahir" value="<?php echo $tanggal_lahir;?>" placeholder="Tanggal Lahir">
                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                          </div>
                        </div>


                        <div class="form-group">
                          <label for="exampleSelect1">Jenis Kelamin*</label>
                          <select class="form-control" style="width: 200px;" name="jenis_kelamin" required>
                   
                          <option value="" selected="">== PILIH ==</option>
                          <option <?php if ($jenis_kelamin == "Laki-laki") { echo "selected"; } ?> value="Laki-laki">Laki-laki</option>
                          <option <?php if ($jenis_kelamin == "Perempuan") { echo "selected"; } ?> value="Perempuan">Perempuan</option>

                          </select>
                      </div>


                      <div class="form-group">
                        <label>Nomor Telp*</label>
                        <input class="form-control" type="text" placeholder="Nomor Telp" name="no_telp" style="width: 200px;" value="<?php echo $no_telp;?>">
                      </div>


                      <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Upload Foto
                      <a href="#" class="btn btn-xs btn-default">Hapus Foto</a></label>

                    <?php if ($foto != NULL): ?>
                      <img src="<?php echo base_url(); ?>assets/pasfoto/<?php echo $foto; ?>" style="width: 100px; height: 100px;" class="img-circle img-thumbnail"><br>

                        <?php elseif ($foto == NULL & $jenis_kelamin == 'Laki-laki'): ?>
                        <img src="<?php echo base_url()?>assets/img/driver1.png" style="width: 100px; height: 100px;" class="img-circle img-thumbnail"><br>
                        <?php elseif ($foto == NULL & $jenis_kelamin =='Perempuan'): ?>
                        <img src="<?php echo base_url()?>assets/img/driver2.png" style="width: 100px; height: 100px;" class="img-circle img-thumbnail"><br>
                        <?php endif; ?>

                    <div class="col-sm-10">

                      <input type="file" name="filefoto"  class="form-control" value="<?php echo $foto; ?>" style="width: 400px;">
                    </div>

                
                  </div>

                  <input type="hidden" name="foto_lama" value="<?php echo $foto; ?>">






                        </div>







                        <div class="modal-footer">
                          <button class="btn btn-primary" type="submit"><i class="fa fa-check"></i></button>
                          <button class="btn btn-warning" type="reset"><i class="fa fa-redo"></i></button>

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



<?php endforeach;?>    