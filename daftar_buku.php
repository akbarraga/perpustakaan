<?php include('inc/db.php'); ?>
<?php include('inc/header.php'); ?>

<div class="container my-5">
    <h2 class="text-center mb-4 fw-bold text-primary">📚 Daftar Buku Perpustakaan</h2>

    <div class="table-responsive shadow rounded-3">
        <table class="table table-hover table-striped align-middle">
            <thead class="table-primary">
                <tr>
                    <th style="width: 60%;">📖 Judul Buku</th>
                    <th style="width: 40%;">📂 Kategori</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $conn->query("SELECT * FROM buku");
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>
                            <a href='detail_buku.php?id=" . $row['id'] . "' class='text-decoration-none fw-semibold text-dark'>
                                " . htmlspecialchars($row['judul']) . "
                            </a>
                          </td>";
                    echo "<td><span class='badge bg-secondary'>" . htmlspecialchars($row['kategori']) . "</span></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include('inc/footer.php'); ?>
