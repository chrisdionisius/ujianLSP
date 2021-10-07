<?php
    include 'koneksi.php';
    $data = mysqli_query($koneksi,"SELECT * FROM barang WHERE kode='$_GET[kode]'");
    $barang = mysqli_fetch_array($data);

    if (isset($_POST['submit'])) {
        mysqli_query($koneksi,
        "UPDATE barang SET
        nama='$_POST[nama]', 
        hargajual='$_POST[hargajual]',
        hargabeli='$_POST[hargabeli]', 
        satuan='$_POST[satuan]' 
        WHERE kode='$_GET[kode]'");
        header("Location: daftarBarang.php");
    }
    include 'master.php';
?>
<div class="container">
    <form action="" method="POST">
        <label for="Kode">Kode Barang </label>
        <input type="text" name="kode" id="kode" value="<?php echo $barang['kode'];?>" disabled class="form-control">
        <label for="Kode">Nama Barang </label>
        <input type="text" name="nama" id="nama" value="<?php echo $barang['nama']; ?>" class="form-control">
        <label for="Kode">Harga Jual</label>
        <input type="number" name="hargajual" id="hargajual" value="<?php echo $barang['hargajual']; ?>"
            class="form-control">
        <label for="Kode">Harga Beli</label>
        <input type="number" name="hargabeli" id="hargabeli" value="<?php echo $barang['hargabeli']; ?>"
            class="form-control">
        <label for="Kode">Satuan </label>
        <input type="text" name="satuan" id="satuan" value="<?php echo $barang['satuan']; ?>" class="form-control">
        <br>
        <input type="submit" value="submit" name="submit" class="btn btn-primary btn-lg btn-block">
    </form>
</div>
<?php
    include 'footer.php';
?>