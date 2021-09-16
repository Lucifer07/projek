
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../dash" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../dash" class="brand-link navbar-lightblue">
      <img src="../dist/img/Jasamarga_Bali.webp" alt="Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Nuansa Inti Persada</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar ">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/admin.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="../dash" class="d-block">PJU Remote Access</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fwpan"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a id=control-panel href="../KontrolPanel" class="nav-link ">
                <i  class="fas fa-cogs nav-icon"></i>
                  <p>control panel</p>
            </a>
          </li>
          <li class="nav-item">
            <a id=panel href="#" class="nav-link">
              <i  class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Panel
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a id=panel1 href="../panel1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>panel 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a id=panel2 href="../panel2" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>panel 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a id=panel3 href="../panel3" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>panel 3</p>
                </a>
              </li>
              <li class="nav-item">
                <a id=panel4 href="../panel4" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>panel 4</p>
                </a>
              </li>
              <li class="nav-item">
                <a id=panel5 href="../panel5" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>panel 5</p>
                </a>
              </li>
              <li class="nav-item">
                <a id=panel6 href="../panel6" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>panel 6</p>
                </a>
              </li>
              <li class="nav-item">
                <a id=panel7 href="../panel7" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>panel 7</p>
                </a>
              </li>
              <li class="nav-item">
                <a id=panel8 href="../panel8" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>panel 8</p>
                </a>
              </li>
              <li class="nav-item">
                <a id=panel9 href="../panel9" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>panel 9</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a id=account href="#" class="nav-link ">
              <i class="nav-icon fas fa-users"></i>
              <p>
                account
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a id=gantipass href="../edit" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ganti password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../logout.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>keluar</p>
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../dash">Home</a>/<a id=panid >no panel</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
