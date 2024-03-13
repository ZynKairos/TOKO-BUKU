<?php
require "config.php";

$buku = mysqli_query($connect, "SELECT * FROM buku");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/book.jpg" alt="Toko Buku Internal" width="80">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php">ADMIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pengadaan.php">PENGADAAN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-7">
                <h1 class="display-4 mb-4">Selamat Datang di Toko Buku Internal</h1>
                <p class="lead">Kami menyediakan berbagai pilihan buku untuk membantu memperluas ilmu dan pengetahuan Anda.</p>
            </div>
            <div class="col-lg-4 offset-lg-1">
                <img src="img/bk.avif" alt="Buku Contoh" class="img-fluid rounded shadow">
            </div>
            <div class="col-12 mt-5">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kode</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Nama Buku</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Penerbit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>
                <a href="#" class="btn btn-primary mt-3">Lihat Semua Buku</a>
            </div>
           
        </div>
    </div>

    <footer class="bg-light py-3 mt-5">
        <div class="container">
            <p class="text-muted">Copyright &copy; 2023 Toko Buku Internal. Semua Hak Dipertahankan.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>