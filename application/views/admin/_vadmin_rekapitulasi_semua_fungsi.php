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
            <h1 class="m-0 text-dark"> <i class="fas fa-clipboard-list"></i> Data Rekapitulasi Semua Fungsi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"> <i class="nav-icon fas fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active"> <i class="fas fa-clipboard-list"></i> Data Rekapitulasi Semua Fungsi</li>
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
                <h3 class="card-title"><i class="fa fa-download"></i> Cetak Laporan </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            

                <div class="card-body">

                  <div class="row">
                  

                    <a href="<?php echo base_url()?>admin/Claporan/cetak_rekapitulasi_semua_fungsi" style="color: black;"><div class="info-box">
                    <span class="info-box-icon bg-danger"><i class="fas fa-file"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Silakan klik untuk mencetak >>></span>
                      <span class="info-box-number">Data Rekapitulasi Semua Fungsi</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div></a>

                </div>

                




            </div>
            <!-- /.card -->

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

<?php
  
  //$fungsi = $this->Mfungsi->tampil_fungsi();
  $npangkat = $this->Mrekapitulasi->get_n('tbl_master_pangkat');
  $jmlfungsi = $this->Mrekapitulasi->get_jmlfungsi();
  $jmljk = $this->Mrekapitulasi->get_jmljk();
  
  $a = 0;

  echo "<thead>";
    echo '<tr class="font-bold text-center">';
        echo '<td rowspan="2" style="text-align:center;vertical-align:middle;">BAGIAN/FUNGSI</td>';
        echo '<td rowspan="2" style="text-align:center;vertical-align:middle;">JUMLAH PEGAWAI</td>';
        echo '<td colspan="2">JENIS KELAMIN</td>';
        echo '<td colspan="'.$npangkat.'" style="text-align:center;vertical-align:middle;">PANGKAT</td>';
    echo "</tr>";

    echo '<tr class="font-bold text-center">';
        echo '<td>L</td>';
        echo '<td>P</td>';

foreach($pangkat->result_array() as $i): $kd_pangkat=$i['kd_pangkat'];


        echo '<td>'.$kd_pangkat.'</td>';
        endforeach;



    echo "</tr>";

    echo "<tr>";
        echo '<td class="font-bold">JUMLAH SELURUHNYA</td>';
    foreach ($jmlfungsi as $key => $jmlfungsi) {
        echo '<td class="font-bold" style="text-align:center;vertical-align:middle;">'.$jmlfungsi->n.'</td>';
    }

    foreach ($jmljk as $key => $jmljk) {
        echo '<td class="font-bold" style="text-align:center;vertical-align:middle;">'.$jmljk->nlaki.'</td>';
        echo '<td class="font-bold" style="text-align:center;vertical-align:middle;">'.$jmljk->nperem.'</td>';
    }

        foreach($pangkat->result_array() as $i): $kd_pangkat=$i['kd_pangkat'];
        $jmlpangkat = $this->Mrekapitulasi->get_jmlpangkat($kd_pangkat);
        foreach ($jmlpangkat as $key => $jmlpangkat) {
        echo '<td class="font-bold" style="text-align:center;vertical-align:middle;">'.$jmlpangkat->n.'</td>';
      }
        endforeach;
    

    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    
    foreach($fungsi->result_array() as $i): $kd_fungsi=$i['kd_fungsi'];
      echo "<tr>";
            echo '<td class="font-bold" nowrap>'.$kd_fungsi.'</td>'; 

            ${"sql_result_a_".$a} = $this->Mrekapitulasi->get_jmljk_per_fungsi($kd_fungsi);

            foreach (${"sql_result_a_".$a} as $key => $value_sql_result_a) {
                echo '<td class="text-center">'.$value_sql_result_a->n.'</td>';
            }

            ${"sql_result_b_".$a} = $this->Mrekapitulasi->get_jmljk_per_jk_per_fungsi($kd_fungsi);       
            foreach (${"sql_result_b_".$a} as $key => $value_sql_result_b) {
                echo '<td class="text-center">'.$value_sql_result_b->nlaki.'</td>';
                echo '<td class="text-center">'.$value_sql_result_b->nperem.'</td>';
            }


        foreach($pangkat->result_array() as $i): $kd_pangkat=$i['kd_pangkat'];
            ${"sql_result_c_".$a} = $this->Mrekapitulasi->get_jmlpangkat_per_pangkat_per_fungsi($kd_fungsi,$kd_pangkat);       
            foreach (${"sql_result_c_".$a} as $key => $value_sql_result_c) {
                echo '<td class="text-center">'.$value_sql_result_c->n.'</td>';
            }
      endforeach;

            $a=$a+1;
      echo "</tr>";
      endforeach;
      
      
  
?>


</tbody>
                            


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