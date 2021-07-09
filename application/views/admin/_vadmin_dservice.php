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
            <a href="<?php echo base_url()?>admin/Cservice" class="nav-link active">
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
            <h1 class="m-0 text-dark"> <i class="nav-icon fas fa-cog"></i> Data Service Kendaraan</h1>

            <a href="<?php echo base_url()?>admin/exportpdf/Cexport_pdf_dservice/dservice_all"><i class="fa fa-download"></i> Cetak Data</a>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"> <i class="nav-icon fas fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active"> <i class="nav-icon fas fa-cog"></i> Data Service Kendaraan</li>
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
                  <!-- <th class="col-sm-1">No</th> -->
                  <th>Type</th>
                  <th>No Polisi</th>
                  <th>Nama Kendaraan</th>
                  <th>Jenis Kend</th>
                  <th>Tgl Service</th>
                  <th>Keterangan</th>
                  <th>Bukti</th>
                  <th>Total</th>
                  <th style="width:10px;">Aksi</th>
                </tr>
                </thead>
                <tbody>

                  <?php 
                  $no=1;
                       foreach($data->result_array() as $i):

                          $id_service=$i['id_service'];
                          $no_polisi=$i['no_polisi'];
                          $nama_kendaraan=$i['nama_kendaraan'];
                          $jenis_kendaraan=$i['jenis_kendaraan'];
                          $tanggal_service=$i['tanggal_service'];
                          $keterangan=$i['keterangan'];
                          $foto=$i['foto'];
                          $bukti=$i['bukti'];
                          $total_service=$i['total_service'];
                      ?>

                <tr>
                  <!-- <td><?php echo $no++; ?></td> -->
                  <td>
                    
                    <?php if ($foto != NULL): ?>
                      <img src="<?php echo base_url(); ?>assets/pasfoto/<?php echo $foto; ?>" style="width: 80px; height: 80px;" class="img-circle img-thumbnail"><br>

                        <?php elseif ($foto == NULL & $jenis_kendaraan == 'Mobil'): ?>
                        <img src="<?php echo base_url()?>assets/img/car.png" style="width: 80px; height: 80px;" class="img-circle img-thumbnail"><br>
                        <?php elseif ($foto == NULL & $jenis_kendaraan =='Motor'): ?>
                        <img src="<?php echo base_url()?>assets/img/moto.png" style="width: 80px; height: 80px;" class="img-circle img-thumbnail"><br>
                        <?php endif; ?>
                  </td>
                  <td><?php echo $no_polisi; ?></td>
                  <td><?php echo $nama_kendaraan; ?></td>
                  <td><?php echo $jenis_kendaraan; ?></td>
                  <td><?php $d = new DateTime($tanggal_service);

                    echo $d->format('d-M-Y'); ?></td>
                  <td><?php echo $keterangan; ?></td>

                  <td>
                    <?php if ($bukti != NULL): ?>
                        <a href="<?php echo base_url(); ?>assets/bukti/<?php echo $bukti; ?>" data-toggle="lightbox" data-title="sample 1 - white">
                        <img src="<?php echo base_url(); ?>assets/bukti/<?php echo $bukti; ?>" class="img-fluid mb-2" alt="white sample" style="width: 80px; height: 80px;"/>
                      </a>
                        <?php else: ?>
                          <a href="<?php echo base_url()?>assets/bukti/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                        <img src="<?php echo base_url()?>assets/bukti/noimage.jpg" class="img-fluid mb-2" alt="white sample" style="width: 80px; height: 80px;"/>
                      </a>
                      <?php endif; ?>

                  </td>
                  <td><?php echo $total_service; ?></td>
                  <td>

                   

                    <span class="badge bg-success"><a href="#" data-toggle="modal" data-target="#lihat-data<?php echo $id_service;?>"><i class="fa fa-eye"> Lihat</i></a></span>

                    <span class="badge bg-warning"><a href="#" data-toggle="modal" data-target="#edit-data<?php echo $id_service;?>"><i class="fa fa-edit"> Ubah</i></a></span>

                    <span class="badge bg-danger"><a href="<?php echo base_url()?>admin/Cservice/hapus_service/<?php echo $id_service; ?>" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')" ><i class="fa fa-trash"> Hapus</i></a></span>

                  </td>
                </tr>

                 <?php endforeach;?>
                
                </tbody>
                <tfoot>
                <tr>
                  <!-- <th>No</th> -->
                  <th>Type</th>
                  <th>No Polisi</th>
                  <th>Nama Kendaraan</th>
                  <th>Jenis Kend</th>
                  <th>Tgl Service</th>
                  <th>Keterangan</th>
                  <th>Bukti</th>
                  <th>Total</th>
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
              <h4 class="modal-title"><i class="fa fa-plus"></i> Tambah Data Service</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

                        <form role="form" name="myform" method="post" action="<?php echo base_url()?>admin/Cservice/tambah_service" onsubmit="return validasi_tambah(this)" enctype="multipart/form-data">


<script type="text/javascript">
  function validasi_tambah(form){


  if (form.id_jenis_kendaraan.value =="== PILIH =="){
    alert("Anda belum memilih jenis kendaraan!");
    return (false);
 }


  if (form.no_polisi.value =="== PILIH =="){
    alert("Anda belum memilih no polisi!");
    return (false);
 }


  if (form.nama_kendaraan.value == ""){
    alert("Nama Kendaraan masih kosong!");
    form.nama_kendaraan.focus();
    return (false);
  }

    if (form.tanggal_service.value == ""){
    alert("Tanggal Service masih kosong!");
    form.tanggal_service.focus();
    return (false);
  }

    if (form.keterangan.value == ""){
    alert("Keterangan masih kosong!");
    form.keterangan.focus();
    return (false);
  }

    if (form.total_service.value == ""){
    alert("Total Service masih kosong!");
    form.total_service.focus();
    return (false);
  }

    


  return (true);
  }



</script>

                        <div class="modal-body">


                          <div class="alert alert-warning alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-info"></i> Keterangan :</h4>
                            <p>Isilah form service kendaraan anda dengan lengkap, terutama yang bertanda (*)</p>
                        </div>

                        <input type="hidden" name="id_service" value="<?php echo $kode ?>">

                        <div class="form-group">
                          <label for="exampleSelect1">Jenis Kendaraan*</label>
                          <select class="form-control" style="width: 200px;" name="jenis_kendaraan" id="jenis_kendaraann" required>
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
                          <input class="form-control" type="text" placeholder="Nama Kendaraan" style="width: 400px;" name="nama_kendaraan" readonly="">

                        </div>


                        <div class="form-group">
                          <label>Tanggal Service*</label>
                          <div class="input-group date">
                            <input type="text" class="form-control pull-right" id="datepicker" name="tanggal_service" placeholder="Tanggal Service">
                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label>Keterangan*</label>
                          <textarea class="form-control" rows="3" placeholder="Keterangan" style="width: 400px;" name="keterangan"></textarea>
                        </div>

                        <div class="form-group">
                          <label>Total Service*</label>
                          <input class="form-control" type="text" placeholder="Total Service" style="width: 200px;" name="total_service">

                        </div>

                        <div class="form-group">
                          <label>Upload Bukti</label>
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
                    $id_service=$i['id_service'];
                    $no_polisi=$i['no_polisi'];
                    $nama_kendaraan=$i['nama_kendaraan'];
                    $id_jenis_kendaraan=$i['id_jenis_kendaraan'];
                    $jenis_kendaraan=$i['jenis_kendaraan'];
                    $tanggal_service=$i['tanggal_service'];
                    $keterangan=$i['keterangan'];
                    $foto=$i['foto'];
                    $total_service=$i['total_service'];
                    $bukti=$i['bukti'];

                ?>



  <!-- =====================MODAL LIHAT DATA========================= -->    
<div class="modal fade" id="lihat-data<?php echo $id_service;?>" data-backdrop="static">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><i class="nav-icon far fa-id-card nav-icon"></i> Detail Service Kendaraan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

                        <div class="modal-body">


                          <div class="alert alert-warning alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-info"></i> Keterangan :</h4>
                            <p>Ceklah isi form service kendaraan anda dengan lengkap, terutama yang bertanda (*). Jika isi form sudah lengkap silakan diunduh. Terimakasih.</p>
                            <a href="<?php echo base_url()?>admin/exportpdf/Cexport_pdf_dservice/dservice_by_id/<?php echo $id_service ?>" class="btn btn-success"><i class="fa fa-download"></i> Cetak Service Kendaraan</a>
                        </div>



                        <center>
                        <?php if ($foto != NULL): ?>
                      <img src="<?php echo base_url(); ?>assets/pasfoto/<?php echo $foto; ?>" style="width: 180px; height: 180px;" class="img-circle img-thumbnail"><br>

                        <?php elseif ($foto == NULL & $jenis_kendaraan == 'Mobil'): ?>
                        <img src="<?php echo base_url()?>assets/img/car.png" style="width: 180px; height: 180px;" class="img-circle img-thumbnail"><br>
                        <?php elseif ($foto == NULL & $jenis_kendaraan =='Motor'): ?>
                        <img src="<?php echo base_url()?>assets/img/moto.png" style="width: 180px; height: 180px;" class="img-circle img-thumbnail"><br>
                        <?php endif; ?>

                        <h5><b><?php echo $no_polisi;?></b></h5>
                        <p><b><?php echo $nama_kendaraan;?></b></p>
                      </center><br>
                      
                      <hr>




                      <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Kend</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Jenis Ken." disabled="" value="<?php echo $jenis_kendaraan;?>" style="width: 200px;">
                    </div>
                  </div>

                      <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">No Polisi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="No Polisi" disabled="" value="<?php echo $no_polisi;?>" style="width: 200px;">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nm. Kendaraan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Nm. Kendaraan" disabled="" value="<?php echo $nama_kendaraan;?>" style="width: 400px;">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Service</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Tanggal Service" disabled="" value="<?php $d = new DateTime($tanggal_service);echo $d->format('d-M-Y'); ?>" style="width: 400px;">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                          <textarea class="form-control" rows="3" placeholder="Keterangan" style="width: 400px;" name="keterangan" readonly=""><?php echo $keterangan;?></textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Total Service</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Total Service" disabled="" value="<?php echo $total_service;?>" style="width: 400px;">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Bukti</label>
                    <div class="col-sm-10">
                      
                        <?php if ($bukti != NULL): ?>
                        <a href="<?php echo base_url(); ?>assets/bukti/<?php echo $bukti; ?>" data-toggle="lightbox" data-title="sample 1 - white">
                        <img src="<?php echo base_url(); ?>assets/bukti/<?php echo $bukti; ?>" class="img-fluid mb-2" alt="white sample" style="width: 200px; height: 200px;"/>
                      </a>
                        <?php else: ?>
                          <a href="<?php echo base_url()?>assets/bukti/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                        <img src="<?php echo base_url()?>assets/bukti/noimage.jpg" class="img-fluid mb-2" alt="white sample" style="width: 200px; height: 200px;"/>
                      </a>
                      <?php endif; ?>
                      
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
<!-- =============================================== -->








  <!-- =====================MODAL EDIT DATA========================= -->    
<div class="modal fade" id="edit-data<?php echo $id_service;?>" data-backdrop="static">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><i class="fa fa-edit"></i> Ubah Data Service Kendaraan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

                         <form role="form" name="myform" method="post" action="<?php echo base_url()?>admin/Cservice/edit_service" onsubmit="return validasi_edit(this)" enctype="multipart/form-data">


<script type="text/javascript">
  function validasi_edit(form){

  if (form.id_jenis_kendaraan.value =="== PILIH =="){
    alert("Anda belum memilih jenis kendaraan!");
    return (false);
 }


  if (form.no_polisi.value =="== PILIH =="){
    alert("Anda belum memilih no polisi!");
    return (false);
 }


  if (form.nama_kendaraan.value == ""){
    alert("Nama Kendaraan masih kosong!");
    form.nama_kendaraan.focus();
    return (false);
  }

    if (form.tanggal_service.value == ""){
    alert("Tanggal Service masih kosong!");
    form.tanggal_service.focus();
    return (false);
  }

    if (form.keterangan.value == ""){
    alert("Keterangan masih kosong!");
    form.keterangan.focus();
    return (false);
  }

    if (form.total_service.value == ""){
    alert("Total Service masih kosong!");
    form.total_service.focus();
    return (false);
  }


  return (true);
  }
</script>





                        <div class="modal-body">


                          <center>
                        <?php if ($foto != NULL): ?>
                      <img src="<?php echo base_url(); ?>assets/pasfoto/<?php echo $foto; ?>" style="width: 180px; height: 180px;" class="img-circle img-thumbnail"><br>

                        <?php elseif ($foto == NULL & $jenis_kendaraan == 'Mobil'): ?>
                        <img src="<?php echo base_url()?>assets/img/car.png" style="width: 180px; height: 180px;" class="img-circle img-thumbnail"><br>
                        <?php elseif ($foto == NULL & $jenis_kendaraan =='Motor'): ?>
                        <img src="<?php echo base_url()?>assets/img/moto.png" style="width: 180px; height: 180px;" class="img-circle img-thumbnail"><br>
                        <?php endif; ?>

                        <h5><b><?php echo $no_polisi;?></b></h5>
                        <p><b><?php echo $nama_kendaraan;?></b></p>
                      </center><br>
                      
                      <hr>


                        <input type="hidden" name="id_service" value="<?php echo $id_service;?>">

                        <!-- <div class="form-group">
                          <label for="exampleSelect1">Jenis Kendaraan*</label>
                          <select class="form-control" style="width: 200px;" name="id_jenis_kendaraan" readonly>
                            <option <?php if ($id_jenis_kendaraan == "1") { echo "selected"; } ?> value="1">Mobil</option>
                          <option <?php if ($id_jenis_kendaraan == "2") { echo "selected"; } ?> value="2">Motor</option>
                          </select>
                      </div> -->

                      <div class="form-group">
                          <label>Jenis Kendaraan*</label>
                          <input class="form-control" type="text" placeholder="Jenis Kendaraan" style="width: 200px;" name="jenis_kendaraan" readonly="" value="<?php echo $jenis_kendaraan;?>">

                        </div>
                    


                        <div class="form-group">

                          <label for="exampleSelect1">Nomor Polisi*</label>

                          <select class="form-control" style="width: 200px;" name="no_polisi" id="no_polisi" required onchange="enabledisabletext2()">

                            <option>== PILIH ==</option>
                            <?php foreach($tbl_kendaraan->result_array() as $i):
                            $no_polisii=$i['no_polisi'];
                            $nama_kendaraan=$i['nama_kendaraan'];?>

                            <option value="<?php echo $no_polisii ?>"

                              <?php if ($no_polisi == 
                              $no_polisii) { echo "selected"; } ?>
                              >


                              [<?php echo $no_polisii ?>] - <?php echo $nama_kendaraan ?>



                            </option>
                            <?php endforeach;?>


                          </select>
                      </div>





                        <div class="form-group">
                          <label>Tanggal Service</label>
                          <div class="input-group date">
                            <input type="text" class="form-control pull-right" id="datepicker1" name="tanggal_service" placeholder="Tanggal Service" value="<?php echo $tanggal_service ?>">
                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label>Keterangan</label>
                          <textarea class="form-control" rows="3" placeholder="Keterangan" style="width: 400px;" name="keterangan"><?php echo $keterangan ?></textarea>
                        </div>

                        <div class="form-group">
                        <label>Total Service*</label>
                        <input class="form-control" type="text" placeholder="Total Service" name="total_service" style="width: 200px;" value="<?php echo $total_service;?>">
                      </div>

                        <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Upload Bukti
                      <a href="<?php echo base_url()?>admin/Cservice/hapus_foto/<?php echo $id_service; ?>" class="btn btn-xs btn-default">Hapus Bukti</a></label>

                    <?php if ($bukti != NULL): ?>
                    <img src="<?php echo base_url(); ?>assets/bukti/<?php echo $bukti; ?>" style="width: 100px; height: 100px;" class="img-circle img-thumbnail"><br>
                    <?php else: ?>
                         <img src="<?php echo base_url()?>assets/bukti/noimage.jpg" style="width: 100px; height: 100px;" class="img-circle img-thumbnail"><br>
                        <?php endif; ?>

                    <div class="col-sm-10">

                      <input type="file" name="filefoto"  class="form-control" value="<?php echo $bukti; ?>" style="width: 400px;">
                    </div>

                
                  </div>

                  <input type="hidden" name="foto_lama" value="<?php echo $bukti; ?>">


                       

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