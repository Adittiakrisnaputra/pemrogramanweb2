<?php

class Orang{
    //property
    private string $nama;
    private string $tglLahir;
    protected string $alamat;

    //constructornya
    public function __construct($nama)
    {
        $this->nama =$nama;
        echo "object dibuat". $this->nama ."dibuat <Br>";
        $this->tampilkanPassword();
    }

    //Destructor
    public function __destruct()
    {
        echo "object ". $this->nama ."dihapus <Br>";
    }

    //metod
    public function ucapkanSalam(){
        echo "<h2> Halo Perkenalkan Nama Saya ". $this->nama ."</h2>";
    }

    private function tampilkanPassword(){
        echo "Rahasia1234";
    }

    //setter
    public function setNama($nama){
        $this->nama =$nama;
    }

    //getter
    public function getNama(){
        return $this->nama;
    }

    public function setTglLahir($tglLahir){
        $this->tglLahir =$tglLahir;
    }

    public function getTglLahir(){
        return $this->tglLahir;
    }

    public function setAlamat($alamat){
        $this->alamat =$alamat;
    }

    public function getAlamat(){
        return $this->alamat;
    }
}