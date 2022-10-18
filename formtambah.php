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
    <title>Form Tambah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color:lightblue;" >
    <div class="container mt-3"  >  
        <h2>Form Tambah Data</h2>
        <form action="proses_tambah.php" method="post">
            <div class="mb-3 mt-3">
                <label for ="nama_dina" class="form-label"> Nama : </label>
                <input type="text" name ="nama_dina" id="nama_dina" class="form-control" placehorder="nama_dina">
            </div>
            <div class="mb-3">
                <label for="alamat_dina" class="form-label"> Alamat : </label>
                <input type="text" name="alamat_dina" id="alamat_dina" class="form-control" placehorder="alamat_dina">
            </div>
            <button type="submit" class=" btn btn-info"> KIRIM </button>
            <a href="tampil.php" type="button"  class="btn btn-outline-success"> Back </a>
        </form>
    </div>
</body>
</html>