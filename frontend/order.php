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
      $edit = mysqli_query($koneksi, "UPDATE sewa set
                        id_order = '$_POST[id_order]',
                        id_cust = '$_POST[id_cust]',
                        id_lyn = '$_POST[id_lyn]',
                        tgl_serah = '$_POST[tgl_serah]',
                        tgl_ambil = '$_POST[tgl_ambil]',
                        catatan = '$_POST[catatan]'
                        WHERE id_order = '$_GET[id_order]'
                       ");
      if($edit) //finish edit
      {
        echo "<script>
            alert('Edit data suksess!');
            document.location='order.php';
          </script>";
      }
      else
      {
        echo "<script>
            alert('Edit data GAGAL!!');
            document.location='order.php';
          </script>";
      }
    }else
    {
      //new
      $simpan = mysqli_query($koneksi, "INSERT INTO sewa (id_order, id_cust, id_lyn, tgl_serah, tgl_ambil, catatan)
                      VALUES
                        ('$_POST[id_order]',
                          '$_POST[id_cust]',
                          '$_POST[id_lyn]',
                          '$_POST[tgl_serah]',
                          '$_POST[tgl_ambil]',
                          '$_POST[catatan]')
                    ");
      if($simpan)
      {
        echo "<script>
            alert('Order Sukses, Terimakasih Sudah Percaya Kami!');
            document.location='order.php';
          </script>";
      }
      else
      {
        echo "<script>
            alert('Order GAGAL! Periksa Kembali Data Anda!');
            document.location='order.php';
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
      $hapus = mysqli_query($koneksi, "DELETE  FROM sewa WHERE id_order = '$_GET[id_order]' ");
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
        $tampil = mysqli_query($koneksi, "SELECT * FROM sewa WHERE id_order = '$_GET[id_order]' ");
        $data = mysqli_fetch_array($tampil);
        if($data)
        {
            $vid_order = $data['id_order'];
            $vid_cust = $data['id_cust'];
            $vid_lyn = $data['id_lyn'];
            $vtgl_serah = $data['tgl_serah'];
            $vtgl_ambil = $data['tgl_ambil'];
            $vcatatan = $data['catatan'];
        }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>Form Order</title>
</head>
<body>
    <!-- Jumbotron -->
        <div class="jumbotron jumbotron-fluid text-center">
            <div class="container">
            <h1 class="display-4"><span class="font-weight-bold">LAUNDRY EJA</span></h1>
            <hr>
            <p class="lead font-weight-bold">Hasil bersih dan rapi, Bisa custom pewangi, dan Bisa diantar kerumah anda <br> 
          Dimana lagi kalau bukan di Laundry Eja</p>
            </div>
        </div>
    <!-- Akhir Jumbotron -->
    <!-- Navbar -->
        <nav class="navbar navbar-expand-lg  bg-info">
            <div class="container">
            <a class="navbar-brand text-white" href="index.html"><img src="images/images (18).jpg" width="500" height="50" class="" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav text-bold">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <a class="nav-link mr-4" href="home.php">HOME</a>
                </li>
                <li class="nav-item">
                <a class="nav-link mr-4" href="daftar_layanan.php">DAFTAR LAYANAN</a>
                </li>
                <li class="nav-item">
                <a class="nav-link mr-4" href="tentang_kami.php">ABOUT US</a>
                </li>
            </ul>
            </div>
        </div> 
        </nav>
    <!-- Akhir Navbar -->
    <!-- Awal Data Order-->  
    <div class="container mt-5">
      <div class="card">
          <div class="card-header text-center text-white bg-info">
              <h4><b>DATA ORDER LAUNDRY</b></h4>
          </div>
          <div class="card-body">
              <form method="post" action="">
                  <div class="form-group">
                      <label>Id Order</label>
                      <input type="text" name="id_order" value="<?=@$vId_Sewa?>" class="form-control" placeholder="Inputkan Id Order Anda" required>
                      <label>Id Customer</label>
                      <input type="text" name="id_cust" value="<?=@$vId_Cst?>" class="form-control" placeholder="Inputkan Id Customer Anda" required>
                      <label>Id Layanan</label>
                      <input type="text" name="id_lyn" value="<?=@$vId_Mobil?>" class="form-control" placeholder="Inputkan Id Layanan Anda" required>
                      <label>Tanggal Janji Penyerahan Baju</label>
                      <input type="text" name="tgl_serah" value="<?=@$vTgl_Transaksi?>" class="form-control" placeholder="Inputkan Tanggal Penyerahan" required>
                      <label>Tanggal Pengambilan (min. H+2 Tgl Penyerahan)</label>
                      <input type="text" name="tgl_ambil" value="<?=@$vPembayaran?>" class="form-control" placeholder="Inputkan Tanggal Pengambilan" required>
                      <label>Catatan</label>
                      <input type="text" name="catatan" value="<?=@$vNominal?>" class="form-control" placeholder="Add Note" required>
                    </div>
                    <button type="submit" class="btn btn-warning text-white" name="bsimpan">Order</button>
			  		<button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>
              </form>
          </div>
      </div>
    <!-- Akhir Data Order-->
    <!-- Awal Footer -->
    <hr class="footer">
    <div class="container">
        <div class="row footer-body">
        <div class="col-md-6">
        <div class="copyright">
            <strong>Terimakasih Sudah Percaya dan Memakai Jasa Kami</strong> <br> Anda Puas Kami Bahagia</p>
        </div>
        </div>

        <div class="col-md-6 d-flex justify-content-end">
        <div class="icon-contact">
        <label class="font-weight-bold">Follow Us </label>
        <a href="#"><img src="images/social2.png" width="60" height="60" class="mr-3 ml-4" data-toggle="tooltip" title="Facebook"></a>
        <a href="#"><img src="images/social1.png" width="50" height="50" class="mr-3" data-toggle="tooltip" title="Instagram"></a>
        <a href="#"><img src="images/social3.png" width="50" height="50" class="" data-toggle="tooltip" title="WhatsApp"></a>
        </div>
        </div>
        </div>
    </div>
    <!-- Akhir Footer -->

</body>
</html>