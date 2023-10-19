<?php
require 'connect.php';

if(isset($_POST['tambah'])){
    $cover = $_POST['cover'];
    $nama = $_POST['nama'];
    $genre = $_POST['genre'];
    $rating = $_POST['rating'];

    $result = mysqli_query($conn, "INSERT INTO daftar_comic (id, cover, nama, genre, rating)
        VALUES ('', '$cover', '$nama', '$genre', '$rating')");

    if ($result) {
        echo "
        <script>
            alert('data berhasil ditambahkan !');
            document.location.href = 'dashboard.php'
        </script>";        
    }else {
        echo "
        <script>
            alert('data berhasil ditambahkan !');
            document.location.href = 'tambah.php'
        </script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="add-data">
        <div class="add-form-container">
            <h1>Tambah Data</h1><hr><br>
            <form action="" method="post">
                <label for="Cover">COVER</label>
                <input type="text" name="cover" class="textfield">
                <label for="nama">NAMA</label>
                <input type="text" name="nama" class="textfield">
                <label for="genre">GENRE</label>
                <input type="text" name="genre" class="textfield">
                <label for="rating">RATING</label>
                <input type="text" name="rating" class="textfield">
                <input type="submit" name="tambah" value="Tambah Data" class="add-btn">
            </form>
        </div>
    </section>
</body>
</html>