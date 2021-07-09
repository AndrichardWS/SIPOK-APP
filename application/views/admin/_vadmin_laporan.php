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
            <h1 class="m-0 text-dark"> <i class="nav-icon fas fa-book"></i> Laporan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"> <i class="nav-icon fas fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active"> <i class="nav-icon fas fa-book"></i> Laporan</li>
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

          <div class="card card-primary card-outline">
            
              <!-- /.card-header -->
              <div class="card-body">

                <h5>Silakan Pilih:  </h5>
                <hr>
                <div class="row">


                    <div class="col-md-6 col-sm-6 col-12">
            <a href="<?php echo base_url()?>admin/Claporan/rekapitulasi_semua_fungsi" style="color: black;"><div class="info-box">
              <span class="info-box-icon bg-info"><i class="fas fa-clipboard-list"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Data Rekapitulasi Semua Fungsi</span>
                <span class="info-box-number">- Data Pegawai -</span>
              </div>
              <!-- /.info-box-content -->
            </div></a>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->



          <div class="col-md-6 col-sm-6 col-12">
            <a href="<?php echo base_url()?>admin/Claporan/pegawai_per_fungsi" style="color: black;"><div class="info-box">
              <span class="info-box-icon bg-success"><i class="fas fa-user-tie"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Data Pegawai Per Fungsi</span>
                <span class="info-box-number">- Data Pegawai -</span>
              </div>
              <!-- /.info-box-content -->
            </div></a>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->



          <div class="col-md-6 col-sm-6 col-12">
            <a href="<?php echo base_url()?>admin/Claporan/permohonan_per_periode" style="color: black;"><div class="info-box">
              <span class="info-box-icon bg-warning"><i class="fas fa-car-side"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Data Permohonan KD Per Periode</span>
                <span class="info-box-number">- Data Permohonan Kendaraan -</span>
              </div>
              <!-- /.info-box-content -->
            </div></a>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->



          <div class="col-md-6 col-sm-6 col-12">
            <a href="<?php echo base_url()?>admin/Claporan/service_per_periode" style="color: black;"><div class="info-box">
              <span class="info-box-icon bg-danger"><i class="fas fa-cogs"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Data Service KD Per Periode</span>
                <span class="info-box-number">- Data Service Kendaraan -</span>
              </div>
              <!-- /.info-box-content -->
            </div></a>
            <!-- /.info-box -->
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