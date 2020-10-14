<!doctype html>
<html lang="en">

<head>
  
  <title>Dashboard Template · Bootstrap</title>

  <?php $this->load->view("partials/head.php") ?>

</head>

<body>
  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Lapor</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
      data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="<?php echo site_url('sistem/logout');?>">Sign out</a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="sidebar-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <span data-feather="home"></span>
                User Data <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="<?php echo site_url('sistem/dataAdmin') ?>">
                <span data-feather="home"></span>
                Laporan Masyarakat <span class="sr-only">(current)</span>
              </a>
            </li>
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
              <a href="<?php echo site_url('sistem/export')?>"><button type="button"
                  class="btn btn-sm btn-outline-secondary">Excel</button></a>
              <a href="<?php echo site_url('sistem/cetak')?>"> <button type="button"
                  class="btn btn-sm btn-outline-secondary">Pdf</button></a>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              This week
            </button>
          </div>
        </div>

        <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

        <h2>Section title</h2>
        <div class="table-responsive">
          <table class="table table-striped table-sm" id="tableUser">
            <thead>
              <tr>
                <th>Nik</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Username</th>
                <th>Password</th>
                <th>Telp</th>
                <!-- <th>Action</th> -->
              </tr>
            </thead>
            <tbody id="target">

            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>


</body>
<?php $this->load->view("partials/footer.php") ?>

<?php $this->load->view("partials/ajaxD.php") ?>

</html>
