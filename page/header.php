<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="dist/dist/css/bootstrap.css">
  <link rel="stylesheet" href="plugins/sweetalert22/sweetalert2.css">
  <link rel="stylesheet" href="plugins/sweetalert22/sweetalert2.min.css">
  <script src="plugins/sweetalert22/sweetalert2.all.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    * {
      font-family: 'Montserrat', sans-serif;
    }
    input[type="number"]::-webkit-outer-spin-button,
    input[type="number"]::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
    input[type="number"] {
      -moz-appearance: textfield;
    }

    .dropdown-menu{
/*      top: 100% !important;*/
left: 10% !important;
right: 100%; !important;
/*      transform: translate(-100%, 0);*/
}
.dropdown-submenu .dropdown-menu{
/*      top: 100% !important;*/
left: auto !important;
right: 100% !important;
/*      transform: translate(-100%, 0);*/
}
.dropdown-item{
  font-size: 12px;
}


</style>

<title><?php echo ucwords($_GET['title']); ?></title>
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">RAAS - LIB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?page=">Home</a>
        </li>
        <li class="nav-item dropdown dropdown-hover">
          <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"> Master </a>
          <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
            <li class="dropdown-submenu dropdown-hover">
              <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Data Buku</a>
              <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                <li class="dropdown-submenu">
                  <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Data Pinjam</a>
                  <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                    <li><a href="index.php?page=input&data=input&title=Data Pinjam" class="dropdown-item">Input Data</a></li>
                    <li><a href="index.php?page=details&data=pinjam&title=Detail Data Pinjam" class="dropdown-item">Detail Data</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu">
                  <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Data Kembali</a>
                  <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                    <li><a href="index.php?page=details&data=pinjam&title=Data Kembali" class="dropdown-item">Detail Data</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-submenu dropdown-hover">
              <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Data Buku Induk</a>
              <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                <li><a tabindex="-1" href="index.php?page=input&data=induk&title=input buku induk" class="dropdown-item">Input Data</a></li>
                <li><a tabindex="-1" href="index.php?page=details&data=induk&title=detail buku induk" class="dropdown-item">Detail Data</a></li>
              </ul>
            </li>
            
            <li class="dropdown-divider"></li>
            <li class="dropdown-submenu dropdown-hover">
              <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Laporan</a>
              <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                <li><a tabindex="-1" href="index.php?page=laporan&data=buku&title=laporan buku" class="dropdown-item">Laporan Buku</a></li>
                <li><a tabindex="-1" href="index.php?page=laporan&data=induk&title=laporan buku induk" class="dropdown-item">Laporan Buku Induk</a></li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav> 
          <!-- <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"> Master </a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="#" class="dropdown-item">Data Pinjam </a></li>
              <li><a href="#" class="dropdown-item">Some other action</a></li>

              <li class="dropdown-divider"></li>

              
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Data Pinjam</a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">Input Data Pinjam</a>
                  </li>

              
                  <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                    </ul>
                  </li>
              

                  <li><a href="#" class="dropdown-item">level 2</a></li>
                  <li><a href="#" class="dropdown-item">level 2</a></li>
                </ul>
              </li>
              
            </ul>
          </li> -->

