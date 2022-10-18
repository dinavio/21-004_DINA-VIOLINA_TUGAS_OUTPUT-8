<?php
$koneksi = mysqli_connect("localhost","root","","db_004");
$sql= "SELECT * FROM tbl_dina";
$hasil = mysqli_query($koneksi,$sql);
?>
<br>
Nama  : DINA VIOLINA <br>
Nim   : 210411100004 <br>
Kelas : PAW C 
<hr>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Tampil Output Pertemuan 9</title>
</head>
<body style="background-color:lightpink;">
<div class="container mt-3"> 
    <form action="formtambah.php">
    <h2 style="text-align:center;">DATA DINA</h2>
    <a href ="formtambah.php" type="button" class="btn btn-secondary" >Tambah</a>
    </form>
    <table class="table">
        <tr class="table-primary">
            <th> ID </th>
            <th> NAMA </th>
            <th> ALAMAT </th>
            <th> ACTION </th>
        </tr>
        <?php
        while($row=mysqli_fetch_assoc($hasil)){
        ?>
        <tr class="table-danger">
            <td><?=$row['id_dina']?></td>
            <td><?=$row['nama_dina']?></td>
            <td><?=$row['alamat_dina']?></td>
            <td>
                <a href="delete.php?id=<?=$row['id_dina']?>">
                <button type="button" onclick="return confirm('Apakah anda ingin menghapus?')" class="btn btn-light">
                Delete</button></a>
                <a href="form_edit.php?id=<?=$row['id_dina']?>">
                <button onclick="return confirm('Apakah anda akan mengedit?')" class="btn btn-outline-secondary">
                Edit</button></a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>