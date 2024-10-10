<?php

require_once "Buku.php";

class DaftarBukuModel{
    public function getData(){

        $daftar_buku = array(
            new Buku('Belajar Pemrograman Web', 'Robert T.', 'informatika', '2024'),
            new Buku('Matematika Diskrit', 'Rinaldo M.', 'Andi Publisher', '2016'),
            new Buku('Kalkulus', 'Emely S.', 'Airlannga', '2025'),
            new Buku('Metodologi Penelitian', 'Jemes W.', 'UIN Publisher', '2018'),
        );

        return $daftar_buku;
    }

    public function getKolomTabel(){
        $kolom_tabel = array(
            'No', 'Juduk', 'Pengarang', 'Penerbit', 'Tahun'
        );

        return $kolom_tabel;
    }
}