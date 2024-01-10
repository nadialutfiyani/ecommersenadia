<?php
session_start();
include 'koneksi.php';

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['namaproduk'];
    $message = $_POST['alamat'];

    $query = mysqli_query($conn, "INSERT INTO tbtransaksi (name, email, phone, namaproduk, alamat) VALUES ('$name', '$email', '$phone', '$subject', '$message')");

    if ($query) {
        echo '<script>alert("Order Pemesanan Berhasil"); location.href = "index.php"</script>';
    } else {
        echo '<script>alert("Register Gagal: ' . mysqli_error($conn) . '")</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Elegant Contact Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Patua+One">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    color: #333;
    background: #fafafa;
    font-family: "Patua One", sans-serif;
}
.contact-form {
    padding: 50px;
    margin: 30px 0;
}
.contact-form h1 {
    color: #19bc9d;
    font-weight: bold;
    margin: 0 0 15px;
}
.contact-form .form-control, .contact-form .btn {
    min-height: 38px;
    border-radius: 2px;
}
.contact-form .form-control:focus {
    border-color: #19bc9d;
}
.contact-form .btn-primary, .contact-form .btn-primary:active {
    color: #fff;
    min-width: 150px;
    font-size: 16px;
    background: #19bc9d !important;
    border: none;
}
.contact-form .btn-primary:hover {
    background: #15a487 !important; 
}
.contact-form .btn i {
    margin-right: 5px;
}
.contact-form label {
    opacity: 0.7;
}
.contact-form textarea {
    resize: vertical;
}
.hint-text {
    font-size: 15px;
    padding-bottom: 20px;
    opacity: 0.6;
}
</style>
</head>
<body>
<div class="container-lg">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="contact-form">
                <h1>Form Order</h1>
                <p class="hint-text">order pemesanan makanan dan minuman toko bile bliss</p>       
                <form action=" " method="post">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="inputName">Name</label>
                                <input type="text" class="form-control" id="inputName" name="name" required>
                            </div>
                        </div>                
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" id="inputEmail" name="email" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="inputPhone">no hp</label>
                                <input type="text" class="form-control" id="inputPhone" name="phone" required>
                            </div>
                        </div>
                    </div>            
                    <div class="form-group">
                        <label for="inputSubject">Nama Produk</label>
                        <input type="text" class="form-control" id="inputSubject" name="namaproduk" required>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Alamat</label>
                        <textarea class="form-control" id="inputMessage" name="alamat" rows="5" required></textarea>

                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>