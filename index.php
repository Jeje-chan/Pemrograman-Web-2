<?php
include_once 'dbkoneksi.php';
include_once 'model/Produk.php';
include_once 'model/Pelanggan.php';
include_once 'model/Vendor.php';

include_once('navbar.php');
include_once('sidebar.php');

$hal =$_REQUEST['hal'];
//jika ada request dari menu di url menu di url tampilkan halaman sesuai request
if(!empty($hal)){
    include_once $hal.'.php';
}else{
    //jika tidak ada request dari menu di url tampilkan halaman home.php atau dashboard
    include_once 'home.php';
}
include_once('footer.php');
?>