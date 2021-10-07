<?php
    include 'koneksi.php';
    if (isset($_POST['submit'])){
            $users	= mysqli_query($koneksi,"INSERT INTO barang(kode,nama,hargajual,hargabeli,satuan) values ('$_POST[kode]','$_POST[nama]','$_POST[hargajual]','$_POST[hargabeli]','$_POST[satuan]')");
            echo "berhasil";
            header("Location: daftarBarang.php");
    }
    include 'master.php';
?>
<div class="container">
<form action="" method="post">
    <label for="Kode">Kode Barang</label>
    <input type="text" name="kode" id="kode" class="form-control">
    <br>
    <label for="nama">Nama Barang</label>
    <input type="text" name="nama" id="nama" class="form-control">
    <br>
    <label for="hargaJual">Harga Jual</label>
    <input type="number" name="hargajual" id="hargajual" class="form-control">
    <br>
    <label for="hargaBeli">Harga Beli</label>
    <input type="number" name="hargabeli" id="hargabeli" class="form-control">
    <br>
    <label for="satuan">Satuan</label>
    <input type="text" name="satuan" id="satuan" class="form-control">
    <br>
    <input type="submit" value="submit" name="submit" class="btn btn-primary btn-lg btn-block">
    <br>
</form>
<?php
    include 'footer.php';
?>