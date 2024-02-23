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
    <title>Dashboard</title>
</head>
<body>
<?php include 'database/koneksi.php';?>
    <?php include 'template/dashboard-admin.php';?>

    <div class="col-md-9">
    <h3 class="ml-5 mt-5">SELAMAT DATANG DI DASHBOARD ADMIN!</h3>
</div>

    
</body>
</html>