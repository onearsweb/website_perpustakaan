<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="<?= baseURL; ?>../assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <!-- Title Web -->
  <title><?= $data['title'] ?></title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="<?= baseURL; ?>../assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="<?= baseURL; ?>../assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="<?= baseURL; ?>../assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="<?= baseURL; ?>../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="<?= baseURL; ?>../assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="<?= baseURL; ?>../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <link rel="stylesheet" href="<?= baseURL; ?>../assets/vendor/libs/apex-charts/apex-charts.css" />

  <!-- Icon boxicon -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- Helpers -->
  <script src="<?= baseURL; ?>../assets/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="<?= baseURL; ?>../assets/js/config.js"></script>
</head>
<style>
  .card {
    transition: transform 0.5s, box-shadow 0.3s;
  }

  .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
  }

  .card-equal-height {
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .card-body {
    flex-grow: 1;
  }

  .card img {
    max-height: 140px;
    width: auto;
    margin: 0 auto;
  }

</style>
<body>
<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
      <div class="app-brand demo">
        <a href="dashboard.php" class="app-brand-link">
          <span class="app-brand-logo demo">
            <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <!-- SVG paths -->
            </svg>
          </span>
          <span class="app-brand-text demo menu-text fs-3 fw-bolder ms-2">Perpustakaan</span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
          <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
      </div>

      <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item <?= strpos($_SERVER['REQUEST_URI'], 'home') !== false ? 'active' : '' ?>">
          <a href="<?= baseURL; ?>/home" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Analytics">Dashboard</div>
          </a>
        </li>

        <!-- Buku -->
        <li class="menu-item <?= strpos($_SERVER['REQUEST_URI'], 'buku') !== false ? 'active' : '' ?>">
          <a href="<?= baseURL; ?>/buku" class="menu-link">
            <i class="menu-icon bx bxs-book"></i>
            <div data-i18n="Analytics">Buku</div>
          </a>
        </li>

        <!-- Users -->
        <li class="menu-item <?= strpos($_SERVER['REQUEST_URI'], 'anggota') !== false || strpos($_SERVER['REQUEST_URI'], 'admin') !== false ? 'active' : '' ?>">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class='menu-icon bx bxs-user'></i>
            <div data-i18n="Layouts">Users</div>
          </a>

          <ul class="menu-sub">
            <!-- Anggota -->
            <li class="menu-item  <?= strpos($_SERVER['REQUEST_URI'], 'anggota') !== false ? 'active' : '' ?>">
              <a href="<?= baseURL; ?>/anggota" class="menu-link">
                <i class="menu-icon bx bxs-user-account"></i>
                <div data-i18n="Analytics">Anggota</div>
              </a>
            </li>

            <!-- Admin -->
            <li class="menu-item  <?= strpos($_SERVER['REQUEST_URI'], 'admin') !== false ? 'active' : '' ?>">
              <a href="<?= baseURL; ?>/admin" class="menu-link">
                <i class="menu-icon bx bxs-user-account"></i>
                <div data-i18n="Analytics">Admin</div>
              </a>
            </li>
          </ul>
        </li>

        <!-- Peminjaman -->
        <li class="menu-item <?= strpos($_SERVER['REQUEST_URI'], 'pinjam') !== false ? 'active' : '' ?>">
          <a href="<?= baseURL; ?>/pinjam" class="menu-link">
            <i class="menu-icon tf-icons bx bx-layout"></i>
            <div data-i18n="Analytics">Peminjaman</div>
          </a>
        </li>
      </ul>
</aside>
<!-- / Menu -->