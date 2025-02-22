<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon rotate-n-15">

      <img class="img-profile rounded-circle" src="img/seal.png">
    </div>
    <div class="sidebar-brand-text mx-1">Pototan <sup>Assesors</sup></div>
  </a>



  <style>
    .img-profile {
      height: 70px;
      width: 70px;
    }



    .navbar-nav.sidebar.sidebar-dark.accordion {
      background-color: #4e73df;
    }


    #print-button {
      background-color: white;
      /* Primary color background */
      color: #007bff;
      border: none;
      cursor: pointer;
      position: relative;
    }

    

    @media print {

/* Hide navigation bars when printing */
.navbar-nav {
  display: none;
}


body * {
  visibility: hidden;
}

#dataTable,
#dataTable * {
  visibility: visible;
}


#dataTable {
  position: absolute;
  top: 0;
  left: 0;
}

.sticky-footer {
  display: none;
}


.input-group {
  display: none;
}

@page {
  size: auto;
  margin: 10mm;
  landscape: portrait;
}


}

th {
color: black;
}

td {
color: black;
}


.collapse-item {
white-space: nowrap;
overflow: hidden;
text-overflow: clip;
/* or 'clip' based on your preference */
/* Add any additional styling as needed */
}

  </style>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="index.php">
      <i class="fa fa-home"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Interface
  </div>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseIndex" aria-expanded="true"
      aria-controls="collapseIndex">
      <i class="fa fa-map"></i>
      <span>Section Zoning</span>
    </a>
    <div id="collapseIndex" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Land Visualization</h6>
        <a class="collapse-item" href="map.php">Land Valuation</a>
        <a class="collapse-item" href="results.php">Valuation Results per Category</a>
        <a href="draw_map.php" class="collapse-item">Mapping</a>
        <a href="map_pins.php" class="collapse-item">Location Pin</a>

        <a href="gallery.php" class="collapse-item">Gallery</a>
      </div>
    </div>
  </li>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="register.php" aria-expanded="true">
      <i class="fa fa-file"></i>
      <span>Registered Profile</span>
    </a>
  </li>


  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAnalysis" aria-expanded="true"
      aria-controls="collapseAnalysis">
      <i class="fas fa-edit"></i> <!-- Customized icon or Font Awesome icon class -->
      <span>Manage Posts</span>
    </a>
    <div id="collapseAnalysis" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Announcements</h6>
        <a class="collapse-item" href="post.php">Create New Post</a>
      </div>
    </div>
  </li>



  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>




      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
          <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
          </a>
          <!-- Dropdown - Messages -->
          <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                  aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>


        <!-- Topbar Navbar -->

        <!-- Nav Item - Messages -->
        <!-- Navbar content -->


        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
            <h3 class="h6 m-0 text-gray-800">Welcome Admin!</h3>
<?php echo $_SESSION['username']; ?>


            </span>
            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
          </a>
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </div>
        </li>

      </ul>

    </nav>
    <!-- End of Topbar -->


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>


    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

            <form action="logout.php" method="POST">

              <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>

            </form>


          </div>
        </div>
      </div>
    </div>