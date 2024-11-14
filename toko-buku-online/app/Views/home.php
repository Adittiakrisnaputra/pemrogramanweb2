<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Buku Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row bg-primary-subtle">
            <div class="col-6 p-5">
                <h1>Selamat Datang Di Toko Buku Online</h1>
                <p>kami Meyediakan berbagai jenis buku dari berbagai penerbit.</p>
                <buuton class="btn btn-waring">Lihat Produk</buuton>
                
            </div>
            <div class="col-6 p-5">
                <form action="">
                <h1>Temukan Buku Favorit</h1>
                    <div class="mb-3">
                        <input type="text" name="judul" id="judul" class="from-control" placeholder="Judul Buku">
                    </div>
                    <div class="mb-3">
                        <select name="Kategori" id="Kategori" class ="from-control">
                            <option value="">--Pilih Kategori</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="pengarang" id="pengarang" placeholder="pengarang" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary"></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <h2 class="mb-3">Buku Best Seller</h2>
                <div class="row">
                    <div class="col-4">
                    <div class="card" >
                        <img src="<?= base_url()?>/image/1.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Rp. 78.000</p>
                            <a href="#" class="btn btn-primary">Add yo Chart</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="card">
                        <img src="<?= base_url()?>/image/2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Rp. 78.000</p>
                            <a href="#" class="btn btn-primary">Add yo Chart</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="card">
                        <img src="<?= base_url()?>/image/3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Rp. 78.000</p>
                            <a href="#" class="btn btn-primary">Add yo Chart</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" >
                        <img src="<?= base_url()?>/image/4.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Rp. 78.000</p>
                            <a href="#" class="btn btn-primary">Add yo Chart</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-4" >
                        <div class="card">
                        <img src="<?= base_url()?>/image/5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Rp. 78.000</p>
                            <a href="#" class="btn btn-primary">Add yo Chart</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="card"  >
                        <img src="<?= base_url()?>/image/6.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Rp. 78.000</p>
                            <a href="#" class="btn btn-primary">Add yo Chart</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="p-5 bg-danger-subtle mt-5 text-center">
        &copy; 2024. Kelas A Pemrograman Web 2. ALL rights reserved
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>