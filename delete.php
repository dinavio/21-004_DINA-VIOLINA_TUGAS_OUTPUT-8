<?php
$koneksi = mysqli_connect("localhost","root","","db_004");
$id=$_GET['id'];
$sql= "DELETE FROM tbl_dina WHERE id_dina=$id";
$hasil = mysqli_query($koneksi, $sql);

    if($hasil){
        header("Location: tampil.php");
    }else{
        echo "Delete data gagal";
    }
?>