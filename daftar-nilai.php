<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai</title>

    <style>
    @media print {
        .sidebar {
            display: none !important;
        }
        .print-button {
            display: none;
        }
    }
</style>


</head>
<body>
<?php include 'database/koneksi.php';?>
    <?php include 'template/dashboard-admin.php';?>

    <div class="col-md-9">

    <h3 style="text-align: center;" class="mt-3">Rekapitulasi Daftar Nilai Lomba</h3>

        <!-- Data Table -->
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Nama Sekolah</th>
                    <th>Jenis Mata Lomba</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $data = mysqli_query($koneksi, "select * from nilai");

                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td><?php echo $d['namasekolah']; ?></td>
                        <td><?php echo $d['matalomba']; ?></td>
                        <td><?php echo $d['nilai']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

        <input type="button" class="print-button" value="Print" onclick="window.print()" />

    </div>

            </div>

            <script type="text/javascript"></script>
            </body>
            </html>