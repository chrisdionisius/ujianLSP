<?php
    include 'koneksi.php';
    $listBarang = mysqli_query($koneksi,"SELECT * FROM barang" );
    include 'master.php';
?>
    <div class="container">
    <div class="row">
        <div class="col-lg-10">
            <h1>Daftar Barang</h1>
        </div>
        <div class="col-lg-2">
            <a href="penjualan.php"><button type="button" class="btn btn-primary btn-lg">Tambah Penjualan</button></a>
        </div>
    </div>
    <div class="row">
    <div class="col-lg-12">
    <table class="table table-dark">
        <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Harga Jual</th>
            <th>Harga Beli</th>
            <th>Satuan</th>
            <th>Aksi</th>
        </tr>
        <?php
            foreach ($listBarang as $barang) {
                echo "
                    <tr>
                        <td>$barang[kode]</td>
                        <td>$barang[nama]</td>
                        <td>$barang[hargajual]</td>
                        <td>$barang[hargabeli]</td>
                        <td>$barang[satuan]</td>
                        <td>
                            <a href=\"editBarang.php?kode=$barang[kode]\">Edit</a> |
                            <a href=\"hapusBarang.php?kode=$barang[kode]\">Hapus</a> 
                        </td>
                    </tr>
                ";
            }
        ?>
    </table>
    </div>
    </div>
    </div>
<?php
    include 'footer.php';
?>