

   <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="<?php echo base_url()?>pengemudi/Cpengemudi" class="nav-link active">
             <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url()?>pengemudi/Cdpermohonan" class="nav-link">
             <i class="nav-icon fas fa-envelope"></i>
              <p>
                Permohonan Kendaraan
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url()?>pengemudi/Cdservice" class="nav-link">
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
                <a href="<?php echo base_url()?>pengemudi/Cdpengemudi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pengemudi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url()?>pengemudi/Cdkendaraan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kendaraan</p>
                </a>
              </li>
            
            </ul>
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
            <h1 class="m-0 text-dark"> <i class="nav-icon fas fa-tachometer-alt"></i> Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"> <i class="nav-icon fas fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active"> <i class="nav-icon fas fa-tachometer-alt"></i> Dashboard</li>
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

          <div class="card">

            
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row" >
                  <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $permohonan; ?></h3>

                <p>Data Permohonan</p>
              </div>
              <div class="icon">
                <i class="fa fa-envelope"></i>
              </div>
              <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $service; ?></h3>

                <p>Data Service</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-cog"></i>
              </div>
              <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $pengemudi; ?></h3>

                <p>Data Pengemudi</p>
              </div>
              <div class="icon">
                <i class="fa fa-male"></i>
              </div>
              <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $kendaraan; ?></h3>

                <p>Data Kendaraan</p>
              </div>
              <div class="icon">
                <i class="fa fa-car"></i>
              </div>
              <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->


          

          
                </div>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
        </div>
        <!-- /.row -->



<!-- ============================================================================== -->  



         <div class="row">
          <div class="col-md-12">

             <div class="callout callout-success">

                  <h5><i class="fas fa-bullhorn"></i> Selamat Datang, <?php echo $_SESSION['level']; ?>!</h5>
                  <hr>

                  <img style="margin-left: auto;margin-right:auto;display:block;" src="<?php echo base_url()?>assets/img/driver.png">

                  <p style="text-align: justify;">&nbsp &nbsp &nbsp Sistem Informasi Pengelolaan Kendaraan Dinas berbasis website atau disingkat SIPOK dirancang pada tahun 2020 dan sudah terhubung langsung dengan aplikasi berbasis android untuk mempermudah admin dalam mencatat pengguna kendaraan dinas pada Kantor Perwakilan Bank Indonesia Provinsi Papua secara online. Untuk mendownload aplikasi ini silakan meng-klik>> <a href="#">Download aplikasi android sekarang!</a></p>  <br>


                </div>
          </div>
        </div>

<!-- ============================================================================== --> 




        <div class="row">
          <div class="col-md-12">

          <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Jumlah Penggunaan Kendaraan Dinas Per Fungsi</h3>

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

                <div class="chart">
                  <canvas id="bar-chart-perfungsi"></canvas>
                </div>


              </div>
              <!-- /.card-body -->

                  
                </div>
              </div>
              </div>






<!-- ============================================================================== --> 


<div class="row">
          <div class="col-md-6">

          <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Jumlah Penggunaan Kendaraan Dinas Per Bulan</h3>

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

                <div class="chart">
                  <canvas id="bar-chart-penggunaan"></canvas>
                </div>


              </div>
              <!-- /.card-body -->

                  
                </div>
              </div>


                <div class="col-md-6">

          <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Jumlah Service Kendaraan Dinas Per Bulan</h3>

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

                <div class="chart">
                  <canvas id="bar-chart-service"></canvas>
                </div>


              </div>
              <!-- /.card-body -->

                  
                </div>

              </div>



</div>
                


<!-- ============================================================================== --> 




        













    </div><!-- /.container-fluid -->
  </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->