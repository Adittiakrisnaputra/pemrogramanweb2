<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Praktikum 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Daftar Buku</h1>
                <div class="my-3">
                    <button data-bs-toggle="modal" data-bs-target="#tambahModal" class="btn btn-primary"><i class="bi bi-plus-circle"></i>Tambah</button>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tbody>
                        <tr>
                            <?php foreach($dataModel->getKolomTabel() as $kolom):?>
                                <th scope="col"><?php echo $kolom; ?></th>
                            <?php endforeach?>

                            <th scope="col">Aksi</th>
                        </tr>
                        </tbody>
                    </thead>
                    <tbody>
                        <?php $no = 0;?>
                        <?php foreach($dataModel->getData() as $buku):?>
                            <tr class="">
                                <td><?php echo ++$no; ?></td>
                                <td><?php echo $buku->getJudul(); ?></td>
                                <td><?php echo $buku->getPengarang(); ?></td>
                                <td><?php echo $buku->getPenerbit(); ?></td>
                                <td><?php echo $buku->getTahun(); ?></td>

                                <td>
                                    <a href="/index.php/edit?id=1" class="btn btn-sm btn-success"><i class="bi-pencil-square">Edit</i></a>
                                    <buttom data-bs-toggle="modal" data-bs-target="#hapusModal" data-bs-id="1" class="btn btn-sm btn-danger"><i class="bi-trash"></i>Hapus</buttom>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">From Tambah Buku</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/index.php/simpan" method="POST" id="formTambah">
            <div>
                <label for="judul">judul</label>
                <input type="text" name="judul" id="judul" class="form-control">
            </div>
            <div>
                <label for="pengarang">pengarang</label>
                <input type="text" name="pengarang" id="pengarang" class="form-control">
            </div>
            <div>
                <label for="penerbit">penerbit</label>
                <input type="text" name="penerbit" id="penerbit" class="form-control">
            </div>
            <div>
                <label for="tahun">tahun</label>
                <input type="text" name="tahun" id="tahun" class="form-control">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary"><i class="bi bi-download"></i> SIMPAN</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Hapus-->
<div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Hapus Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/index.php/hapus" method="POST" id="formHpaus">
            <input type="hidden" name="id" id="idHpaus" value="">
        </form>
        <p class="">Apakah anda yakin menghapus data dengan id <span id="textId"></span>ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="sumbit" form="formHpaus" class="btn btn-primary"><i class="bi bi-recycle"></i> HAPUS</button>
      </div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        const hapusModal = document.getElementById('exampleModal')
        hapusModal.addEventListener('show.bs.modal', event => {
            // Button that triggered the modal
            const button = event.relatedTarget
            // Extract info from data-bs-* attributes
            const id = button.getAttribute('data-bs-id')
            // If necessary, you could initiate an Ajax request here
            // and then do the updating in a callback.

            // Update the modal's content.
            const idHapaus= hapusModal.querySelector('#idHapus')
            const textId= hapusModal.querySelector('#textId')

            idHapus.value =id;
            textId.textContent = id;
         })
    </script>
  </body>
</html>