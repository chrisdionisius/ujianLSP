<?php
    include 'koneksi.php';
    include 'master.php';
    $listBarang = mysqli_query($koneksi,"SELECT * FROM barang" );
    
    if (isset($_POST['submit'])) {
        $query = mysqli_query($koneksi,"SELECT * FROM barang where kode='$_POST[kode]'");
        $data=mysqli_fetch_array($query);
        $jumlah=$_POST['jumlah'];        
        $harga=$data['hargajual'];
        $date = date('Y-m-d', strtotime('now'));
        $total=$harga * $jumlah;

        mysqli_query($koneksi,"INSERT INTO penjualan 
        (nomor,tanggal,konsumen,kode,jumlah,hargasatuan,hargatotal) 
        values 
        ('$_POST[nomor]',
        '$date',
        '$_POST[konsumen]',
        '$_POST[kode]',
        '$_POST[jumlah]',
        $harga,
        '$total')");
         header("Location: daftarPenjualan.php");
    }

?>
    <div class="container">
    <form action="" method="POST">
        <label for="nama">Nomor Faktur</label>
        <input type="nomor" name="nomor" class="form-control">
        <label for="nama">Nama Konsumen</label>
        <input type="text" name="konsumen" class="form-control">
        <br>
        <label for="Kode">Barang</label>
        <select name="kode" id="kode" class="form-control">
            <?php
                foreach ($listBarang as $barang) {
                    echo "<option value='$barang[kode]'> $barang[nama] </option>";
                }
            ?>           
        </select>
        <br>
        <label for="Kode">Jumlah</label>
        <input type="number" name="jumlah" class="form-control">
        <br>
        <input type="submit" value="submit" name="submit" class="btn btn-primary btn-lg btn-block">
    </form>
    </div>
    <?php
    include 'footer.php';
?>