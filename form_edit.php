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
    <title>Edit Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color:lightblue;">
    <?php
        $koneksi = mysqli_connect("localhost","root","","db_004");
        $id=$_GET['id'];
        $sql= "SELECT * FROM tbl_dina WHERE id_dina=$id";
        $hasil = mysqli_query($koneksi, $sql);
    if(!$hasil){
        echo "query SALAH";
    }
    ?>   
    <div class="container mt-3" >
    <h2>Form Edit Data Mahasiswa</h2>
    <?php
        $row=mysqli_fetch_assoc($hasil);
    ?>
    
    <form action="edit.php" method="POST">
        <div class="mb-3 mt-3">
            <label for="id_dina" class="form-label"> ID : </label>
            <input type="text" class="form-control" name="id_dina" id="id_dina" placehorder="id_dina" value="<?=$row['id_dina']?>" >
        </div>
        <div class="mb-3">
            <label for ="nama_dina" class="form-label"> NAMA : </label>
            <input type="text" class="form-control" name="nama_dina" id="nama_dina" placehorder="nama_dina" value="<?=$row['nama_dina']?>">
        </div>
        <div class="mb-3">
            <label for="alamat_dina" class="form-label">ALAMAT : </label>
            <input type="text" class="form-control" name="alamat_dina" id="alamat_dina" placehorder="alamat_dina" value="<?=$row['alamat_dina']?>"><br>
        </div>
        <button type="submit" class="btn btn-outline-success"> SUBMIT </button>
        <a href="tampil.php"><button type="kembali" class="btn btn-outline-danger">Back</button></a>
    </form>
    </div>
</body>
</html>