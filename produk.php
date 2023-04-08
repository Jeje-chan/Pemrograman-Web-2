<?php
$model = new Produk();
$data_produk = $model->dataProduk();
?>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
              <li class="breadcrumb-item active">Produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-responsive">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Harga_Beli</th>
                            <th>Harga_Jual</th>
                            <th>Stok</th>
                            <th>Min_stok</th>
                            <th>Jenis Produk</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_produk as $row){
                        
                        ?>
                        <!-- code htmml untuk table data -->
                        <tr>
                            <td><?= $no ?></td>
                            <td><?=$row ['kode'] ?></td>
                            <td><?=$row ['nama'] ?></td>
                            <td><?=$row['harga_beli']?></td>
                            <td><?=$row['harga_jual']?></td>
                            <td><?=$row ['stok'] ?></td>
                            <td><?=$row ['min_stok'] ?></td>
                            <td><?=$row ['prod'] ?></td>
                        </tr>
                        <?php
                        $no++;
                        }
                        ?>
                        <!-- <a href="index.php?hal=produk_form" class="bg-gradient-primary"><button class="btn-primary">Tambah Produk</button></a> -->
                    </tbody>
                </table>
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  </div>