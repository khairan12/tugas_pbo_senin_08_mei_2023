<?php

class mahasiswa{

    public $nim = "0315";
    public $nama = "khairan";
    public $jurusan = "RPL";

    function tampil_biodata(){
        echo $this->nim,"<br>"; 
        echo $this->nama,"<br>";
        echo $this->jurusan;
    }
}
$tampil = new mahasiswa();
$tampil ->tampil_biodata();
?>