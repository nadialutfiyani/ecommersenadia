<?php
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h1> BURGER BITE BLISS</h1>
<button class="btn btn-danger"> <a href="index.php">Kembali</a></button>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Harga</th>
      <th scope="col">Deskripsi</th>
      <th scrope="col">Stok</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $query ="SELECT * FROM tbproduk ORDER BY idproduk ASC";
        $result = mysqli_query($conn, $query);
        
        if(!$result){
            die("Query Error: ".mysqli_error($mysqli)."".mysqli_error($mysqli));
        }
        
        $no = 1;
        while ($row = mysqli_fetch_assoc($result)){

    ?>
    <tr>
      <td><?php echo $no;?></td>
      <!-- <td><?php echo $row[' tbproduk'];?></td> -->
      <td><?php echo $row['nama'];?></td>
      <td>Rp. <?php echo number_format($row['harga'],0,',',',');?></td>
      <td><?php echo $row['deskripsi'];?></td>
      <td><?php echo $row['stok'];?></td>
    </tr>
 
    <?php
    $no++;
        }
    ?>
  </tbody>
</table>
    </center>
    </div>
    </header>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js,then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>