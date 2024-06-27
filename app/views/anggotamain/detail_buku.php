<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="<?=baseURL; ?>/assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="<?=baseURL; ?>/assets/vendor/fonts/boxicons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


  <!-- Core CSS -->
  <link rel="stylesheet" href="<?=baseURL; ?>/assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="<?=baseURL; ?>/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="<?=baseURL; ?>/assets/css/demo.css" />
  <link rel="stylesheet" href="<?=baseURL; ?>/assets/css/wishlist.css" />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="<?=baseURL; ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <link rel="stylesheet" href="<?=baseURL; ?>/assets/vendor/libs/apex-charts/apex-charts.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="<?=baseURL; ?>/assets/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="<?=baseURL; ?>/assets/js/config.js"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
              <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                  <path d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z" id="path-1"></path>
                  <path d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z" id="path-3"></path>
                  <path d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z" id="path-4"></path>
                  <path d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z" id="path-5"></path>
                </defs>
                <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                    <g id="Icon" transform="translate(27.000000, 15.000000)">
                      <g id="Mask" transform="translate(0.000000, 8.000000)">
                        <mask id="mask-2" fill="white">
                          <use xlink:href="#path-1"></use>
                        </mask>
                        <use fill="#696cff" xlink:href="#path-1"></use>
                        <g id="Path-3" mask="url(#mask-2)">
                          <use fill="#696cff" xlink:href="#path-3"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                        </g>
                        <g id="Path-4" mask="url(#mask-2)">
                          <use fill="#696cff" xlink:href="#path-4"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                        </g>
                      </g>
                      <g id="Triangle" transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                        <use fill="#696cff" xlink:href="#path-5"></use>
                        <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </span>
            <span class="app-brand-text demo menu-text fw-bolder fs-3 ms-2">Perpustakaan</span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboard -->
          <li class="menu-item active">
            <a href="<?=baseURL; ?>/anggotacontrollers/index" class="menu-link">
              <i class="menu-icon tf-icons bx bx-detail"></i>
              <div data-i18n="Analytics">Daftar Buku</div>
            </a>
          </li>

          <li class="menu-item">
            <a href="<?=baseURL; ?>/anggotacontrollers/pengembalian" class="menu-link">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
              <div data-i18n="Tables">Pengembalian</div>
            </a>
          </li>

        </ul>
      </aside>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search..." />
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Place this tag where you want the button to render. -->
              <li class="nav-item lh-1 me-3">
                <a class="custom-button" href="halaman_wishlist.php">
                  <i class="fa-solid fa-book"></i> Wishlist
                </a>
              </li>

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="<?=baseURL; ?>/assets/img/avatars/2.png" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="<?=baseURL; ?>/assets/img/avatars/2.png" alt class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block"><?php echo $data['nama']; ?> </span>
                          <small class="text-muted">Anggota</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-user me-2"></i>
                      <span class="align-middle">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-cog me-2"></i>
                      <span class="align-middle">Settings</span>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="<?=baseURL; ?>/login/logout">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>
        <div class="content-wrapper">
        <div class="content-wrapper">
        <div class="content-wrapper">
            <div class="container mt-5">
            <?php foreach ($data['buku'] as $book): ?>
              <div class="row">
                <div class="col-md-4">
                  <img src="<?=baseURL; ?>/assets/img/book/<?php echo htmlspecialchars($book['gambar']); ?>" alt="Gambar Buku" style="width: 100%;">
                </div>
                <div class="col-md-8 book-description">
                  <h5 class="card-title"><?php echo htmlspecialchars($book['judul']); ?></h5>
                  <p class="card-author"><strong>Penulis:</strong> <?php echo htmlspecialchars($book['author']); ?></p>
                  <p class="card-category"><strong>Kategori:</strong> <?php echo htmlspecialchars($book['kategori']); ?></p>
                  <p class="card-stok"><strong>Stok: </strong><?php echo htmlspecialchars($book['stok']); ?>
                  <h6><strong>Deskripsi Buku</strong></h6>
                  <h6><strong>Sinopsis</strong></h6>
                  <p style="text-align:justify;"><?php echo htmlspecialchars($book['deskripsi']); ?><a class="read-more">Baca Selengkapnya</a></p>
                  <div class="full-description">
                    <!-- <div class="row">
                    <h6><strong>Detail</strong></h6>
                    <div class="col-md-6">
                      <h6><strong>Jumlah Halaman:</strong><br> 200</h6>
                      <h6><strong>Penerbit:</strong><br> Elex Media Komputindo</h6>
                      <h6><strong>Tanggal Terbit:</strong><br> 25 Feb 2020</h6>
                      <h6><strong>Berat:</strong><br> 0.1 kg</h6>
                    </div>
                    <div class="col-md-6">
                      <h6><strong>ISBN:</strong><br> 9786230011962</h6>
                      <h6><strong>Lebar:</strong><br> 11.4 cm</h6>
                      <h6><strong>Bahasa:</strong><br> Indonesia</h6>
                      <h6><strong>Panjang:</strong><br> 17.2 cm</h6>
                    </div> -->
                  </div>
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
                <div class="d-flex justify-content-end">
                  <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#pinjamModal" style="width:10%; position:relative; right:100px;">Pinjam</button>
                </div>

              </div>

              <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
          </div>
          <!-- / Layout page -->
        </div>

        <!-- Modal -->
        <div class="modal fade" id="pinjamModal" tabindex="-1" aria-labelledby="pinjamModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="pinjamModalLabel">Pinjam Buku Ini</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="" method="" id="pinjamForm">
                        <div class="mb-3">
                          <label for="namaBuku" class="form-label">Nama Buku</label>
                          <input type="text" class="form-control" id="namaBuku" value="Tabi" required readonly>
                        </div>
                        <div class="mb-3">
                          <label for="penulisBuku" class="form-label">Penulis Buku</label>
                          <input type="text" class="form-control" id="penulisBuku" value="Marchella" required readonly>
                        </div>
                        <div class="mb-3">
                          <label for="tanggalPinjam" class="form-label">Tanggal Peminjaman</label>
                          <input type="date" class="form-control" id="tanggalPinjam" required>
                        </div>
                        <div class="mb-3">
                          <label for="tanggalKembali" class="form-label">Tanggal Pengembalian</label>
                          <input type="date" class="form-control" id="tanggalKembali" required>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                      <button type="button" class="btn btn-primary" id="submitPinjam">Pinjam</button>
                    </div>
                  </div>
                </div>
              </div>
         <!-- Modal -->

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
      </div>
      <!-- / Layout wrapper -->
      <!-- Core JS -->
      <!-- build:js assets/vendor/js/core.js -->
      <script src="<?=baseURL; ?>/assets/vendor/libs/jquery/jquery.js"></script>
      <script src="<?=baseURL; ?>/assets/vendor/libs/popper/popper.js"></script>
      <script src="<?=baseURL; ?>/assets/vendor/js/bootstrap.js"></script>
      <script src="<?=baseURL; ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

      <script src="<?=baseURL; ?>/assets/vendor/js/menu.js"></script>
      <!-- endbuild -->

      <!-- Vendors JS -->
      <script src="<?=baseURL; ?>/assets/vendor/libs/apex-charts/apexcharts.js"></script>

      <!-- Main JS -->
      <script src="<?=baseURL; ?>/assets/js/main.js"></script>

      <!-- Page JS -->
      <script src="<?=baseURL; ?>/assets/js/dashboards-analytics.js"></script>

      <!-- Place this tag in your head or just before your close body tag. -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>

      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3Z3mDZmGRBBuHtEa2Fizl4oXJD7kamU" crossorigin="anonymous"></script>

      <!-- JS Modal -->
      <script>
        document.getElementById('submitPinjam').addEventListener('click', function() {
          // Ambil nilai tanggal peminjaman dan tanggal pengembalian dari form
          var tanggalPinjam = document.getElementById('tanggalPinjam').value;
          var tanggalKembali = document.getElementById('tanggalKembali').value;

          // Lakukan apa pun yang perlu dilakukan dengan data ini, misalnya validasi atau pengiriman ke server

          // Tutup modal setelah selesai
          var myModal = new bootstrap.Modal(document.getElementById('pinjamModal'));
          myModal.hide();
        });
      </script>
      <script>
        document.addEventListener("DOMContentLoaded", function() {
          var readMoreLink = document.querySelector(".read-more");
          var fullDescription = document.querySelector(".full-description");

          readMoreLink.addEventListener("click", function() {
            fullDescription.style.display = "block";
            readMoreLink.style.display = "none";
          });
        });
      </script>
</body>

</html>