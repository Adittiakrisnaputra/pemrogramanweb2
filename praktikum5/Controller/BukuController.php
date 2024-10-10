<?php

require_once "Model/DaftarBukuModel.php";

class BukuController{
    public function jalankan(){

        //menggunakan Model
        $dataModel = new DaftarBukuModel();

        //Mengirim DataModel Ke BukuView dan menampilkannya
        include "View/BukuView.php";
    }
}