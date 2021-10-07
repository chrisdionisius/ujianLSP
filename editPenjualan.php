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
<form action="" method="POST">
    <table>
        <tr>
            <td>Kode Barang </td>
            <td><input type="text" name="kode" id="kode" value="<?php echo $barang['kode'];?>" disabled></td>
        </tr>
        <tr>
            <td>Nama Barang </td>
            <td><input type="text" name="nama" id="nama" value="<?php echo $barang['nama']; ?>"></td>
        </tr>
        <tr>
            <td>Harga Jual</td>
            <td><input type="number" name="hargajual" id="hargajual" value="<?php echo $barang['hargajual']; ?>"></td>
        </tr>
        <tr>
            <td>Harga Beli</td>
            <td><input type="number" name="hargabeli" id="hargabeli" value="<?php echo $barang['hargabeli']; ?>"></td>
        </tr>
        <tr>
            <td>Satuan </td>
            <td><input type="text" name="satuan" id="satuan" value="<?php echo $barang['satuan']; ?>"></td>
        </tr>
        <tr>
            <td colspan=2><input type="submit" value="submit" name="submit"></td>
        </tr>
    </table>
</form>