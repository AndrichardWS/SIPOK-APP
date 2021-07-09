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
                <a href="<?php echo base_url()?>admin/Cpegawai" class="nav-link active">
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










<?php 
                foreach($data->result_array() as $i):
                    $nip_pegawai=$i['nip_pegawai'];
                    $nama_pegawai=$i['nama_pegawai'];
                    $tempat_lahir=$i['tempat_lahir'];
                    $tanggal_lahir=$i['tanggal_lahir'];

                    $alamat=$i['alamat'];
                    $jenis_kelamin=$i['jenis_kelamin'];
                    $no_telp=$i['no_telp'];
                    $email=$i['email'];
                    $kd_fungsi=$i['kd_fungsi'];
                    $uraian=$i['uraian'];

                    $id_pengguna=$i['id_pengguna'];
                    $username=$i['username'];
                    $password=$i['password'];
                    $level=$i['level'];
                    $foto=$i['foto'];
                ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> <i class="nav-icon far fa-id-card nav-icon"></i> Detail Pegawai</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"> <i class="nav-icon fas fa-desktop"></i> Data Master</a></li>
              <li class="breadcrumb-item"><a href="#"> <i class="nav-icon far fa-circle nav-icon"></i> Data Pegawai</a></li>
              <li class="breadcrumb-item"><?php echo $nama_pegawai;?></li>
              <li class="breadcrumb-item active"> <i class="nav-icon far fa-id-card nav-icon"></i> Detail Pegawai</li>
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
                <!-- <h3 class="card-title"><i class="fa fa-envelope"> Permohonan Kendaraan</i></h3> -->
                <a href="<?php echo base_url()?>admin/Cpegawai" class="btn btn-danger"><i class="fa fa-chevron-left"></i> Kembali</a>


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


              <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="icon fa fa-info"></i> Keterangan :</h4>
                  <p>Ceklah isi form pegawai anda dengan lengkap, terutama yang bertanda (*). Jika isi form sudah lengkap silakan diunduh. Terimakasih.</p>
                  <a href="<?php echo base_url()?>admin/exportpdf/Cexport_pdf_dpegawai/dpegawai_by_id/<?php echo $nip_pegawai ?>" class="btn btn-success"><i class="fa fa-download"></i> Cetak Pegawai</a>
          
                  <a href="<?php echo base_url()?>admin/exportpdf/Cexport_pdf_driwayat/driwayat_all/<?php echo $nip_pegawai ?>" class="btn btn-success"><i class="fa fa-download"></i> Cetak Data Riwayat Pangkat</a>
              </div>




              <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true"><i class="fa fa-id-card"></i> Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false"><i class="fa fa-star"></i> Pangkat</a>
                  </li>


                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                     

            
                <h4><i class="fa fa-id-card"></i> Profile Pegawai</h4><hr>

                      <center>
                        <?php if ($foto != NULL): ?>
                      <img src="<?php echo base_url(); ?>assets/pasfoto/<?php echo $foto; ?>" style="width: 180px; height: 180px;" class="img-circle img-thumbnail"><br>

                        <?php elseif ($foto == NULL & $jenis_kelamin == 'Laki-laki'): ?>
                        <img src="<?php echo base_url()?>assets/img/man.png" style="width: 180px; height: 180px;" class="img-circle img-thumbnail"><br>
                        <?php elseif ($foto == NULL & $jenis_kelamin =='Perempuan'): ?>
                        <img src="<?php echo base_url()?>assets/img/woman.png" style="width: 180px; height: 180px;" class="img-circle img-thumbnail"><br>
                        <?php endif; ?>

                        <h5><b><?php echo $nama_pegawai;?></b></h5>
                        <p><b><?php echo $nip_pegawai;?></b></p>
                      </center><br>
                      <a href="#" data-toggle="modal" data-target="#edit-data" style="float: right;"><i class="fa fa-edit"></i> Ubah Data</a><br>
                      <hr>


                     <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nip Pegawai</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Nip Pegawai" disabled="" value="<?php echo $nip_pegawai;?>" style="width: 200px;">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Pegawai</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Nama Pegawai" disabled="" value="<?php echo $nama_pegawai;?>" style="width: 400px;">
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
                        <input type="text" class="form-control pull-right" id="" name="tanggal_lahir" placeholder="Tanggal Lahir" required disabled="" value="<?php $d = new DateTime($tanggal_lahir); echo $d->format('d-M-Y'); ?>">
                        <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                      </div>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                     <textarea class="form-control" name="alamat" rows="3" placeholder="Alamat" required="" disabled="" style="width: 400px;"><?php echo $alamat;?></textarea>
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


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Email" disabled="" value="<?php echo $email;?>" style="width: 400px;">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Fungsi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Fungsi" disabled="" value="[<?php echo $kd_fungsi;?>] - <?php echo $uraian;?>" style="width: 400px;">
                    </div>
                  </div><hr>


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Username" disabled="" value="<?php echo $username;?>" style="width: 200px;">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Password" disabled="" value="<?php echo $password;?>" style="width: 400px;">
                    </div>
                  </div>

                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">level</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="level" disabled="" value="<?php echo $level;?>" style="width: 200px;">
                    </div>
                  </div>






                  </div>



                  <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                     

           <div class="row">
          <div class="col-md-12">

          <!-- <div class="card"> -->
            <!-- <h3 class="card-title"><i class="fa fa-envelope"> Permohonan Kendaraan</i></h3> -->
                <h4><i class="fa fa-star"></i> Riwayat Pangkat Pegawai</h4><hr>

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah-data-pangkat"><i class="fa fa-plus"></i> Tambah Data</button>
              


              <!-- /.card-header -->
              <div class="card-body">




              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <!-- <th>Nip Pegawai</th> -->
                  <th style="width: 10px;">No</th>
                  <th>No SK Pangkat</th>
                  <th>Tgl SK Pangkat</th>
                  <th>Kode Pangkat</th>
                  <th>Nama Pangkat</th>
                  <th style="width: 10px;">Aksi</th>
                </tr>
                </thead>
                <tbody>


                  <?php 
                  $no=1;
                       foreach($tbl_riwayat_pangkat->result_array() as $i):


                          $id_riwayat_pangkat=$i['id_riwayat_pangkat'];
                          // $nip_pegawai=$i['nip_pegawai'];
                          $no_sk_pangkat=$i['no_sk_pangkat'];
                          $tanggal_sk_pangkat=$i['tanggal_sk_pangkat'];
                          $kd_pangkat=$i['kd_pangkat'];
                          $uraian=$i['uraian'];
                      ?>


                <tr>
                  <td><?php echo $no++; ?></td>           
                  <td><?php echo $no_sk_pangkat; ?></td>
                  <td><?php $d = new DateTime($tanggal_sk_pangkat);

                    echo $d->format('d-M-Y'); ?></td>
                  <td><?php echo $kd_pangkat; ?></td>
                  <td><?php echo $uraian; ?></td>

                  <td>

                   <span class="badge bg-success"><a href="#" data-toggle="modal" data-target="#lihat-data-pangkat<?php echo $id_riwayat_pangkat;?>"><i class="fa fa-eye"> Lihat</i></a></span> <br>

                   <span class="badge bg-warning"><a href="#" data-toggle="modal" data-target="#edit-data-pangkat<?php echo $id_riwayat_pangkat;?>"><i class="fa fa-edit"> Ubah</i></a></span> <br>

                   <span class="badge bg-danger"><a href="<?php echo base_url()?>admin/Cpegawai/hapus_pangkat/<?php echo $id_riwayat_pangkat; ?>" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')" ><i class="fa fa-trash"> Hapus</i></a></span>

                   
                  </td>
                </tr>

                <?php endforeach;?>
                
                </tbody>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <!-- <th>Nip Pegawai</th> -->
                    <th>No SK Pangkat</th>
                    <th>Tgl SK Pangkat</th>
                    <th>Kode Pangkat</th>
                    <th>Nama Pangkat</th>
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








                  </div>



                  </div>
                </div>
              </div>


           

                
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
  

  




<!-- =====================MODAL EDIT DATA========================= -->    

   <div class="modal fade" id="edit-data" data-backdrop="static">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><i class="fa fa-edit"></i> Ubah Data <b>[<?php echo $nama_pegawai; ?>]</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>



           <form role="form" name="myform" method="post" action="<?php echo base_url()?>admin/Cpegawai/edit_pegawai" onsubmit="return validasi_edit(this)" enctype="multipart/form-data">

<script type="text/javascript">
function validasi_edit(form){

  if (form.nip_pegawai.value != ""){
  var x = (form.nip_pegawai.value);
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
  alert("Nip Pegawai harus angka!");
  form.nip_pegawai.focus();
  return false;
  }
  } 


  if (form.nip_pegawai.value == ""){
    alert("Nip Pegawai masih kosong!");
    form.nip_pegawai.focus();
    return (false);
  }


    var mincar = 5;
  if (form.nip_pegawai.value.length < mincar){
    alert("Panjang Nip Pegawai Minimal 5 Karakter!");
    form.nip_pegawai.focus();
    return (false);
  }


  if (form.nama_pegawai.value == ""){
    alert("Nama Pegawai masih kosong!");
    form.nama_pegawai.focus();
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

    if (form.alamat.value == ""){
    alert("Alamat masih kosong!");
    form.alamat.focus();
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


  if (form.email.value == ""){
    alert("Email masih kosong!");
    form.email.focus();
    return (false);
  }


   if (form.kd_fungsi.value =="== PILIH =="){
    alert("Anda belum memilih fungsi!");
    return (false);
 }


if (form.username.value == ""){
    alert("Username masih kosong!");
    form.username.focus();
    return (false);
  }

if (form.password.value == ""){
    alert("Password masih kosong!");
    form.password.focus();
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
                        <img src="<?php echo base_url()?>assets/img/man.png" style="width: 180px; height: 180px;" class="img-circle img-thumbnail"><br>
                        <?php elseif ($foto == NULL & $jenis_kelamin =='Perempuan'): ?>
                        <img src="<?php echo base_url()?>assets/img/woman.png" style="width: 180px; height: 180px;" class="img-circle img-thumbnail"><br>
                        <?php endif; ?>
                <h5><b><?php echo $nama_pegawai;?></b></h5>
                <p><b><?php echo $nip_pegawai;?></b></p>
              </center><br>
              
              <hr>


              <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nip pegawai*</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Nip Pegawai" readonly="" name="nip_pegawai" value="<?php echo $nip_pegawai;?>" style="width: 200px;">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Pegawai*</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Nama Pegawai" name="nama_pegawai" value="<?php echo $nama_pegawai;?>" style="width: 400px;">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" value="<?php echo $tempat_lahir;?>" style="width: 400px;">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                      <div class="input-group date">
                        <input type="text" class="form-control pull-right" id="datepicker" name="tanggal_lahir" placeholder="Tanggal Lahir" required value="<?php echo $tanggal_lahir;?>">
                        <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                      </div>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                     <textarea class="form-control" name="alamat" rows="3" placeholder="Alamat" name="alamat" required="" style="width: 400px;"><?php echo $alamat;?></textarea>
                    </div>
                  </div>



                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Kelamin*</label>
                     <div class="col-sm-10">

                    <select class="form-control" style="width: 200px;" name="jenis_kelamin" required>
                   
                    <option value="" selected="">== PILIH ==</option>
                    <option <?php if ($jenis_kelamin == "Laki-laki") { echo "selected"; } ?> value="Laki-laki">Laki-laki</option>
                    <option <?php if ($jenis_kelamin == "Perempuan") { echo "selected"; } ?> value="Perempuan">Perempuan</option>

                    </select>

                  
                     </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor Telp*</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Nomor Telp" name="no_telp" value="<?php echo $no_telp;?>" style="width: 200px;">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email*</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $email;?>" style="width: 400px;">
                    </div>
                  </div>



                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Fungsi*</label>
                     <div class="col-sm-10">

                    <select class="form-control" style="width: 400px;" name="kd_fungsi" required>
                   
                    <option value="" selected="">== PILIH ==</option>

                  <?php foreach($tbl_master_fungsi->result_array() as $i):
                      $kd_fungsii=$i['kd_fungsi'];
                      $uraian=$i['uraian'];?>

                      <option value="<?php echo $kd_fungsii ?>"
                        <?php if ($kd_fungsi == 
                        $kd_fungsii) { echo "selected"; } ?>
                        >


                        [<?php echo $kd_fungsii ?>] - <?php echo $uraian ?>
                        

                      </option>
                      <?php endforeach ?>




                    </select>
                     </div>
                  </div>

                  <hr>

                  <input type="hidden" name="id_pengguna" value="<?php echo $id_pengguna;?>">

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Username*</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $username;?>" style="width: 400px;">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Password*</label>
                    <div class="col-sm-10">
                      
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#reset-password<?php echo $id_pengguna;?>"><i class="fa fa-redo"></i> Reset Password</button>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Upload Foto
                      <a href="#" class="btn btn-xs btn-default">Hapus Foto</a></label>

                    <?php if ($foto != NULL): ?>
                      <img src="<?php echo base_url(); ?>assets/pasfoto/<?php echo $foto; ?>" style="width: 100px; height: 100px;" class="img-circle img-thumbnail"><br>

                        <?php elseif ($foto == NULL & $jenis_kelamin == 'Laki-laki'): ?>
                        <img src="<?php echo base_url()?>assets/img/man.png" style="width: 100px; height: 100px;" class="img-circle img-thumbnail"><br>
                        <?php elseif ($foto == NULL & $jenis_kelamin =='Perempuan'): ?>
                        <img src="<?php echo base_url()?>assets/img/woman.png" style="width: 100px; height: 100px;" class="img-circle img-thumbnail"><br>
                        <?php endif; ?>

                    <div class="col-sm-10">

                      <input type="file" name="filefoto"  class="form-control" value="<?php echo $foto; ?>" style="width: 400px;">
                    </div>

                
                  </div>

                  <input type="hidden" name="foto_lama" value="<?php echo $foto; ?>">
          
             




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
            <form role="form" name="myform" method="post" action="<?php echo base_url()?>admin/Cpegawai/reset_password_pegawai">
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













 <!-- =====================MODAL TAMBAH DATA PANGKAT========================= -->    
<div class="modal fade" id="tambah-data-pangkat" data-backdrop="static">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><i class="fa fa-plus"></i> Tambah Data Pangkat</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

                        <form role="form" name="myform" method="post" action="<?php echo base_url()?>admin/Cpegawai/tambah_pangkat" onsubmit="return validasi_tambah_pangkat(this)">


<script type="text/javascript">
  function validasi_tambah_pangkat(form){

      if (form.no_sk_pangkat.value == ""){
    alert("No SK Pangkat masih kosong!");
    form.no_sk_pangkat.focus();
    return (false);
  }


        if (form.tanggal_sk_pangkat.value == ""){
    alert("Tanggal SK Pangkat masih kosong!");
    form.tanggal_sk_pangkat.focus();
    return (false);
  }


    if (form.kd_pangkat.value == "== PILIH =="){
    alert("Anda belum memilih Kode Pangkat!");
    return (false);
 }

  return (true);
  }
</script>

                        <div class="modal-body">


                          <div class="alert alert-warning alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-info"></i> Keterangan :</h4>
                            <p>Isilah form riwayat pangkat anda dengan lengkap, terutama yang bertanda (*)</p>
                        </div>
                    
                        <input type="hidden" name="id_riwayat_pangkat" value="<?php echo $kode;?>">
                        <div class="form-group">
                          <label>Nip Pegawai*</label>
                          <input class="form-control" type="text" placeholder="Nip Pegawai" style="width: 200px;" name="nip_pegawai" readonly="" value="<?php echo $nip_pegawai;?>">

                        </div>


                        <div class="form-group">
                          <label>No SK Pangkat*</label>
                          <input class="form-control" type="text" placeholder="No SK Pangkat" style="width: 200px;" name="no_sk_pangkat">

                        </div>


                        <div class="form-group">
                          <label>Tanggal SK Pangkat*</label>
                          <div class="input-group date">
                            <input type="text" class="form-control pull-right" id="datepicker1" name="tanggal_sk_pangkat" placeholder="Tanggal SK Pangkat">
                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                          </div>
                        </div>


                        <div class="form-group">
                          <label for="exampleSelect1">Kode Pangkat*</label>
                          <select class="form-control" style="width: 400px;" name="kd_pangkat">
                            <option value="== PILIH ==">== PILIH ==</option>


                            <?php foreach($tbl_master_pangkat->result_array() as $i):
                            $kd_pangkat=$i['kd_pangkat'];
                            $uraian=$i['uraian'];?>
                            <option value="<?php echo $kd_pangkat ?>">[<?php echo $kd_pangkat ?>] - <?php echo $uraian ?></option>
                            <?php endforeach ?>


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
<?php endforeach;?>











<?php 
                foreach($tbl_riwayat_pangkat->result_array() as $i):
                    $id_riwayat_pangkat=$i['id_riwayat_pangkat'];
                    $nip_pegawai=$i['nip_pegawai'];
                    $no_sk_pangkat=$i['no_sk_pangkat'];
                    $tanggal_sk_pangkat=$i['tanggal_sk_pangkat'];
                    $kd_pangkat=$i['kd_pangkat'];
                    $uraian=$i['uraian'];
                ?>

<!-- =====================MODAL LIHAT DATA========================= -->    

   <div class="modal fade" id="lihat-data-pangkat<?php echo $id_riwayat_pangkat;?>" data-backdrop="static">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><i class="nav-icon far fa-id-card nav-icon"></i> Detail Riwayat Pangkat<b> [<?php echo $nama_pegawai;?>]</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>


            <div class="modal-body">

              <div class="alert alert-warning alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-info"></i> Keterangan :</h4>
                            <p>Ceklah isi form riwayat pangkat anda dengan lengkap, terutama yang bertanda (*). Jika isi form sudah lengkap silakan diunduh. Terimakasih.</p>
                            <a href="<?php echo base_url()?>admin/exportpdf/Cexport_pdf_driwayat/driwayat_by_id/<?php echo $id_riwayat_pangkat ?>" class="btn btn-success"><i class="fa fa-download"></i> Cetak Riwayat Pangkat</a>
                        </div>

              <center>
                <img src="<?php echo base_url()?>assets/img/riwayat.png" style="width: 180px; height: 180px;" class="img-circle img-thumbnail"><br><br>
                

                <h4><b>FORM RIWAYAT PANGKAT</b></h4>
                <p><b><?php echo $nama_pegawai;?></b></p>
              </center><br>
              
              <hr>


              <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nip pegawai*</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Nip Pegawai" disabled="" name="nip_pegawai" value="<?php echo $nip_pegawai;?>" style="width: 200px;">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">No SK Pangkat*</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" disabled="" placeholder="No SK Pangkat" name="no_sk_pangkat" value="<?php echo $no_sk_pangkat;?>" style="width: 200px;">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tgl SK Pangkat*</label>
                    <div class="col-sm-10">
                      <div class="input-group date">
                        <input type="text" class="form-control pull-right" disabled="" id="" name="tanggal_lahir" placeholder="Tgl SK Pangkat" required value="<?php $d = new DateTime($tanggal_sk_pangkat); echo $d->format('d-M-Y'); ?>">
                        <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                      </div>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Kode Pangkat*</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" disabled="" placeholder="Kode Pangkat" name="kd_pangkat" value="<?php echo $kd_pangkat;?>" style="width: 200px;">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Pangkat*</label>
                    <div class="col-sm-10">
                          <textarea class="form-control" rows="3" placeholder="Uraian ..." style="width: 400px;" name="uraian" disabled><?php echo $uraian;?></textarea>
                        </div>
                        
                        </div>
                  </div>

                   <hr>


            </div>



          
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
<!-- ============================================================================== -->










<!-- =====================MODAL EDIT DATA========================= -->    

   <div class="modal fade" id="edit-data-pangkat<?php echo $id_riwayat_pangkat;?>" data-backdrop="static">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><i class="fa fa-edit"></i> Ubah Data Riwayat Pangkat<b> [<?php echo $nama_pegawai;?>]</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>



           <form role="form" name="myform" method="post" action="<?php echo base_url()?>admin/Cpegawai/edit_pangkat" onsubmit="return validasi_edit_pangkat(this)">


<script type="text/javascript">
  function validasi_edit_pangkat(form){

      if (form.no_sk_pangkat.value == ""){
    alert("No SK Pangkat masih kosong!");
    form.no_sk_pangkat.focus();
    return (false);
  }


        if (form.tanggal_sk_pangkat.value == ""){
    alert("Tanggal SK Pangkat masih kosong!");
    form.tanggal_sk_pangkat.focus();
    return (false);
  }


    if (form.kd_pangkat.value == "== PILIH =="){
    alert("Anda belum memilih Kode Pangkat!");
    return (false);
 }

  return (true);
  }
</script>


            <div class="modal-body">


              <center>
                <img src="<?php echo base_url()?>assets/img/riwayat.png" style="width: 180px; height: 180px;" class="img-circle img-thumbnail"><br><br>
                

                <h4><b>FORM RIWAYAT PANGKAT</b></h4>
                <p><b><?php echo $nama_pegawai;?></b></p>
              </center><br>
              
              <hr>

              <input type="hidden" name="id_riwayat_pangkat" value="<?php echo $id_riwayat_pangkat;?>">

              <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nip pegawai*</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Nip Pegawai" readonly="" name="nip_pegawai" value="<?php echo $nip_pegawai;?>" style="width: 200px;">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">No SK Pangkat*</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="No SK Pangkat" name="no_sk_pangkat" value="<?php echo $no_sk_pangkat;?>" style="width: 200px;">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tgl SK Pangkat*</label>
                    <div class="col-sm-10">
                      <div class="input-group date">
                        <input type="text" class="form-control pull-right" id="datepicker2" name="tanggal_sk_pangkat" placeholder="Tgl SK Pangkat" required value="<?php echo $tanggal_sk_pangkat;?>">
                        <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                      </div>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Kode Pangkat*</label>
                     <div class="col-sm-10">

                    <select class="form-control" style="width: 400px;" name="kd_pangkat" required>
                   
                    <option value="" selected="">== PILIH ==</option>

                  <?php foreach($tbl_master_pangkat->result_array() as $i):
                      $kd_pangkatt=$i['kd_pangkat'];
                      $uraian=$i['uraian'];?>

                      <option value="<?php echo $kd_pangkatt ?>"
                        <?php if ($kd_pangkat == 
                        $kd_pangkatt) { echo "selected"; } ?>
                        >


                        [<?php echo $kd_pangkatt ?>] - <?php echo $uraian ?>
                        

                      </option>
                      <?php endforeach ?>




                    </select>
                     </div>
                  </div> <hr>


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
<?php endforeach;?>