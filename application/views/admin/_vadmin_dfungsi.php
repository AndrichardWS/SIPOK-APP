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
                <a href="<?php echo base_url()?>admin/Ckendaraan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kendaraan</p>
                </a>
              </li>
              <!-- <hr> -->
              <li class="nav-item">
                <a href="<?php echo base_url()?>admin/Cfungsi" class="nav-link active">
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
            <h1 class="m-0 text-dark"> <i class="nav-icon far fa-circle nav-icon"></i> Data Fungsi</h1>

            <a href="<?php echo base_url()?>admin/exportpdf/Cexport_pdf_dfungsi/dfungsi_all"><i class="fa fa-download"></i> Cetak Data</a>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"> <i class="nav-icon fas fa-desktop"></i> Data Master</a></li>
              <li class="breadcrumb-item active"> <i class="nav-icon far fa-circle nav-icon"></i> Data Fungsi</li>
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
                  <th style="width:10px;">No</th>
                  <th>Kode Fungsi</th>
                  <th>Uraian</th>
                  <th style="width:10px;">Aksi</th>
                </tr>
                </thead>
                <tbody>

                  <?php 
                  $no=1;
                       foreach($data->result_array() as $i):

                          $kd_fungsi=$i['kd_fungsi'];
                          $uraian=$i['uraian'];
                      ?>

                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $kd_fungsi; ?></td>
                  <td><?php echo $uraian; ?></td>
                  <td>

                   

                    <span class="badge bg-warning"><a href="#" data-toggle="modal" data-target="#edit-data<?php echo $kd_fungsi;?>"><i class="fa fa-edit"></i> Ubah</a></span>

                  </td>
                </tr>

                 <?php endforeach;?>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Kode Fungsi</th>
                  <th>Uraian</th>
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
              <h4 class="modal-title"><i class="fa fa-plus"></i> Tambah Data Fungsi</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

                        <form role="form" name="myform" method="post" action="<?php echo base_url()?>admin/Cfungsi/tambah_fungsi" onsubmit="return validasi_tambah(this)">


<script type="text/javascript">
  function validasi_tambah(form){

      if (form.kd_fungsi.value == ""){
    alert("Kode Fungsi masih kosong!");
    form.kd_fungsi.focus();
    return (false);
  }


   if (form.uraian.value == ""){
    alert("Uraian masih kosong!");
    form.uraian.focus();
    return (false);
  }


  return (true);
  }
</script>




                        <div class="modal-body">


                          <div class="alert alert-warning alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-info"></i> Keterangan :</h4>
                            <p>Isilah form fungsi anda dengan lengkap, terutama yang bertanda (*)</p>
                        </div>
                    


                        <div class="form-group">
                          <label>Kode Fungsi*</label>
                          <input class="form-control" type="text" placeholder="Kode Fungsi" style="width: 200px;" name="kd_fungsi">

                        </div>



                        <div class="form-group">
                          <label>Uraian</label>
                          <textarea class="form-control" rows="3" placeholder="Uraian ..." style="width: 400px;" name="uraian"></textarea>
                        </div>


                        <!-- <div class="form-group">
                          <label>Uraian</label>
                          <input class="form-control" type="text" placeholder="Uraian" style="width: 400px;" name="uraian">

                        </div>
 -->

                       

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
                    $kd_fungsi=$i['kd_fungsi'];
                    $uraian=$i['uraian'];

                ?>


  <!-- =====================MODAL EDIT DATA========================= -->    
<div class="modal fade" id="edit-data<?php echo $kd_fungsi;?>" data-backdrop="static">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><i class="fa fa-edit"></i> Ubah Data Fungsi</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

                         <form role="form" name="myform" method="post" action="<?php echo base_url()?>admin/Cfungsi/edit_fungsi" onsubmit="return validasi_edit(this)">


<script type="text/javascript">
  function validasi_edit(form){

      if (form.kd_fungsi.value == ""){
    alert("Kode Fungsi masih kosong!");
    form.kd_fungsi.focus();
    return (false);
  }


   if (form.uraian.value == ""){
    alert("Uraian masih kosong!");
    form.uraian.focus();
    return (false);
  }


  return (true);
  }
</script>





                        <div class="modal-body">

                        <div class="form-group">
                          <label>Kode Fungsi*</label>
                          <input class="form-control" type="text" placeholder="Kode Fungsi" style="width: 200px;" name="kd_fungsi" readonly="" value="<?php echo $kd_fungsi;?>">

                        </div>


                        <div class="form-group">
                          <label>Uraian</label>
                          <textarea class="form-control" rows="3" placeholder="Uraian ..." style="width: 400px;" name="uraian" required=""><?php echo $uraian;?></textarea>
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
<?php endforeach; ?>