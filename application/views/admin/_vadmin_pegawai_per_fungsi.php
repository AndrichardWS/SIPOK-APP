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
            <a href="<?php echo base_url()?>admin/Claporan" class="nav-link active">
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
            <h1 class="m-0 text-dark"> <i class="fas fa-user-tie"></i> Data Pegawai Per Fungsi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"> <i class="nav-icon fas fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active"> <i class="fas fa-user-tie"></i> Data Pegawai Per Fungsi</li>
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


            <div class="row">
                <div class="col-sm-6">
              <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Data Fungsi Pegawai</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" name="myform" method="post" action="<?php echo base_url()?>admin/Claporan/tampil_pegawai_per_fungsi" onsubmit="return validasi_periode_pegawai(this)">

<script type="text/javascript">
  
 function validasi_periode_pegawai(form){



  if (form.carifungsi.value =="== PILIH =="){
    alert("Anda belum memilih Fungsi!");
    return (false);
 }




     return (true);


 }
</script>

                <div class="card-body">
                  

                    <div class="row">
                  


                    <div class="form-group">
                        <label>Cari Fungsi:</label>
                        <select class="form-control" name="carifungsi">
                      <option value="== PILIH ==">== PILIH ==</option>
                      <?php foreach($tbl_master_fungsi->result_array() as $i):
                      $kd_fungsi=$i['kd_fungsi'];
                      $uraian=$i['uraian'];?>
                      <option value="<?php echo $kd_fungsi ?>">[<?php echo $kd_fungsi ?>] - <?php echo $uraian ?></option>
                      <?php endforeach ?>



                    </select>
                      </div>

                </div>

                  <!-- <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> Cari</button> -->
                  <button type="submit" class="btn btn-info" name="submitForm" value="cari"><i class="fa fa-search"></i> Cari</button>
                  <a href="<?php echo base_url()?>admin/Claporan/pegawai_per_fungsi" class="btn btn-warning" name="submitForm"><i class="fa fa-redo"></i> Reset</a>
                  <button type="submit" class="btn btn-danger" name="submitForm" ><i class="fa fa-download"></i> Cetak</button>




            </div>
            <!-- /.card -->
          </form>
          </div>
        </div>
      </div>




 <!-- ============================================================================== --> 

          <div class="card card-primary card-outline">
              <div class="card-header">

                <a href="<?php echo base_url()?>admin/Claporan" class="btn btn-danger"><i class="fa fa-chevron-left"></i> Kembali</a>


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
<!-- ============================================================================== -->    