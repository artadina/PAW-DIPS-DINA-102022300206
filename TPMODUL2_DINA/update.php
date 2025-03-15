<!-- BUAT FUNGSI EDIT DATA ( ketika data berhasil di tambahkan maka akan dialihkan ke halaman katalog buku) -->
<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    echo "ID tidak ditemukan!";
    exit;
}

if (isset($_POST["update"])) {
    $judul = $_POST["judul"];
    $penulis = $_POST["penulis"];
    $tahun_terbit = $_POST["tahun_terbit"];

    $query = "UPDATE tb_buku SET judul='$judul', penulis='$penulis', tahun_terbit='$tahun_terbit' WHERE id='$id'";
    
    if (mysqli_query($conn, $query)) {
        header("Location: katalog_buku.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
