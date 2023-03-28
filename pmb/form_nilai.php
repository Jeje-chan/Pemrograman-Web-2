<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<?php
include_once('navbar.php');
include_once('sidebar.php');
?>
  <div class="content-wrapper">
    <h2 style="text-align: center;">Form Nilai Mahasiswa</h2>
    <hr>
    <div class="container">
<form method="POST" >
  <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Nama Mahasiswa</label> 
    <div class="col-8">
      <input id="name" name="name" placeholder="Masukkan Nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">Dasar-dasar Pemrograman</option>
        <option value="WEB">Pemrograman Web</option>
        <option value="BASDAT">Basis Data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" placeholder="Masukkan Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" placeholder="Masukkan Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <input id="nilai_tugas" name="nilai_tugas" placeholder="Masukkan Nilai Tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" value="simpan" name="proses" class="btn btn-primary"  >
    </div>
  </div>
</form>
<?php
$proses = $_POST['proses'];
$nama_siswa = $_POST['name'];
$mata_kuliah = $_POST['matkul'];
$uts = $_POST['nilai_uts'];
$uas = $_POST['nilai_uas'];
$tugas = $_POST['nilai_tugas'];
$_nilai = $uts + $uas + $tugas / 3;
$hasil_ujian = kelulusan($_nilai);
$grade = grade($_nilai);

if(!empty($proses)){

echo "Nama : $nama_siswa";
echo "<br>Mata Kuliah: $mata_kuliah";
echo "<br>Nilai UTS : $uts";
echo "<br>Nilai UAS : $uas";
echo "<br>Nilai Tugas Praktikum : $tugas";
echo "<br>Grade : $grade";
echo "<br>Keterangan : $hasil_ujian";
echo "<br>Data telah di$proses";
}
?>
<?php
function kelulusan($_nilai) {
    if($_nilai > 55){
        return 'Anda Lulus';
    }else{
        return 'Anda Tidak Lulus';
    }
}
function grade($_nilai) {
    if($_nilai >= 85) {
        return 'A';
    }elseif ($_nilai >= 70){
        return 'B';
    }elseif ($_nilai >= 56){
        return 'C';
    }elseif ($_nilai >= 36){
        return 'D';
    }elseif ($_nilai >= 10){
        return 'E';
    }else {
        return 'Tidak Ada Nilai';
    }
}
?>
    </div>
</div>
<?php
include_once('footer.php');
?>
  </body>
</html>