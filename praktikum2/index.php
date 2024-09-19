<!DOCTYPE html>
<?php
    include "Orang.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Praktikum 2</h1>
    <div>
        <?php 
            //proses instansiasi
            $mahasiswa = new Orang('ADITTIA KROSNA PUTRA');
            
            //menggunakan setter dan getter
            $mahasiswa->setNama ('ADITTIA KRISNA PUTRA');
            $mahasiswa->setTglLahir ('2004-02-19');
            $mahasiswa->setAlamat ('THE HOK BERINGIN LIMA');

            echo "<Br>";
            echo "Data Mahasiswa ". $mahasiswa->getNama() . "<Br>";
            echo "Nama : " . $mahasiswa->getNama () . "<Br>";
            echo "Tgl Lahir : " . $mahasiswa->getTglLahir () . "<Br>";
            echo "Alamat : " . $mahasiswa->getAlamat () . "<Br>";
            //memanggil method
            $mahasiswa->ucapkanSalam();
            

            echo"<Br>";

            $mahasiswa2 = new Orang('Ucok');
            $mahasiswa2->alamt = "UK";

            $mahasiswa2->ucapkanSalam();
        ?>
    </div>
</body>
</html>