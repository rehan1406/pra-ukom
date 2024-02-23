
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DASHBOARD ADMIN</title>
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/095b0fc423.js"
      crossorigin="anonymous"
    ></script>

    <style>
      body {
        overflow-x: hidden;
      }

      .sidebar {
        height: 100vh;
      }

      .nav-link:hover {
        background-color: gray;
      }

      .jam {
        padding-top: 20px;
      }
    </style>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info  ">
      <a class="navbar-brand text-light ml-4" href="#"
        >SILO - Sistem Informasi Lomba</a
      >
      <p class="navbar-brand ml-auto font-bigger jam" id="current-date"></p>
      <p class="navbar-brand ml-auto font-bigger jam" id="current-time"></p>
    </nav>

    <!-- end navbar -->
    <div class="row no-gutters">
      <div class="col-md-3 bg-success sidebar">
        <p class="text-light font-weight-bolder ml-5 mt-5">MENU UTAMA</p>
        <hr class="bg-light" />

        <ul class="nav flex-column ml-3 mt-5 mb-4 mr-4">
          <li class="nav-item">
            <a class="nav-link text-white" href="../ujikompetensi/admin.php"
              ><i class="fa-solid fa-laptop mr-3"></i>Dashboard</a
            >
            <hr class="bg-secondary" />
          </li>

          <!-- Dropdown Example -->
<li class="nav-item dropdown">
    <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fa-solid fa-laptop mr-3"></i>Daftar Peserta
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="tambah-siswa.php">Tambah Data Peserta</a>
      <a class="dropdown-item" href="daftar-siswa.php">Daftar Peserta</a>
    </div>
    <hr class="bg-secondary" />
  </li>
  <!-- End Dropdown Example -->

<!-- Dropdown Example -->
<li class="nav-item dropdown">
    <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fa-solid fa-chalkboard-user mr-3"></i>Daftar Nilai
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="tambah-nilai.php">Tambah Daftar Nilai</a>
      <a class="dropdown-item" href="daftar-nilai.php">Rekapitulasi Nilai Peserta</a>
    </div>
    <hr class="bg-secondary" />
  </li>
  <!-- End Dropdown Example -->

          <li class="nav-item">
            <a class="nav-link text-white" href="proses/logout.php"
              ><i class="fa-solid fa-laptop mr-3"></i>Logout</a
            >
            <hr class="bg-secondary" />
          </li>

    <hr class="bg-secondary">
  </li>
</ul>

        </ul>
      </div>
    <!-- END SIDEBAR -->


    
    <script>
      function updateDateTime() {
        const now = new Date();
        const options = {
          weekday: "long",
          year: "numeric",
          month: "long",
          day: "numeric",
        };
        const locale = "id-ID"; // Bahasa Indonesia
        const formattedDate = new Intl.DateTimeFormat(locale, options).format(
          now
        );

        document.getElementById("current-date").textContent = formattedDate;
        document.getElementById("current-time").textContent =
          now.toLocaleTimeString();
      }

      // Update date and time initially
      updateDateTime();

      // Update date and time every second
      setInterval(updateDateTime, 1000);
    </script>
  </body>
</html>
