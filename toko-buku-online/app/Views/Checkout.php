<?= $this->extend('Layout'); ?>  

<?= $this->section('main')?>

<div class="container">
    <h3>Review dan Submit Order</h3>
    <hr/>
    <table>
        <tr>
            <td>Laskar Pelangi</td>
            <td>@1</td>
            <td>Rp 78.000</td>
        </tr>
    </table>
    <h3 class="mt-3">Total</h3>
    <hr />
    <span>Rp. 78.000</span>
    <h3  class="mt-3">Alamat Pengiriman </h3>
    <hr />
    <p>JL Simp. Sungai Duren,</p>
    <h3  class="mt-3">Metode Bayar</h3>
    <hr />
    <p> Transfer Bank</p>
    <p>No. Rekening : ADITTIA, MANDIRI,1011011</p>
    <div class="mt-5">
        <form action="<?= base_url('submit')?>" method ="POST">
        <button type="submit" class="btn btn-success">Submit Order</button>
        </form>
    </div>
</div>

<?= $this->endSection()?>