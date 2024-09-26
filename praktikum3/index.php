<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 3</title>
</head>
<body>
    <h1>Konsep Pewarisan</h1>
    <div  class="" style="font-size: 35px;">
        <?php
         include_once "OrangBiasa.php";
         include_once "OrangInggris.php";
         include_once "Mahasiswa.php";

         $james = new OrangBiasa("james");
         $james ->ucapSalam();
         echo "<br>";

         $Asep = new OrangInggris("Asep");
         $Asep ->ucapSalam();
         echo "<br>"; //override

         $adittia = new Mahasiswa ("Adittia");
         $adittia ->ucapSalam();
         echo "<br>";
         $adittia ->setNim("701230037");
         $adittia ->setProdi("Sistem Informasi");
        
         $nilaiAdittia = new Nilai();
         $nilaiAdittia->setTugas (98);
         $nilaiAdittia->setUts(91);
         $nilaiAdittia->setUas (90);

         $adittia ->setNilai($nilaiAdittia);
         $adittia ->tampilkanData();
        ?>

    </div>
</body>
</html>