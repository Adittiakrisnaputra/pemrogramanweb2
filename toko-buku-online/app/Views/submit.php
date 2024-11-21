<?= $this->extend('Layout'); ?>  

<?= $this->section('main')?>

<div class="container p-5">
    <div class="alert alert-success">
        <strong>Success!</strong> Order Anda telah berhasil diproses.
        Silahkan Konfirmasi Pembayaran Anda ke whatsaap Admin
        <a href="https://wa.me/62088747568703" class ="btn btn-success">Hubungi</a>
    </div>
</div>

<?= $this->endSection()?>