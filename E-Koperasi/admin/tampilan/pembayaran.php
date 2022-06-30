<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>E-Koperasi - Pembayaran Anggota</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
   <!-- Sidenav -->
   <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand">
          <img src="../assets/img/brand/ekop.jpg" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data.php">
                <i class="ni ni-books text-default"></i>
                <span class="nav-link-text">Data Anggota</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="simpanan.php">
                <i class="ni ni-box-2 text-orange"></i>
                <span class="nav-link-text">Simpanan Anggota</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pinjaman.php">
                <i class="ni ni-credit-card text-green"></i>
                <span class="nav-link-text">Pinjaman Anggota</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="pembayaran.php">
                <i class="ni ni-money-coins text-yellow"></i>
                <span class="nav-link-text">Pembayaran Anggota</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="laporan.php">
                <i class="ni ni-archive-2 text-primary"></i>
                <span class="nav-link-text">Laporan</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
 <!-- Main content -->
 <div class="main-content" id="panel">
  <!-- Topnav -->
  <nav class="navbar navbar-top navbar-expand navbar-dark bg-success border-bottom">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar links -->
        <ul class="navbar-nav align-items-center  ml-md-auto ">
          <li class="nav-item d-xl-none">
            <!-- Sidenav toggler -->
            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
              </div>
            </div>
          </li>
          <li class="nav-item d-sm-none">
            <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
              <i class="ni ni-zoom-split-in"></i>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ni ni-bell-55"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
              <!-- Dropdown header -->
              <div class="px-3 py-3">
                <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">1</strong> notifications.</h6>
              </div>
              <!-- List group -->
              <div class="list-group list-group-flush">
                <a href="#!" class="list-group-item list-group-item-action">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <img alt="Image placeholder" src="../assets/img/theme/sandhy.jpeg" class="avatar rounded-circle">
                    </div>
                    <div class="col ml--2">
                      <div class="d-flex justify-content-between align-items-center">
                        <div>
                          <h4 class="mb-0 text-sm">sandhy</h4>
                        </div>
                        <div class="text-right text-muted">
                          <small>3 hrs ago</small>
                        </div>
                      </div>
                      <p class="text-sm mb-0">Data Anggota dengan ID 1029 Telah dihapus.</p>
                    </div>
                  </div>
                </a>
              </div>
             
          </li>
        </ul>
        <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="../assets/img/theme/sandhy.jpeg">
                </span>
                <div class="media-body  ml-2  d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">Admin Sandhy</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu  dropdown-menu-right ">
              <div class="dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="profile.php" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="../../login/index.php" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- Header -->
    <div class="header bg-success pb-7">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Pembayaran Anggota</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Pembayaran Anggota</a></li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
                  <div class="row align-items-center">
                    <div class="col-8">
                      <h3 class="mb-0">Pembayaran Anggota Koperasi </h3>
                    </div>
                    <div class="col-4 text-right">
                      <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#squarespaceModal" >Tambah</button>
                    </div>
                  </div>
                </div>

             <!-- modal -->
            <!-- line modal -->
            <div class="modal fade " id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
              <div class="modal-dialog ">
              <div class="modal-content ">
                <div class="modal-header bg-success">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
    
                </div>
                <div class="modal-body">
                  
                        <!-- content goes here -->
                  <form>
                          <div class="form-group">
                            <label for="email">Id User</label>
                            <input type="text" class="form-control" placeholder="Enter email">
                          </div>
                          <div class="form-group">
                              <label for="nama">Nama Lengkap</label>
                              <input type="text" class="form-control" placeholder="Nama Lengkap">
                          </div>

                          <div class="form-group">
                              <label for="nama">Angsuran Ke-</label>
                              <input type="text" class="form-control" placeholder="Saldo">
                          </div>

                          <div class="form-group">
                              <label for="nama">Bunga</label>
                              <input type="text" class="form-control" placeholder="Jumlah">
                          </div>

                          <div class="form-group">
                              <label for="nama">Sisa</label>
                              <input type="text" class="form-control" placeholder="Sisa">
                          </div>

                          <div class="form-group">
                              <label for="nama">Denda</label>
                              <input type="text" class="form-control" placeholder="Denda">
                          </div>

                          <div class="form-group">
                              <label for="nama">Keterangan</label>
                              <input type="text" class="form-control" placeholder="Keterangan">
                          </div>

                      
                          
                        </form>

                </div>
                <div class="modal-footer ">
                  <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                  <div class="btn-group " role="group">
                    <button type="button" class="btn btn-default bg-primary " data-dismiss="modal"  role="button">Submit</button>
                    </div>
                
                  </div>
                </div>
              </div>
              </div>
            </div>

            <!-- table -->
                  <?php
                    // Include config file
                    include "../../login/config/config.php";

                    // Attempt select query execution
                    $sql = "SELECT * FROM pembayaran";
                    $result = mysqli_query($conn, $sql) or die($mysqli_error);
                    if($result){
                        if(mysqli_num_rows($result) > 0){
                          echo "<div class='table-responsive'>";
                            echo "<table class='table align-items-center table-flush'>";
                                echo "<thead class='thead-light'>";
                                    echo "<tr>";
                          
                                        echo "<th>Id</th>";
                                        echo "<th>Nama</th>";
                                        echo "<th>Angsuran Ke-</th>";
                                        echo "<th>Bunga</th>";
                                        echo "<th>Sisa</th>";
                                        echo "<th>Denda</th>";
                                        echo "<th>Keterangan</th>";
                
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['ID_USER'] . "</td>";
                                        echo "<td>" . $row['NAMA'] . "</td>";
                                        echo "<td>" . $row['ANGSURAN_KE'] . "</td>";
                                        echo "<td>" . $row['BUNGA'] . "</td>";
                                        echo "<td>" . $row['SISA_PEMBAYARAN'] . "</td>";
                                        echo "<td>" . $row['DENDA'] . "</td>";
                                        echo "<td>" . $row['KETERANGAN'] . "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";
                            echo "</table>";
                            echo "</div>";
                          
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }

                  
                    ?>
            <!-- Card footer -->
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
     
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2021 <a href="#" class="font-weight-bold ml-1" target="_blank">4'Living</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>