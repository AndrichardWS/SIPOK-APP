<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>SIPOK-APP | Sistem Informasi Pengelolaan Kendaraan Dinas</title>

  <link rel="shortcut icon" href="<?php echo base_url();?>/assets/img/logo.png">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">

      <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
 <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="../../index3.html" class="navbar-brand">
        <img src="<?php echo base_url()?>assets/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">SIPOK-APP</span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="#" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Contact</a>
          </li>
          
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-0 ml-md-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <span style="font-size: 23px; margin-right: 20px;">Sistem Informasi Pengelolaan Kendaraan Dinas</span>
         <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#logout">Log Out</button>
      </ul>

        
       
        
     
    </div>
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








  <?php echo $contents ?>




  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020 <a href="#">AndrichardWS</a>.</strong>
    All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url()?>assets/plugins/chart.js/Chart.min.js"></script>

<!-- DataTables -->
<script src="<?php echo base_url()?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<!-- bootstrap time picker -->
<script src="<?php echo base_url()?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url()?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>



<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
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


<!-- /Grafik/Chart -->
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
