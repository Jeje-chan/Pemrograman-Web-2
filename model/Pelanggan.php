<?php
class Pelanggan{
    public $koneksi;

    public function __construct(){
        global $dbh; //panggil instance object di koneksi.php
        $this->koneksi = $dbh;
    }
    public function dataPelanggan(){
        $sql = "SELECT c.*, a.nama AS plgn
        FROM pelanggan c 
        INNER JOIN kartu a ON a.id = c.kartu_id
        ORDER BY c.id DESC";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}
?>