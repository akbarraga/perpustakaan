<?php
include('inc/db.php');
include('inc/header.php');

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $result = $conn->query("SELECT * FROM buku WHERE id = $id");
    if ($result->num_rows > 0) {
        $buku = $result->fetch_assoc();
    } else {
        echo "<div class='container my-4'><p class='alert alert-danger'>Buku tidak ditemukan.</p></div>";
        include('inc/footer.php');
        exit;
    }
} else {
    header("Location: daftar_buku.php");
    exit;
}
?>

<div class="container my-5">
    <div class="row">
        <!-- Book Image (You can add an image for the book if available) -->
        <div class="col-md-4">
            <img src="path/to/book-image.jpg" alt="Buku Cover" class="img-fluid rounded shadow-lg">
        </div>

        <!-- Book Details -->
        <div class="col-md-8">
            <h2 class="display-4 text-primary"><?= $buku['judul']; ?></h2>
            <p><strong>Kategori:</strong> <span class="badge bg-info"><?= $buku['kategori']; ?></span></p>
            <p><strong>Penulis:</strong> <?= $buku['penulis']; ?></p>
            <p><strong>Tahun:</strong> <?= $buku['tahun']; ?></p>

            <div class="mt-4">
                <h5 class="text-muted">Deskripsi:</h5>
                <p class="lead"><?= nl2br($buku['deskripsi']); ?></p>
            </div>

            <a href="daftar_buku.php" class="btn btn-primary mt-3">
                <i class="bi bi-arrow-left-circle"></i> Kembali
            </a>
        </div>
    </div>
</div>

<?php include('inc/footer.php'); ?>
