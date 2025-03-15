<?php
include 'connect.php';

// ==================1==================
// If statement untuk mengecek POST request dari form
// Lalu definisikan variabel-variabel untuk menyimpan data yang dikirim dari POST
if (isset($_POST['create'])) {
    $title = $_POST["judul"];
    $writer = $_POST["penulis"];
    $year = $_POST["tahun_terbit"];    
    
    // ==================2==================
    // Definisikan $query untuk melakukan koneksi ke database
    $query = "INSERT INTO tb_buku (judul, penulis, tahun_terbit) VALUES ('$title', '$writer', '$year')";
    mysqli_query($conn, $query);


    // ==================3==================
    // Eksekusi query
    if (mysqli_affected_rows($conn) > 0) {
        header("Location: katalog_buku.php");
    } else {
        echo "
        <script>
            alert('Data failed');
            document.location.href = katalog_buku.php;
        </script>
        ";
        exit;
    }
}
?>