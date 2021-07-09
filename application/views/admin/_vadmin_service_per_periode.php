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
            <h1 class="m-0 text-dark"> <i class="fas fa-cog"></i> Data Service KD Per Periode</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"> <i class="nav-icon fas fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active"> <i class="fas fa-cog"></i> Data Service KD Per Periode</li>
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
                <h3 class="card-title">Data Per Periode</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" name="myform" method="post" action="<?php echo base_url()?>admin/Claporan/tampil_service_per_periode" onsubmit="return validasi_periode_service(this)">


<script type="text/javascript">
  
 function validasi_periode_service(form){

      if (form.dari_tgl.value == ""){
    alert("Dari Tanggal masih kosong!");
    form.dari_tgl.focus();
    return (false);
  }

      if (form.sampai_tgl.value == ""){
    alert("Sampai Tanggal masih kosong!");
    form.sampai_tgl.focus();
    return (false);
  }





     return (true);


 }
</script>
                <div class="card-body">
                  

                    <div class="row">
                  
                      <!-- text input -->
                      <div class="col-sm-6">
                      <div class="form-group">
                        <label>Dari Tanggal:</label>
                        <div class="input-group date">
                          <input type="text" class="form-control pull-right" id="datepicker" name="dari_tgl" placeholder="Dari Tanggal">
                          <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                        </div>
                      </div>
                    </div>

                      <div class="col-sm-6">
                     <div class="form-group">
                        <label>Sampai Tanggal:</label>
                        <div class="input-group date">
                          <input type="text" class="form-control pull-right" id="datepicker1" name="sampai_tgl" placeholder="Sampai Tanggal">
                          <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                        </div>
                      </div>
                    </div>


                </div>

                  <!-- <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> Cari</button> -->
                  <button type="submit" class="btn btn-info" name="submitForm" value="cari"><i class="fa fa-search"></i> Cari</button>
                  <a href="<?php echo base_url()?>admin/Claporan/service_per_periode" class="btn btn-warning" name="submitForm"><i class="fa fa-redo"></i> Reset</a>
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

                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width:10px;">No</th>
                  <th>No Polisi</th>
                  <th>Nama Kendaraan</th>
                  <th>Jenis Kend</th>
                  <th>Tgl Service</th>
                  <th>Keterangan</th>
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
                      ?>

                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $no_polisi; ?></td>
                  <td><?php echo $jenis_kendaraan; ?></td>
                  <td><?php echo $nama_kendaraan; ?></td>
                  <td><?php $d = new DateTime($tanggal_service);

                    echo $d->format('d-M-Y'); ?></td>
                  <td><?php echo $keterangan; ?></td>
                </tr>

                 <?php endforeach;?>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>No Polisi</th>
                  <th>Nama Kendaraan</th>
                  <th>Jenis Kend</th>
                  <th>Tgl Service</th>
                  <th>Keterangan</th>
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