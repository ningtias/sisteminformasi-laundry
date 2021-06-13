<!doctype html><html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">

    <title>Admin Laundry Eja</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
    <a class="navbar-brand text-white" href="#">SELAMAT DATANG <b>ADMIN LAUNDRY EJA (WAHYUNING TIAS)</b></a>
      <form class="form-inline my-2 my-lg-0 ml-auto">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
      </form>

      
    </div>
  </nav>

  <div class="row no-gutters mt-5">

    <div class="col-md-2 bg-info mt-2 pr-3">
      <ul class="nav flex-column ml-3 mb-5">
        <li class="nav-item">
          <a class="nav-link active text-dark" href="dashboard.php"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a><hr class="bg-dark">
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="customer.php"><i class="fas fa-users mr-2"></i>Customer</a><hr class="bg-dark">
        </li>
        <li class="nav-item">
          <a class="nav-link active text-dark" href="karyawan.php"><i class="fas fa-user mr-2"></i>Karyawan</a><hr class="bg-dark">
        </li>
        <li class="nav-item">
          <a class="nav-link active text-dark" href="layanan.php"><i class="fas fa-list-alt mr-2"></i>Layanan</a><hr class="bg-dark">
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="transaksi.php"><i class="fas fa-paper-plane mr-2"></i>Transaksi</a><hr class="bg-dark">
        </li>
      </ul>
    </div>

    <div class="col-md-10 p-5 pt-2">
       <h3><i class="fas fa-tachometer-alt mr-2"></i> DASHBOARD</h3><hr>

       <div class="row text-dark">

          <div class="card bg-warning ml-3" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-users mr-2"></i>
              </div>
              <h5 class="card-title">CUSTOMER</h5>
              <div class="display-4">80</div>
              <a href="customer.php"><p class="card-text text-dark">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>

          <div class="card bg-info ml-3" style="width: 18rem;">
            <div class="card-body text-dark">
              <div class="card-body-icon">
                <i class="fas fa-user mr-2"></i>
              </div>
              <h5 class="card-title">KARYAWAN</h5>
              <div class="display-4">7</div>
              <a href="karyawan.php"><p class="card-text text-dark">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div><br>

          <div class="card bg-warning ml-3" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-list-alt mr-2"></i>
              </div>
              <h5 class="card-title">LAYANAN</h5>
              <div class="display-4">4</div>
              <a href="mobil.php"><p class="card-text text-dark">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>

       </div>

      <div class="row mt-4 mr-4">
        <div class="card ml-3 text-info text-center" style="width: 18rem;">
            <div class="card-header bg-warning display-4 pt-4 pb-4">
              <i class="fab fa-instagram"></i>
            </div>
            <div class="card-body bg-info">
              <h5 class="card-title text-dark">IINSTAGRAM</h5>
              <a href="https://www.instagram.com/u.tias?r=nametag" class="btn btn-warning">FOLLOW</a>
            </div>
        </div>

        <div class="card ml-3 text-warning text-center" style="width: 18rem;">
          <div class="card-header bg-info display-4 pt-4 pb-4">
            <i class="fab fa-whatsapp"></i>
          </div>
          <div class="card-body bg-warning">
            <h5 class="card-title text-dark">WHATSAPP</h5>
            <a href="https://wa.me/qr/4VLMFKFOFV3SH1" class="btn btn-info">HUBUNGI</a>
          </div>
        </div>

        <div class="card ml-3 text-info text-center" style="width: 18rem;">
          <div class="card-header bg-warning display-4 pt-4 pb-4">
            <i class="fab fa-facebook"></i>
          </div>
          <div class="card-body bg-info">
            <h5 class="card-title text-dark">FACEBOOK</h5>
            <a href="#" class="btn btn-warning">ADD</a>
          </div>
        </div>


      </div>
      
    </div>

  </div>

  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="admin.js"></script>
</body>
</html>
