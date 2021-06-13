<?php include "config.php"?>

<?php
//koneksi database
  $server = "localhost";
  $user = "root";
  $pass = "";
  $database = "db_laundry";

  $koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));

  //tombol simpan
  if(isset($_POST['bsimpan']))
  {

    //edit or new
    if($_GET['hal'] == "edit")
    {
      //edit
      $edit = mysqli_query($koneksi, "UPDATE customer set
                        id_customer = '$_POST[id_customer]',
                        nama_customer = '$_POST[nama_customer]',
                        alamat = '$_POST[alamat]'
                        WHERE id_customer = '$_GET[id_customer]'
                       ");
      if($edit) //finish edit
      {
        echo "<script>
            alert('Edit data suksess!');
            document.location='customer.php';
          </script>";
      }
      else
      {
        echo "<script>
            alert('Edit data GAGAL!!');
            document.location= 'customer.php';
          </script>";
      }
    }else
    {
      //new
      $simpan = mysqli_query($koneksi, "INSERT INTO customer (id_customer, nama_customer, alamat)
                      VALUES ('$_POST[id_customer]',
                              '$_POST[nama_customer]',
                              '$_POST[alamat]')
                    ");
      if($simpan)
      {
        echo "<script>
            alert('Simpan data suksess!');
            document.location='customer.php';
          </script>";
      }
      else
      {
        echo "<script>
            alert('Simpan data GAGAl!!');
            document.location='customer.php';
          </script>";
      }
    }

  }

  //Hapus
  if(isset($_GET['hal']))
  {
    //hapus data
    if ($_GET['hal'] == "hapus")
     {
      //hapus
      $hapus = mysqli_query($koneksi, "DELETE  FROM customer WHERE id_customer = '$_GET[id_customer]' ");
      if($hapus) 
      {
        echo "<script>
        alert ('Hapus data Suksess!!!!');
        </script>";  
      }
    }
    
  }

  //edit
  if(isset ($_GET['hal']))
  {
      //tampilan data yang diedit
    if ($_GET['hal'] == "edit")
    {
        $tampil = mysqli_query($koneksi, "SELECT * FROM customer WHERE id_customer = '$_GET[id_customer]' ");
        $data = mysqli_fetch_array($tampil);
        if($data)
        {
            $vid_customer = $data['id_customer'];
            $vnama_customer = $data['nama_customer'];
            $valamat = $data['alamat'];
        }
    }
  }
?>

<!doctype html><html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
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
          <a class="nav-link active text-dark text-bold" href="dashboard.php"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="customer.php"><i class="fas fa-users mr-2"></i>Customer</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link active text-dark" href="karyawan.php"><i class="fas fa-user mr-2"></i>Karyawan</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link active text-dark" href="layanan.php"><i class="fas fa-list-alt mr-2"></i>Layanan</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="transaksi.php"><i class="fas fa-paper-plane mr-2"></i>Transaksi</a><hr class="bg-secondary">
        </li>
      </ul>
    </div>

    <div class="col-md-10 p-5 pt-2">
       <h3><i class="fas fa-users mr-2"></i>CUSTOMER</h3><hr>
       <table class="table table-striped table-bordered text-center ">
          <thead class="bg-dark text-white">
            <tr>
              <th scope="col">No</th>
              <th scope="col">ID Customer</th>
              <th scope="col">Nama</th>
              <th scope="col">Alamat</th>
              <th colspan="3" scope="col">Aksi</th>
            </tr>
          </thead>
          <?php
            $no =1;
            $tampil = mysqli_query($koneksi, "SELECT * from customer order by id_customer desc");
            while($data = mysqli_fetch_array($tampil)) :
          ?>
          <tbody>
            <tr>
              <td><?=$no++;?></td>
              <td><?=$data['id_customer'];?></td>
              <td><?=$data['nama_customer'];?></td>
              <td><?=$data['alamat'];?></td>
              <td><a href="customer.php?hal=edit&id_customer=<?=$data['id_customer']?>" class = "bg-warning p-2 text-white rounded" data-toggle="tooltip" title="edit">Edit</a></td>
              <td><a href="customer.php?hal=hapus&id_customer=<?=$data['id_customer']?>" class = "bg-danger p-2 text-white rounded" data-toggle="tooltip" title="hapus">Hapus</a></td>
            </tr>
          </tbody>
          <?php endwhile; ?>
      </table>

    <!-- Awal Tambah Data-->  
    <div class="container">
    <div class="card">
        <div class="card-header text-center text-white bg-dark">
            TAMBAH DATA CUSTOMER
        </div>
        <div class="card-body">
            <form method="post" action="">
                <div class="form-group">
                    <label>ID Customer</label>
                    <input type="text" name="id_customer" value="<?=@$vid_customer?>" class="form-control" placeholder="Inputkan ID anda" required>
                    <label>Nama</label>
                    <input type="text" name="nama_customer" value="<?=@$vnama_customer?>" class="form-control" placeholder="Inputkan Nama anda" required>
                    <label>Alamat</label>
                    <input type="text" name="alamat" value="<?=@$valamat?>" class="form-control" placeholder="Inputkan Alamat anda" required>
                </div>
                <button type="submit" class="btn btn-warning text-white" name="bsimpan">Simpan</button>
			  		    <button type="reset" class="btn btn-danger text-white" name="breset">Kosongkan</button>

            </form>          
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