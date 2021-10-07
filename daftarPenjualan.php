<?php
    include 'koneksi.php';
    $listPenjualan = mysqli_query($koneksi,"SELECT * FROM penjualan" );
    include 'master.php';
?>
<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <h1>Daftar Penjualan</h1>
        </div>
        <div class="col-lg-2">
            <a href="penjualan.php"><button type="button" class="btn btn-primary btn-lg">Tambah Penjualan</button></a>
        </div>
    </div>
    <div class="row">
    <div class="col-lg-12">
        <table class="table table-dark">
            <tr>
                <th>Nomor Faktur</th>
                <th>Tanggal Faktur</th>
                <th>Nama Konsumen</th>
                <th>Kode Barang</th>
                <th>Jumlah</th>
                <th>Harga Satuan</th>
                <th>Harga Total</th>
            </tr>
            <?php
            foreach ($listPenjualan as $penjualan) {
                echo "
                    <tr>
                        <td>$penjualan[nomor]</td>
                        <td>$penjualan[tanggal]</td>
                        <td>$penjualan[konsumen]</td>
                        <td>$penjualan[kode]</td>
                        <td>$penjualan[jumlah]</td>
                        <td>$penjualan[hargasatuan]</td>
                        <td>$penjualan[hargatotal]</td>
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