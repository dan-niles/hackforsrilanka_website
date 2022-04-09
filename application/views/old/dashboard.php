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

  <title>Astron EITS</title>

  <?php $this->load->view('inc/stylesheets'); ?>
  <style>
    .bg-success {
      background-color: #0a4f44ed !important;
    }

    .card-title {
      font-family: 'Lato';
      text-transform: uppercase;
      letter-spacing: 5px;
      font-size: 1.7rem;
    }

    .card:hover {
      transform: translateY(-5px);
      transition-timing-function: ease-in;
      transition: 0.2s;
    }

    .card:hover>.bg-success {
      background-color: #026353 !important;
    }

    .content-wrapper {
      background: url('<?php echo base_url() ?>assets/img/bg2.png') !important;
      background-color: #ffffff00 !important;
    }
  </style>
</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-navy navbar-dark">
      <div class="container">

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item d-none d-sm-inline-block py-1">
              <a href="home.php"><img src="<?php echo base_url() ?>assets/img/logo.png" style="width:450px;margin-left: 5px"></a>
            </li>
          </ul>
        </div>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">

        </ul>
        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
          <li class="nav-item my-auto ml-2">
            <form action="<?php echo base_url() ?>main/logout" method="post">
              <button type="submit" name="logout" class="btn btn-sm btn-default px-3 p-2 br-2"><i class="fas fa-sign-out-alt"></i> Logout</button>
            </form>
          </li>

        </ul>
      </div>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container">
          <div class="row mb-2">
            <div class="col-sm-6">
              <!-- <h1 class="m-0 text-dark"> Top Navigation <small>Example 3.0</small></h1> -->
            </div><!-- /.col -->
            <div class="col-sm-6">

            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container">
          <div class="card-deck">
            <div class="card text-white bg-success">
              <a href="<?php echo base_url() ?>gen_admin/dashboard">
                <img class="card-img-top br-1" src="<?php echo base_url() ?>assets/img/gen_admin.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">General<br> Administration</h5>
                  <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                </div>
              </a>
            </div>
            <div class="card text-white bg-success">
              <a href="<?php echo base_url() ?>stores/dashboard">
                <img class="card-img-top br-1" src="<?php echo base_url() ?>assets/img/stores.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Finished<br> Good Stores</h5>
                  <!-- <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                </div>
              </a>
            </div>
          </div>
          <div class="card-deck mt-3">
            <div class="card text-white bg-success">
              <a href="<?php echo base_url() ?>">
                <div class="card-body">
                  <h5 class="card-title"><i class="fas fa-user-cog"></i> Manage Users</h5>
                  <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                </div>
              </a>
            </div>
            <div class="card text-white bg-success">
              <a href="<?php echo base_url() ?>">
                <div class="card-body">
                  <h5 class="card-title"><i class="fas fa-database"></i> Master Data</h5>
                  <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                </div>
              </a>
            </div>
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer text-sm">
      <!-- Default to the left -->
      <strong>Copyright &copy; <?php echo date('Y') ?> <a class="text-dark" href="https://www.astron.lk">Astron Limited</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- SCRIPTS -->
  <?php $this->load->view('inc/scripts'); ?>
</body>

</html>