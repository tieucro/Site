<?php

          $valororiginal = $_POST['valororiginal'];
          $taxajuros = 16;
          $taxaporc = 100;
          $numparcelas = 10;
          $resultado1 = $valororiginal * $taxajuros / $taxaporc;
          $resultado2 = $resultado1 + $valororiginal;
          $valorparcela = $resultado2 / $numparcelas; 
          $valortotal = $valororiginal + $resultado2
        ?>



<!doctype html>
<html lang="en">
<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <nav class="navbar navbar-expand-lg navbar-light bg-light">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
 <a class="navbar-brand" href="#">Questão 09</a>
 
</div>
</nav>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>QUESTÃO 09 | AV2</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome -->
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/adminlte.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
<!-- summernote -->
<link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">   
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
 <!-- Brand Logo -->
 <a href="index3.html" class="brand-link">
   <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">
   <span class="brand-text font-weight-light">AdminLTE 3</span>
 </a>

 <!-- Sidebar -->
 <div class="sidebar">
   <!-- Sidebar user panel (optional) -->
   <div class="user-panel mt-3 pb-3 mb-3 d-flex">
     <div class="image">
     <img src="dist/img/tarciano.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Tarciano Silva Bezerra</a>
     </div>
   </div>

   <!-- Sidebar Menu -->
   <nav class="mt-2">
     <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
       <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
       <li class="nav-item has-treeview menu-open">
        
             <i class="nav-item"></i>
             <a href="./index.php" class="nav-link">
             <i class="far  fa-circle nav-icon"> </i>
             <p>
             Questões</p>
         </a>
         <ul class="nav nav-treeview">
          
           <li class="nav-item">
           <a href="./questao1.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Questão 01</p>
              <a href="./questao2.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Questão 02</p>
                <a href="./questao3.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Questão 03</p>
                  <a href="./questao4.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Questão 04</p>
              <a href="./questao5.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Questão 05</p>
                <a href="./questao6.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Questão 06</p>
                  <a href="./questao7.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Questão 07</p>
              <a href="./questao8.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Questão 08</p>
                <a href="./questao9.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Questão 09</p>
                  <a href="./questao10.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Questão 10</p>
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

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?php
 
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <div class="content-header">
   <div class="container-fluid">
     <div class="row mb-2">
       <div class="col-sm-6">
         <h1 class="m-0 text-dark">Questão 09</h1>
       </div><!-- /.col -->
       <div class="col-sm-6">
         <ol class="breadcrumb float-sm-right">
           <li class="breadcrumb-item"><a href="index.php">Home</a></li>
           <li class="breadcrumb-item active">Questão 09</li>
         </ol>
       </div><!-- /.col -->
     </div><!-- /.row -->
   </div><!-- /.container-fluid -->
 </div>
 <!-- /.content-header -->

 <!-- Main content -->
 <section class="content">
   <div class="container-fluid">
     <h2>09. Escreva um algoritmo que receba o valor de um produto, acrescente 16% a esse valor, dívida em 10 parcelas e mostre para o usuário o valor da parcela e o valor total da compra. </h2>
                 <!-- Horizontal Form -->
         <div class="card card-info">
             <div class="card-header">
                 <h3 class="card-title">Horizontal Form</h3>
             </div>
             <!-- /.card-header -->
             <!-- form start -->
             <form name="form_consumo" id="form_consumo" action="" method="POST" class="form-horizontal">
                 <div class="card-body">
                 <div class="form-group row">
                     <label for="valororiginal" class="col-sm-2 col-form-label">Valor Original do Produto</label>
                     <div class="col-sm-10">
                     <input type="number" min="1" class="form-control" id="valororiginal" name="valororiginal" placeholder="Ex.: 20" required>
                     </div>
                 </div>
               
                 </div>
                 <!-- /.card-body -->
                 <div class="card-footer">
                 <button type="submit" class="btn btn-info">Calcular</button>
                 <button type="reset" class="btn btn-default float-right">Cancelar</button>
                 </div>
                 <!-- /.card-footer -->
             </form>
         </div>
 
                  <?php 
                  
                  echo "O valor da parcela é: " ;
                  echo $valorparcela; 

                  echo"  , ";

                  echo"E o Valor total do produto é:";
                  echo  $valortotal;
                  
                  ?> 

 
   </div>
   <!-- /.container-fluid -->
 </section>
 <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php

?>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
 <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>