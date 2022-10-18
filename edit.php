<?php
$koneksi = mysqli_connect("localhost","root","","db_004");
$id=$_POST['id_dina'];
$nama=$_POST['nama_dina'];
$alamat=$_POST['alamat_dina'];
$sql="UPDATE tbl_dina SET id_dina=$id, nama_dina='$nama', alamat_dina='$alamat' 
WHERE id_dina=$id ";
$hasil = mysqli_query($koneksi,$sql);
if ($hasil){
    header('Location: tampil.php');
}
?>