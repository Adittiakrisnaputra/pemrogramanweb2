 <?= $this->extend('Layout'); ?>  

 <?= $this->section('main')?>
   <div class="container">
        <div class="row bg-primary-subtle">
            <div class="col-6 p-5">
                <h1>Selamat Datang Di Toko Buku Online</h1>
                <p>kami Meyediakan berbagai jenis buku dari berbagai penerbit.</p>
                <buuton class="btn btn-waring">Lihat Produk</buuton>
                
            </div>
            <div class="col-6 p-5">
                <form action="<?= base_url('search')?>" method="GET">
                <h1>Temukan Buku Favorit</h1>
                    <div class="mb-3">
                        <input type="text" name="judul" id="judul" class="form-control" placeholder="Judul Buku">
                    </div>
                    <div class="mb-3">
                        <select name="Kategori" id="Kategori" class ="form-control">
                            <option value="">--Pilih Kategori</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="pengarang" id="pengarang" placeholder="pengarang" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Cari</button>
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
                            <p class="card-text">Rp. 80.000</p>
                            <a href="#" class="btn btn-primary">Add yo Chart</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" >
                        <img src="<?= base_url()?>/image/4.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Rp. 60.000</p>
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
<?=$this->endSection(); ?> 