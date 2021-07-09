<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIPOK-APP | Sistem Informasi Pengelolaan Kendaraan Dinas</title>

  <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/logo.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  

  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">



  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">

  <!-- export dataTables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">



  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
 <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">



    
    



</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     
      
      <li class="nav-item">

         <span style="font-size: 23px; margin-right: 20px;">Sistem Informasi Pengelolaan Kendaraan Dinas</span>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#logout">Log Out</button>

      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>


  <!-- /.navbar -->


<div class="modal fade" id="logout">
        <div class="modal-dialog">
          <div class="modal-content">
            
            <div class="modal-body">
              <p><b>Apakah anda yakin ingin keluar?</b></p>
            </div>
            <div class="modal-footer">

              <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Tidak</button>

              <a class="btn btn-primary"href="<?php echo base_url()?>Clogin/logout">Yakin</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

  <!-- ============================================================================== -->  




  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?php echo base_url()?>assets/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SIPOK-APP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url()?>assets/img/profile.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo ($_SESSION['username']) ?></a> 
          <!-- <a href="#" class="d-block">Administrator</a> -->

          <a href="#"><i class="fa fa-circle text-success"></i> Status: <b><?php echo ($_SESSION['status']) ?></b>
            <!-- <a href="#"><i class="fa fa-circle text-success"></i> Active</a> -->
        </div>
      </div>

      <!-- ============================================================================== -->  














  <?php echo $contents ?>

















<!-- ============================================================================== -->  
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="#">AndrichardWS</a>.</strong>
    All rights reserved.
   <!--  <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.3-pre
    </div> -->
  </footer>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  












  
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url()?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url()?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()?>assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url()?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url()?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url()?>assets/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url()?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url()?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url()?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>assets/dist/js/demo.js"></script>

<!-- datepicker -->
<script src="<?php echo base_url()?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>


<!-- DataTables -->
<script src="<?php echo base_url()?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<!-- bootstrap time picker -->
<script src="<?php echo base_url()?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url()?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>


<!-- Filter dataTables -->
<script src="<?php echo base_url()?>assets/js/filterDropDown.js"></script>


<!-- export dataTables -->
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<!-- <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>





<!-- page script -->
<script>

  $(document).ready(function(){
       $('#nip_pegawai').on('input',function(){
                
                var nip_pegawai=$(this).val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('admin/Cpermohonan/get_nip_pegawai')?>",
                    dataType : "JSON",
                    data : {nip_pegawai: nip_pegawai},
                    cache:false,
                    success: function(data){
                        $.each(data,function(nip_pegawai, nama_pegawai){
                            $('[name="nama_pegawai"]').val(data.nama_pegawai);
                            
                            
                        });
                        
                    }
                });
                return false;
           });

    });


  $(document).ready(function(){
       $('#nip_pengemudi').on('input',function(){
                
                var nip_pengemudi=$(this).val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('admin/Cpermohonan/get_nip_pengemudi')?>",
                    dataType : "JSON",
                    data : {nip_pengemudi: nip_pengemudi},
                    cache:false,
                    success: function(data){
                        $.each(data,function(nip_pengemudi, nama_pengemudi){
                            $('[name="nama_pengemudi"]').val(data.nama_pengemudi);
                            
                            
                        });
                        
                    }
                });
                return false;
           });

    });


  $(document).ready(function(){
       $('#no_polisi').on('input',function(){
                
                var no_polisi=$(this).val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('admin/Cpermohonan/get_kendaraan')?>",
                    dataType : "JSON",
                    data : {no_polisi: no_polisi},
                    cache:false,
                    success: function(data){
                        $.each(data,function(no_polisi, nama_kendaraan){
                            $('[name="nama_kendaraan"]').val(data.nama_kendaraan);
                            
                            
                        });
                        
                    }
                });
                return false;
           });

    });



     $(document).ready(function(){
        $('#jenis_kendaraan').change(function(){
            var id_jenis_kendaraan=$(this).val();
            $.ajax({
                url : "<?php echo base_url('admin/Cpermohonan/get_jenis_kendaraan')?>",
                method : "POST",
                data : {id_jenis_kendaraan: id_jenis_kendaraan},
                async : false,
                dataType : 'JSON',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option>'+data[i].no_polisi+'</option>';
                    }
                    $('.no_polisi').html(html);
                     
                }
            });
        });
    });


      $(document).ready(function(){
        $('#jenis_kendaraann').change(function(){
            var id_jenis_kendaraan=$(this).val();
            $.ajax({
                url : "<?php echo base_url('admin/Cservice/get_jenis_kendaraan')?>",
                method : "POST",
                data : {id_jenis_kendaraan: id_jenis_kendaraan},
                async : false,
                dataType : 'JSON',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option>'+data[i].no_polisi+'</option>';
                    }
                    $('.no_polisi').html(html);
                     
                }
            });
        });
    });





  $(function () {
    $("#example1").DataTable();
     $("#example2").DataTable();
    $('#example3').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });


//Filter data pegawai dan Export
  $(function () {
    $("#example").DataTable({

  
       dom: '<"html5buttons"B>lTfgitp',
            buttons: [ {
                        extend: 'copy', text:'<i class="fa fa-file" aria-hidden="true"> Copy',title: 'Data Pegawai',
                        exportOptions: { columns: [ 0, 1, 2, 3, 4, 5 ] }
                    },
                    {
                        extend: 'csv', text:'<i class="fa fa-file-csv" aria-hidden="true"> Csv',title: 'Data Pegawai',
                        exportOptions: { columns: [ 0, 1, 2, 3, 4, 5 ] }
                    },
                    {
                        extend: 'excel', text:'<i class="fa fa-file-excel" aria-hidden="true"> Excel',title: 'Data Pegawai',
                        exportOptions: { columns: [ 0, 1, 2, 3, 4, 5 ] }
                    },
                    {
                        extend: 'pdf', text:'<i class="fa fa-file-pdf" aria-hidden="true"> PDF',title: 'Data Pegawai',
                        exportOptions: { columns: [ 0, 1, 2, 3, 4, 5 ] },
                        customize : function(doc) {
                        doc.content[1].table.widths = [ '10%', '20%', '20%', '20%', '15%', '15%'];}
                    },
                    {
                        extend: 'print', text:'<i class="fa fa-print" aria-hidden="true"> Print',title: 'Data Pegawai',
                        exportOptions: { columns: [ 0, 1, 2, 3, 4, 5 ] }
                    } ],

          // Definition of filter to display
          filterDropDown: {                   
            columns: [
              { 
                idx: 4,
                title:"Pilih Jenis Kelamin"
              },
              { 
                idx: 5,
                 title:"Pilih Fungsi"
              }
            ],
            bootstrap: true,
            label:"Cari: "
          }
    });
    
  });



  //Filter data kendaraan dan export
  $(function () {
    $("#example4").DataTable({

      dom: '<"html5buttons"B>lTfgitp',
            buttons: [ {
                        extend: 'copy', text:'<i class="fa fa-file" aria-hidden="true"> Copy',title: 'Data Kendaraan',
                        exportOptions: { columns: [ 2, 3, 4, 5, 6, 7 ] }
                    },
                    {
                        extend: 'csv', text:'<i class="fa fa-file-csv" aria-hidden="true"> Csv',title: 'Data Kendaraan',
                        exportOptions: { columns: [ 2, 3, 4, 5, 6, 7 ] }
                    },
                    {
                        extend: 'excel', text:'<i class="fa fa-file-excel" aria-hidden="true"> Excel',title: 'Data Kendaraan',
                        exportOptions: { columns: [ 2, 3, 4, 5, 6, 7 ] }
                    },
                    {
                        extend: 'pdf', text:'<i class="fa fa-file-pdf" aria-hidden="true"> PDF',title: 'Data Kendaraan',
                        exportOptions: { columns: [ 2, 3, 4, 5, 6, 7 ] },
                        customize : function(doc) {
                        doc.content[1].table.widths = [ '15%', '10%', '30%', '15%', '20%', '10%'];}
                    },
                    {
                        extend: 'print', text:'<i class="fa fa-print" aria-hidden="true"> Print',title: 'Data Kendaraan',
                        exportOptions: { columns: [ 2, 3, 4, 5, 6, 7 ] }
                    } ],

      // Definition of filter to display          
          filterDropDown: {                   
            columns: [
              { 
                idx: 3,
                title:"Pilih Jenis Kendaraan"
              },
              { 
                idx: 5,
                 title:"Pilih Merek Kendaraan"
              },
              { 
                idx: 7,
                 title:"Pilih Tahun Produksi"
              }
            ],
            bootstrap: true,
            label:"Cari: "
          }
    });
  });





  //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })

        $('#timepicker1').timepicker({
      showInputs: false
    })

    //Date picker
    $('#datepicker').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    })

    //Date picker
    $('#datepicker1').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    })

        //Date picker
    $('#datepicker2').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    })

    //Date picker
    $('#datepicker3').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    })

</script>

      
<!-- GRAFIK PENGGUNAAN KD PER BULAN -->
<script type="text/javascript">
        var barchart = document.getElementById('bar-chart-penggunaan');
        var chart = new Chart(barchart, {
          type: 'line',
          data: {
            labels: ['Jan',
                  'Feb',
                  'Mar',
                  'Apr',
                  'May',
                  'Jun',
                  'Jul',
                  'Aug',
                  'Sep',
                  'Oct',
                  'Nov',
                  'Dec'], // Merubah data tanggal menjadi format JSON
            datasets: [{
              label: 'Data Permohonan Kendaraan',
              data: <?php echo json_encode($grafik); ?>, 
              backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 2
            }]
          }
        });
</script>


<!-- GRAFIK SERVICE KD PER BULAN -->
<script type="text/javascript">
        var barchart = document.getElementById('bar-chart-service');
        var chart = new Chart(barchart, {
          type: 'bar',
          data: {
            labels: ['Jan',
                  'Feb',
                  'Mar',
                  'Apr',
                  'May',
                  'Jun',
                  'Jul',
                  'Aug',
                  'Sep',
                  'Oct',
                  'Nov',
                  'Dec'], // Merubah data tanggal menjadi format JSON
            datasets: [{
              label: 'Data Permohonan Kendaraan',
              data: <?php echo json_encode($grafik1); ?>, 
              backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 2
            }]
          }
        });
</script>


<!-- GRAFIK PENGGUNAAN KD PER FUNGSI -->
<script type="text/javascript">
        var barchart = document.getElementById('bar-chart-perfungsi');
        var chart = new Chart(barchart, {
          type: 'pie',
          data: {
            labels: ['FAES',
                    'FASPURKIPK',
                    'FDSEK',
                    'FKKK',
                    'FPPSPPUR',
                    'FPPU',
                    'SLA',
                    'UOSP'], // Merubah data tanggal menjadi format JSON
            datasets: [{
              label: 'Data Permohonan Kendaraan Per Fungsi',
              data: <?php echo json_encode($grafik2); ?>, 
              backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 2
            }]
          }
        });
</script>


        

        







</body>
</html>
