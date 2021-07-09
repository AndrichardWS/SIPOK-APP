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
                <a href="<?php echo base_url()?>admin/Cpengemudi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengemudi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url()?>admin/Ckendaraan" class="nav-link active">
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
            <h1 class="m-0 text-dark"> <i class="nav-icon far fa-circle nav-icon"></i> Data Kendaraan</h1>

            <a href="<?php echo base_url()?>admin/exportpdf/Cexport_pdf_dkendaraan/dkendaraan_all"><i class="fa fa-download"></i> Cetak Data</a>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"> <i class="nav-icon fas fa-desktop"></i> Data Master</a></li>
              <li class="breadcrumb-item active"> <i class="nav-icon far fa-circle nav-icon"></i> Data Kendaraan</li>
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

              <table id="example4" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <!-- <th class="col-sm-1">No</th> -->
                  <th>Status</th>
                  <th>Type</th>
                  <th>No Polisi</th>
                  <th>Jenis Kend</th>
                  <th>Nama Kendaraan</th>
                  <th>Merk Kend</th>
                  <th>Warna Kend</th>
                  <th>Tahun</th>
                  <th style="width:10px;">Aksi</th>
                </tr>
                </thead>
                <tbody>

                  <?php 
                  $no=1;
                       foreach($data->result_array() as $i):

                          $no_polisi=$i['no_polisi'];
                          $jenis_kendaraan=$i['jenis_kendaraan'];
                          $nama_kendaraan=$i['nama_kendaraan'];

                          $merk_kendaraan=$i['merk_kendaraan'];
                          $warna_kendaraan=$i['warna_kendaraan'];
                          $status_kend=$i['status_kend'];
                          $tahun_produksi=$i['tahun_produksi'];
                          $foto=$i['foto'];
                      ?>

                <tr>
                  <!-- <td><?php echo $no++; ?></td> -->
                  <td><?php if ($status_kend == 'Tersedia'): ?>
                          <span class="badge bg-success"><?php echo $status_kend; ?></span>
                          <?php elseif ($status_kend == 'Tidak Tersedia'): ?>
                          <span class="badge bg-danger"><?php echo $status_kend; ?></span>
                        <?php endif; ?>
                  </td>
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
                  <td><?php echo $jenis_kendaraan; ?></td>
                  <td><?php echo $nama_kendaraan; ?></td>

                  <td><?php echo $merk_kendaraan; ?></td>
                  <td><?php echo $warna_kendaraan; ?></td>
                  <td><?php echo $tahun_produksi; ?></td>
                  <td>

                   <span class="badge bg-success"><a href="#" data-toggle="modal" data-target="#lihat-data<?php echo $no_polisi;?>"><i class="fa fa-eye"> Lihat</i></a></span>

                    <span class="badge bg-warning"><a href="#" data-toggle="modal" data-target="#edit-data<?php echo $no_polisi;?>"><i class="fa fa-edit"> Ubah</i></a></span>

                    <span class="badge bg-danger"><a href="<?php echo base_url()?>admin/Ckendaraan/hapus_kendaraan/<?php echo $no_polisi; ?>" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')" ><i class="fa fa-trash"> Hapus</i></a></span>
                  </td>
                </tr>

                 <?php endforeach;?>
                
                </tbody>
                <tfoot>
                <tr>
                  <!-- <th>No</th> -->
                  <th>Status</th>
                  <th>Type</th>
                  <th>No Polisi</th>
                  <th>Jenis Kend</th>
                  <th>Nama Kendaraan</th>
                  <th>Merk Kend</th>
                  <th>Warna Kend</th>
                  <th>Tahun</th>
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
              <h4 class="modal-title"><i class="fa fa-plus"></i> Tambah Data Kendaraan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

                        <form role="form" name="myform" method="post" action="<?php echo base_url()?>admin/Ckendaraan/tambah_kendaraan" onsubmit="return validasi_tambah(this)" enctype="multipart/form-data">


<script type="text/javascript">
  function validasi_tambah(form){

  if (form.no_polisi.value == ""){
    alert("No Polisi masih kosong!");
    form.no_polisi.focus();
    return (false);
  }


    var mincar = 8;
  if (form.no_polisi.value.length < mincar){
    alert("Panjang No Polisi Minimal 8 Karakter!");
    form.no_polisi.focus();
    return (false);
  }

      var mincar = 8;
  if (form.no_polisi.value.length > mincar){
    alert("Panjang No Polisi Minimal 8 Karakter!");
    form.no_polisi.focus();
    return (false);
  }


  if (form.id_jenis_kendaraan.value =="== PILIH =="){
    alert("Anda belum memilih jenis kendaraan!");
    return (false);
 }


  if (form.nama_kendaraan.value == ""){
    alert("Nama Kendaraan masih kosong!");
    form.nama_kendaraan.focus();
    return (false);
  }

    if (form.merk_kendaraan.value == ""){
    alert("Merk Kendaraan masih kosong!");
    form.merk_kendaraan.focus();
    return (false);
  }

    if (form.tahun_produksi.value == ""){
    alert("Tahun Produksi masih kosong!");
    form.tahun_produksi.focus();
    return (false);
  }

    if (form.warna_kendaraan.value == ""){
    alert("Warna Kendaraan masih kosong!");
    form.warna_kendaraan.focus();
    return (false);
  }

    if (form.no_rangka.value == ""){
    alert("No Rangka masih kosong!");
    form.no_rangka.focus();
    return (false);
  }

    if (form.no_mesin.value == ""){
    alert("No Mesin masih kosong!");
    form.no_mesin.focus();
    return (false);
  }

    if (form.no_bpkb.value == ""){
    alert("No BPKB masih kosong!");
    form.no_bpkb.focus();
    return (false);
  }




  return (true);
  }



</script>

                        <div class="modal-body">


                          <div class="alert alert-warning alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-info"></i> Keterangan :</h4>
                            <p>Isilah form kendaraan anda dengan lengkap, terutama yang bertanda (*)</p>
                        </div>
                    


                        <div class="form-group">
                          <label>No Polisi*</label>
                          <input class="form-control" type="text" placeholder="No Polisi" style="width: 200px;" name="no_polisi">

                        </div>


                        <div class="form-group">
                          <label for="exampleSelect1">Jenis Kendaraan*</label>
                          <select class="form-control" style="width: 200px;" name="id_jenis_kendaraan">
                            <option value="== PILIH ==">== PILIH ==</option>
                            <option value="1">Mobil</option>
                            <option value="2">Motor</option>
                          </select>
                      </div>


                        <div class="form-group">
                          <label>Nama Kendaraan</label>
                          <input class="form-control" type="text" placeholder="Nama Kendaraan" style="width: 400px;" name="nama_kendaraan">

                        </div>

                        <div class="form-group">
                          <label>Merk Kendaraan</label>
                          <input class="form-control" type="text" placeholder="Merk Kendaraan" style="width: 400px;" name="merk_kendaraan">

                        </div>

                        <div class="form-group">
                          <label>Tahun Produksi*</label>
                          <input class="form-control" type="text" placeholder="Tahun Produksi" style="width: 200px;" name="tahun_produksi">

                        </div>

                        <div class="form-group">
                          <label>Warna Kendaraan</label>
                          <input class="form-control" type="text" placeholder="Warna Kendaraan" style="width: 200px;" name="warna_kendaraan">

                        </div>

                        <div class="form-group">
                          <label>No Rangka*</label>
                          <input class="form-control" type="text" placeholder="No Rangka" style="width: 400px;" name="no_rangka">

                        </div>

                        <div class="form-group">
                          <label>No Mesin*</label>
                          <input class="form-control" type="text" placeholder="No Mesin" style="width: 200px;" name="no_mesin">

                        </div>

                        <div class="form-group">
                          <label>No BPKB*</label>
                          <input class="form-control" type="text" placeholder="No BPKB" style="width: 200px;" name="no_bpkb">

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
                    $no_polisi=$i['no_polisi'];
                    $id_jenis_kendaraan=$i['id_jenis_kendaraan'];
                    $jenis_kendaraan=$i['jenis_kendaraan'];
                    $nama_kendaraan=$i['nama_kendaraan'];

                    $merk_kendaraan=$i['merk_kendaraan'];
                    $tahun_produksi=$i['tahun_produksi'];
                    $warna_kendaraan=$i['warna_kendaraan'];
                    $no_rangka=$i['no_rangka'];
                    $no_mesin=$i['no_mesin'];
                    $no_bpkb=$i['no_bpkb'];
                    $foto=$i['foto'];


                ?>



  <!-- =====================MODAL LIHAT DATA========================= -->    
<div class="modal fade" id="lihat-data<?php echo $no_polisi;?>" data-backdrop="static">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><i class="nav-icon far fa-id-card nav-icon"></i> Detail Kendaraan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

                        <div class="modal-body">


                          <div class="alert alert-warning alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-info"></i> Keterangan :</h4>
                            <p>Ceklah isi form kendaraan anda dengan lengkap, terutama yang bertanda (*). Jika isi form sudah lengkap silakan diunduh. Terimakasih.</p>
                            <a href="<?php echo base_url()?>admin/exportpdf/Cexport_pdf_dkendaraan/dkendaraan_by_id/<?php echo $no_polisi ?>" class="btn btn-success"><i class="fa fa-download"></i> Cetak Kendaraan</a>
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
                    <label for="inputEmail3" class="col-sm-2 col-form-label">No Polisi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="No Polisi" disabled="" value="<?php echo $no_polisi;?>" style="width: 200px;">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Kend</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Jenis Ken." disabled="" value="<?php echo $jenis_kendaraan;?>" style="width: 200px;">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nm. Kendaraan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Nm. Kendaraan" disabled="" value="<?php echo $nama_kendaraan;?>" style="width: 400px;">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Mrk. Kendaraan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Mrk. Kendaraan" disabled="" value="<?php echo $merk_kendaraan;?>" style="width: 400px;">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Thn. Produksi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Thn. Produksi" disabled="" value="<?php echo $tahun_produksi;?>" style="width: 200px;">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Wrn. Kendaraan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Wrn. Kendaraan" disabled="" value="<?php echo $warna_kendaraan;?>" style="width: 200px;">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">No Rangka</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="No Rangka" disabled="" value="<?php echo $no_rangka;?>" style="width: 400px;">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">No Mesin</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="No Mesin" disabled="" value="<?php echo $no_mesin;?>" style="width: 200px;">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">No BPKB</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="No BPKB" disabled="" value="<?php echo $no_bpkb;?>" style="width: 200px;">
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
<div class="modal fade" id="edit-data<?php echo $no_polisi;?>" data-backdrop="static">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><i class="fa fa-edit"></i> Ubah Data <b>[<?php echo $nama_kendaraan; ?>]</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

                         <form role="form" name="myform" method="post" action="<?php echo base_url()?>admin/Ckendaraan/edit_kendaraan" onsubmit="return validasi_edit(this)" enctype="multipart/form-data">


<script type="text/javascript">
  function validasi_edit(form){

      if (form.nama_kendaraan.value == ""){
    alert("Nama Kendaraan masih kosong!");
    form.nama_kendaraan.focus();
    return (false);
  }


    if (form.id_jenis_kendaraan.value == "== PILIH =="){
    alert("Anda belum memilih jenis kendaraan!");
    return (false);
 }

     if (form.merk_kendaraan.value == ""){
    alert("Merk Kendaraan masih kosong!");
    form.merk_kendaraan.focus();
    return (false);
  }

    if (form.tahun_produksi.value == ""){
    alert("Tahun Produksi masih kosong!");
    form.tahun_produksi.focus();
    return (false);
  }

    if (form.warna_kendaraan.value == ""){
    alert("Warna Kendaraan masih kosong!");
    form.warna_kendaraan.focus();
    return (false);
  }

    if (form.no_rangka.value == ""){
    alert("No Rangka masih kosong!");
    form.no_rangka.focus();
    return (false);
  }

    if (form.no_mesin.value == ""){
    alert("No Mesin masih kosong!");
    form.no_mesin.focus();
    return (false);
  }

    if (form.no_bpkb.value == ""){
    alert("No BPKB masih kosong!");
    form.no_bpkb.focus();
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

                    


                        <div class="form-group">
                          <label>No Polisi*</label>
                          <input class="form-control" type="text" placeholder="No Polisi" style="width: 200px;" name="no_polisi" readonly="" value="<?php echo $no_polisi;?>">

                        </div>


                        <div class="form-group">
                          <label for="exampleSelect1">Jenis Kendaraan*</label>
                          <select class="form-control" style="width: 200px;" name="id_jenis_kendaraan">

                          <option value="== PILIH ==" selected="">== PILIH ==</option>
                          <option <?php if ($id_jenis_kendaraan == "1") { echo "selected"; } ?> value="1">Mobil</option>
                          <option <?php if ($id_jenis_kendaraan == "2") { echo "selected"; } ?> value="2">Motor</option>

                        </select>
                      </div>


                        <div class="form-group">
                          <label>Nama Kendaraan</label>
                          <input class="form-control" type="text" placeholder="Nama Kendaraan" style="width: 400px;" name="nama_kendaraan" value="<?php echo $nama_kendaraan;?>">

                        </div>

                        <div class="form-group">
                          <label>Merk Kendaraan</label>
                          <input class="form-control" type="text" placeholder="Merk Kendaraan" style="width: 400px;" name="merk_kendaraan" value="<?php echo $merk_kendaraan;?>">

                        </div>

                        <div class="form-group">
                          <label>Tahun Produksi*</label>
                          <input class="form-control" type="text" placeholder="Tahun Peroduksi" style="width: 200px;" name="tahun_produksi" value="<?php echo $tahun_produksi;?>">

                        </div>

                        <div class="form-group">
                          <label>Warna Kendaraan</label>
                          <input class="form-control" type="text" placeholder="Warna Kendaraan" style="width: 200px;" name="warna_kendaraan" value="<?php echo $warna_kendaraan;?>">

                        </div>

                        <div class="form-group">
                          <label>No Rangka*</label>
                          <input class="form-control" type="text" placeholder="No Rangka" style="width: 400px;" name="no_rangka" value="<?php echo $no_rangka;?>">

                        </div>

                        <div class="form-group">
                          <label>No Mesin*</label>
                          <input class="form-control" type="text" placeholder="No Mesin" style="width: 200px;" name="no_mesin" value="<?php echo $no_mesin;?>">

                        </div>

                        <div class="form-group">
                          <label>No BPKB*</label>
                          <input class="form-control" type="text" placeholder="No BPKB" style="width: 400px;" name="no_bpkb" value="<?php echo $no_bpkb;?>">

                        </div>

                        <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Upload Foto
                      <a href="#" class="btn btn-xs btn-default">Hapus Foto</a></label>

                    <?php if ($foto != NULL): ?>
                      <img src="<?php echo base_url(); ?>assets/pasfoto/<?php echo $foto; ?>" style="width: 100px; height: 100px;" class="img-circle img-thumbnail"><br>

                        <?php elseif ($foto == NULL & $jenis_kendaraan == 'Mobil'): ?>
                        <img src="<?php echo base_url()?>assets/img/car.png" style="width: 100px; height: 100px;" class="img-circle img-thumbnail"><br>
                        <?php elseif ($foto == NULL & $jenis_kendaraan =='Motor'): ?>
                        <img src="<?php echo base_url()?>assets/img/moto.png" style="width: 100px; height: 100px;" class="img-circle img-thumbnail"><br>
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
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
<!-- =============================================== -->



<?php endforeach;?>    