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


























  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> <i class="nav-icon far fa-circle nav-icon"></i> Data Pegawai</h1>

            <a href="<?php echo base_url()?>admin/exportpdf/Cexport_pdf_dpegawai/dpegawai_all"><i class="fa fa-download"></i> Cetak Data</a>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"> <i class="nav-icon fas fa-desktop"></i> Data Master</a></li>
              <li class="breadcrumb-item active"> <i class="nav-icon far fa-circle nav-icon"></i> Data Pegawai</li>
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

              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nip</th>
                  <th>Nama Pegawai</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Jenis Kelamin</th>
                  <th>Fungsi</th>
                  <th style="width:10px;">Aksi</th>
                </tr>
                </thead>
                <tbody>


                  <?php 
                  //$no=1;
                       foreach($data->result_array() as $i):

                          $nip_pegawai=$i['nip_pegawai'];
                          $nama_pegawai=$i['nama_pegawai'];
                          $tempat_lahir=$i['tempat_lahir'];
                          $tanggal_lahir=$i['tanggal_lahir'];
                          $jenis_kelamin=$i['jenis_kelamin'];
                          $kd_fungsi=$i['kd_fungsi'];
                      ?>


                <tr>
                  <td><?php echo $nip_pegawai; ?></td>
                  <td><?php echo $nama_pegawai; ?></td>
                  <td><?php echo $tempat_lahir; ?></td>
                  <td>
                    <?php $d = new DateTime($tanggal_lahir);

                    echo $d->format('d-M-Y'); ?></td>
                  <td><?php echo $jenis_kelamin; ?></td>
                  <td><?php echo $kd_fungsi; ?></td>
                  <td>
                    
                    

                    <span class="badge bg-info"><a href="<?php echo base_url()?>admin/Cpegawai/detail_pegawai/<?php echo $nip_pegawai;?>"><i class="fa fa-id-card"> Detail</i></a></span>


                   
                  </td>
                </tr>

                <?php endforeach;?>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>Nip</th>
                  <th>Nama Pegawai</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Jenis Kelamin</th>
                  <th>Fungsi</th>
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
              <h4 class="modal-title"><i class="fa fa-plus"></i> Tambah Data Pegawai</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>



           <form role="form" name="myform" method="post" action="<?php echo base_url()?>admin/Cpegawai/tambah_pegawai" onsubmit="return validasi_tambah(this)" enctype="multipart/form-data">
            <div class="modal-body">


<script type="text/javascript">
function validasi_tambah(form){

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
          
              <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="icon fa fa-info"></i> Keterangan :</h4>
                  <p>Isilah form pegawai anda dengan lengkap, terutama yang bertanda (*)</p>
              </div>


              <div class="form-group">
                  <label>Nip Pegawai*</label>
                  <input class="form-control" type="text" placeholder="Nip Pegawai" style="width: 200px;" name="nip_pegawai">

                </div>


                <div class="form-group">
                  <label>Nama Pegawai*</label>
                  <input class="form-control" type="text" placeholder="Nama Pegawai" style="width: 400px;" name="nama_pegawai">

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
                   <label>Alamat</label>
                    <textarea class="form-control" name="alamat" rows="3" placeholder="Alamat" style="width: 400px;"></textarea>
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
                  <label>Email*</label>
                  <input class="form-control" type="text" placeholder="Email" style="width: 400px;" name="email">
                </div>


                <div class="form-group">
                    <label for="exampleSelect1">Fungsi*</label>
                    <select class="form-control" style="width: 400px;" name="kd_fungsi">
                      <option value="== PILIH ==">== PILIH ==</option>
                      <?php foreach($tbl_master_fungsi->result_array() as $i):
                      $kd_fungsi=$i['kd_fungsi'];
                      $uraian=$i['uraian'];?>
                      <option value="<?php echo $kd_fungsi ?>">[<?php echo $kd_fungsi ?>] - <?php echo $uraian ?></option>
                      <?php endforeach ?>



                    </select>
                </div>

                <hr>

                
                <div class="form-group">
                  <label>Username*</label>
                  <input class="form-control" type="text" placeholder="Username" style="width: 400px;" name="username">
                </div>

                <div class="form-group">
                  <label>Password*</label>
                  <input class="form-control" type="text" placeholder="Password" style="width: 400px;" name="password">
                </div>

                <div class="form-group">
                  <label>Upload Foto</label>
                  <input type="file" name="filefoto"  class="form-control" style="width: 400px;">
                </div>
                <!-- <input type="hidden" name="foto_lama"> -->




                



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















