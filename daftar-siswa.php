<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    
</head>

<?php include 'template/dashboard-admin.php'; ?>

<div class="col-md-9">
    <div class="ml-3 mt-5">
        <h3 class="mt-5">Form Daftar Siswa Sekolah</h3>

        <!-- Search Form -->
        <form method="GET" action="" class="mb-3">
            <div class="input-group">
                <input type="text" name="cari" id="cari" class="form-control" placeholder="Pencarian Data">
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
            <!-- Limit Dropdown -->
<form method="GET" action="" class="mb-3">
    <label for="limit">Tampilkan:</label>
    <select name="limit" id="limit" class="form-select" onchange="this.form.submit()">
    <option value="5" <?php echo (isset($_GET['limit']) && $_GET['limit'] == 5) ? 'selected' : ''; ?>>5</option>
        <option value="10" <?php echo (isset($_GET['limit']) && $_GET['limit'] == 10) ? 'selected' : ''; ?>>10</option>
        <option value="20" <?php echo (isset($_GET['limit']) && $_GET['limit'] == 20) ? 'selected' : ''; ?>>20</option>
        <option value="50" <?php echo (isset($_GET['limit']) && $_GET['limit'] == 50) ? 'selected' : ''; ?>>50</option>
        <option value="100" <?php echo (isset($_GET['limit']) && $_GET['limit'] == 100) ? 'selected' : ''; ?>>100</option>
        <!-- Tambahkan pilihan limit lainnya sesuai kebutuhan -->

    </select>
</form>

<?php
include 'database/koneksi.php';

// Pagination
$limit = isset($_GET['limit']) ? $_GET['limit'] : 5; // Ambil nilai limit dari parameter GET, default 10 jika tidak ada
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;

$order_by = isset($_GET['sort']) ? $_GET['sort'] : 'idpeserta';
$order_type = isset($_GET['order']) ? $_GET['order'] : 'ASC';

if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    $query = "SELECT * FROM datapes 
              WHERE namasekolah LIKE '%" . $cari . "%' 
              OR namagugus LIKE '%" . $cari . "%' 
              ORDER BY $order_by $order_type
              LIMIT $start, $limit";
} else {
    $query = "SELECT * FROM datapes
              ORDER BY $order_by $order_type
              LIMIT $start, $limit";
}

$data = mysqli_query($koneksi, $query);
?>

       <!-- Data Table -->
<table class="table table-striped table-hover">
    <thead>
        <tr>
        <th><a href="?sort=idpeserta&order=<?php echo $order_type == 'ASC' ? 'DESC' : 'ASC'; ?>">ID Peserta</a></th>
            <th><a href="?sort=namasekolah&order=<?php echo $order_type == 'ASC' ? 'DESC' : 'ASC'; ?>">Nama Sekolah</a></th>
            <th><a href="?sort=namagugus&order=<?php echo $order_type == 'ASC' ? 'DESC' : 'ASC'; ?>">Nama Gugus</a></th>
            <th><a href="?sort=namakoor&order=<?php echo $order_type == 'ASC' ? 'DESC' : 'ASC'; ?>">Nama Koordinator</a></th>
            <th><a href="?sort=kontak&order=<?php echo $order_type == 'ASC' ? 'DESC' : 'ASC'; ?>">Kontak</a></th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $counter = $start + 1; // Gunakan variabel counter untuk nomor urutan
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
    
            <td><?php echo $counter++; ?></td>
                <td><?php echo $d['namasekolah']; ?></td>
                <td><?php echo $d['namagugus']; ?></td>
                <td><?php echo $d['namakoor']; ?></td>
                <td><?php echo $d['kontak']; ?></td>
                <td>
                <button type="button" class="btn edit btn-warning btn-sm" data-toggle="modal" data-target="#editModal<?php echo $d['idpeserta']; ?>">Edit</button>
                    <a href="javascript:confirmDelete('proses/delete-siswa.php?id=<?php echo $d['idpeserta']; ?>')" class="btn btn-danger delete btn-sm">Delete</a>
                </td>
            </tr>

            <!-- Modal Edit -->
            <?php include 'edit_modal.php'; ?>
        <?php
        }
        ?>
    </tbody>
</table>

        <!-- Pagination -->
        <?php
        $result = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM datapes");
        $row = mysqli_fetch_assoc($result);
        $total_pages = ceil($row['total'] / $limit);

        echo '<ul class="pagination">';
        for ($i = 1; $i <= $total_pages; $i++) {
            echo '<li class="page-item"><a class="page-link" href="?page=' . $i . '&limit=' . $limit . '">' . $i . '</a></li>';
        }
        echo '</ul>';
        ?>
    </div>

</div>

<!-- JavaScript for Delete Confirmation -->

<script>
        function openPrintView() {
            // Open a new window for printing
            var printWindow = window.open('', '_blank');
            
            // Write the print content to the new window
            printWindow.document.write('<html><head><title>Print View</title>'
             +'<link rel="stylesheet" href="style.css" type="text/css">' 
             +'</head><body>' 
             + document.querySelector('.table').outerHTML + '</body></html>');

            // Close the document stream to allow rendering
            printWindow.document.close();

            // Trigger the print dialog
            printWindow.print();
        }
    </script>
    <script>
    function confirmDelete(delUrl) {
        if (confirm("Kamu Yakin akan menghapus Data Ini??")) {
            document.location = delUrl;
        }
    }
</script>

</body>

</html>
