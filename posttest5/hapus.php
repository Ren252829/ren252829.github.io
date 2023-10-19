<?php
require "connect.php";

$id = $_GET["id"];

$result = mysqli_query($conn, "DELETE FROM daftar_comic WHERE id = '$id'");


if ($result) {
    echo "
    <script>
    alert('Data Berhasil Dihapus!');
    document.location.href = 'dashboard.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('Data Gagal Dihapus!');
    document.location.href = 'dashboard.php';
</script>
";
}