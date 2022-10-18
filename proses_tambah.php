<?php
$koneksi = mysqli_connect("localhost","root","","db_004");
$nama = $_POST["nama_dina"];
$alamat = $_POST["alamat_dina"];

$sql="INSERT INTO tbl_dina value(null,'$nama','$alamat')";
$hasil=mysqli_query($koneksi,$sql);

if($hasil){
    header("Location: tampil.php");
}
?>