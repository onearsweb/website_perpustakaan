<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="<?= baseURL; ?>/assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>perpustakaan - online</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="<?= baseURL; ?>/assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="<?= baseURL; ?>/assets/vendor/fonts/boxicons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


  <!-- Core CSS -->
  <link rel="stylesheet" href="<?= baseURL; ?>/assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="<?= baseURL; ?>/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="<?= baseURL; ?>/assets/css/demo.css" />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="<?= baseURL; ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <link rel="stylesheet" href="<?= baseURL; ?>/assets/vendor/libs/apex-charts/apex-charts.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="<?= baseURL; ?>/assets/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="<?= baseURL; ?>/assets/js/config.js"></script>
  <!-- Sweetalert2 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">
  <!-- Sweetalert2 JS -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>
</head>
<style>
  .card {
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
  }

  .card-body .btn {
    transition: background-color 0.3s, color 0.3s;
  }

  .card-body .btn:hover {
    background-color: #007bff;
    color: #fff;
  }

  .card-link {
    text-decoration: none;
    color: inherit;
  }
  .card-link:hover {
    text-decoration: none;
    color: inherit;
  }

  .card-title {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    height: 2.4em; /* Adjust based on the line-height */
  }
</style>

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
            <a href="<?= baseURL; ?>/anggotacontrollers/index" class="menu-link">
              <i class="menu-icon tf-icons bx bx-detail"></i>
              <div data-i18n="Analytics">Daftar Buku</div>
            </a>
          </li>

          <li class="menu-item">
            <a href="<?= baseURL; ?>/anggotacontrollers/pengembalian" class="menu-link">
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
                <a class="custom-button" href="<?= baseURL; ?>/cartcontrollers/index">
                  <i class="fa-solid fa-book"></i> Cart
                </a>
              </li>

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="<?= baseURL; ?>/assets/img/avatars/2.png" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="<?= baseURL; ?>/assets/img/avatars/2.png" alt class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block"> <?php echo $data['nama']; ?> </span>
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
                    <a class="dropdown-item" href="<?= baseURL; ?>/login/logout">
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
        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4">Daftar Buku</h4>

            <!-- Examples -->
            <div class="col-lg-12 mb-4 order-0">
              <div class="card">
                <div class="d-flex align-items-end row">
                  <div class="col-sm-7">
                    <div class="card-body">
                      <h5 class="card-title">Halo <?php echo $data['nama']; ?>,</h5>
                      <p class="fs-4 mb-4">
                        <span class="fw-bold">Temukan Buku yang Akan Kamu Baca Disini!</span>
                      </p>
                    </div>
                  </div>
                  <div class="col-sm-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                      <img src="<?= baseURL; ?>/assets/img/backgrounds/buku.png" height="140" alt="View Badge User" data-app-dark-img="backgrounds/book.png" data-app-light-img="backgrounds/book.png" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
      
            <div class="container mt-5">
              <div class="row mb-5">
                <!-- Dropdown Filter Rak -->
                <div class="col-12 mb-3">
                  <label for="filterRak" class="form-label">Rak:</label>
                  <select id="filterRak" class="form-select" onchange="filterRak()">
                    <option value="">Pilih Rak</option>
                    <option value="A">Rak A</option>
                    <option value="B">Rak B</option>
                    <option value="C">Rak C</option>
                    <option value="D">Rak D</option>
                  </select>
                </div>

                <?php foreach ($data['buku'] as $book) : ?>
                  <div class="col-md-3 mb-3 d-flex">
                    <a href="<?= baseURL; ?>/anggotacontrollers/detailbuku/<?= $book['id']; ?>" class="card-link">
                      <div class="card h-100 <?php if ($book['stok'] <= 0) echo 'card-empty'; ?>">
                        <div class="position-relative">
                          <img class="card-img-top" src="<?= baseURL; ?>/assets/img/book/<?php echo htmlspecialchars($book['gambar']); ?>" alt="<?php echo htmlspecialchars($book['gambar']); ?>" />
                          <?php if ($book['stok'] <= 0) : ?>
                            <div class="card-overlay">
                              <div class="text-overlay">
                                <div class="text-content">
                                  Kosong
                                </div>
                              </div>
                            </div>
                          <?php endif; ?>
                        </div>
                        <div class="card-body">
                          <h5 class="card-title"><?php echo htmlspecialchars($book['judul']); ?></h5>
                          <p class="card-author"><strong>Penulis:</strong> <?php echo htmlspecialchars($book['author']); ?></p>
                          <p class="card-category"><strong>Kategori:</strong> <?php echo htmlspecialchars($book['kategori']); ?></p>
                          <p class="card-stok"><strong>Stok: </strong><?php echo htmlspecialchars($book['stok']); ?></p>
                    </a>
                          <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-outline-primary btn-sm <?php if ($book['stok'] <= 0) echo 'disabled'; ?>" data-bs-toggle="modal" data-bs-target="#pinjamModal<?php echo $book['id']; ?>" <?php if ($book['stok'] <= 0) echo 'disabled'; ?>>Pinjam</button>
                            <button type="button" class="btn btn-primary btn-sm <?php if ($book['stok'] <= 0) echo 'disabled'; ?>" onclick="addToCart(<?php echo $book['id']; ?>)" <?php if ($book['stok'] <= 0) echo 'disabled'; ?>>
                              <i class="fa-solid fa-book"></i> Cart
                            </button>
                          </div>
                        </div>
                      </div>
                  </div>

                  <div class="modal fade" id="pinjamModal<?= $book['id']; ?>" tabindex="-1" aria-labelledby="pinjamModalLabel<?= $book['id']; ?>" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="pinjamModalLabel<?= $book['id']; ?>">Pinjam Buku Ini</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form id="pinjamForm<?= $book['id']; ?>">
                            <input type="hidden" name="id_buku" value="<?= $book['id']; ?>">
                            <input type="hidden" name="nim_anggota" value="<?= $_SESSION['user_nim']; ?>">
                            <div class="mb-3">
                              <label for="namaBuku<?= $book['id']; ?>" class="form-label">Nama Buku</label>
                              <input type="text" class="form-control" id="namaBuku<?= $book['id']; ?>" value="<?= htmlspecialchars($book['judul']); ?>" required readonly>
                            </div>
                            <div class="mb-3">
                              <label for="penulisBuku<?= $book['id']; ?>" class="form-label">Penulis Buku</label>
                              <input type="text" class="form-control" id="penulisBuku<?= $book['id']; ?>" value="<?= htmlspecialchars($book['author']); ?>" required readonly>
                            </div>
                            <div class="mb-3">
                              <label for="tanggalPinjam<?= $book['id']; ?>" class="form-label">Tanggal Peminjaman</label>
                              <input type="date" class="form-control" id="tanggalPinjam<?= $book['id']; ?>" name="tgl_pinjam" value="<?= date('Y-m-d'); ?>" readonly required>
                            </div>
                            <div class="mb-3">
                              <label for="tanggalKembali<?= $book['id']; ?>" class="form-label">Tanggal Pengembalian</label>
                              <input type="date" class="form-control" id="tanggalKembali<?= $book['id']; ?>" name="tenggat_pengembalian" min="<?= date('Y-m-d'); ?>" required>
                            </div>
                            <div class="mb-3">
                              <label for="jumlahPinjam<?= $book['id']; ?>" class="form-label">Jumlah Pinjam</label>
                              <?php if ($book['stok'] > 0) : ?>
                                <input type="number" class="form-control" id="jumlahPinjam<?= $book['id']; ?>" name="jumlah_pinjam" required min="1" max="<?= $book['stok']; ?>">
                              <?php else : ?>
                                <input type="number" class="form-control" id="jumlahPinjam<?= $book['id']; ?>" name="jumlah_pinjam" required min="1" max="0" readonly>
                              <?php endif; ?>
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                          <button type="button" class="btn btn-primary" id="submitPinjam<?= $book['id']; ?>" onclick="submitPinjam(<?= $book['id']; ?>)">Pinjam</button>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>

            <!-- Content wrapper -->
          </div>
          <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
      </div>
      <!-- / Layout wrapper -->
      <!-- Core JS -->
      <!-- build:js assets/vendor/js/core.js -->
      <script src="<?= baseURL; ?>/assets/vendor/libs/jquery/jquery.js"></script>
      <script src="<?= baseURL; ?>/assets/vendor/libs/popper/popper.js"></script>
      <script src="<?= baseURL; ?>/assets/vendor/js/bootstrap.js"></script>
      <script src="<?= baseURL; ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

      <script src="<?= baseURL; ?>/assets/vendor/js/menu.js"></script>
      <!-- endbuild -->

      <!-- Vendors JS -->
      <script src="<?= baseURL; ?>/assets/vendor/libs/apex-charts/apexcharts.js"></script>

      <!-- Main JS -->
      <script src="<?= baseURL; ?>/assets/js/main.js"></script>

      <!-- Page JS -->
      <script src="<?= baseURL; ?>/assets/js/dashboards-analytics.js"></script>

      <!-- Place this tag in your head or just before your close body tag. -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>

      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3Z3mDZmGRBBuHtEa2Fizl4oXJD7kamU" crossorigin="anonymous"></script>

      <!-- JS Modal -->
      <script>
        // JavaScript untuk mengatur tanggal peminjaman saat modal dibuka
        document.addEventListener('DOMContentLoaded', function() {
          <?php foreach ($data['buku'] as $book) : ?>
            var tanggalPinjamInput<?= $book['id']; ?> = document.getElementById('tanggalPinjam<?= $book['id']; ?>');
            tanggalPinjamInput<?= $book['id']; ?>.value = '<?= date('Y-m-d'); ?>';
          <?php endforeach; ?>
        });

        // Fungsi untuk menangani klik tombol "Pinjam"
        function submitPinjam(bookId) {
          var formId = 'pinjamForm' + bookId;
          var form = document.getElementById(formId);

          // Simulasi data yang akan dikirim
          var formData = new FormData(form); // Menggunakan FormData untuk mengambil data formulir

          // Mengirim data menggunakan AJAX
          $.ajax({
            type: 'POST',
            url: '<?= baseURL; ?>/pinjamcontrollers/pinjam',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
              // Respons dari server dapat digunakan untuk menentukan berhasil atau gagal
              if (response.success) {
                Swal.fire({
                  icon: 'success',
                  title: 'Sukses!',
                  text: 'Buku berhasil dipinjam.',
                  showConfirmButton: false,
                  timer: 1500
                }).then(function() {
                  $('#pinjamModal' + bookId).modal('hide');
                  window.location.href = '<?= baseURL; ?>/anggotacontrollers/pengembalian';
                });
              } else {
                Swal.fire({
                  icon: 'error',
                  title: 'Gagal!',
                  text: 'Gagal meminjam buku. Silakan coba lagi.'
                });
              }
            },
            error: function() {
              Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: 'Terjadi kesalahan saat memproses permintaan. Silakan coba lagi.'
              });
            }
          });
        }

        // Fungsi untuk menangani klik tombol "Wishlist"
        function addToWishlist(bookId) {
          // Kirim permintaan AJAX menggunakan fetch
          fetch('add_to_wishlist.php', {
              method: 'POST',
              headers: {
                'Content-Type': 'application/json',
              },
              body: JSON.stringify({
                bookId: bookId
              }),
            })
            .then(response => response.json())
            .then(data => {
              if (data.status === 'success') {
                // Tampilkan alert sukses menggunakan sweetalert2
                Swal.fire({
                  icon: 'success',
                  title: 'Sukses!',
                  text: 'Buku berhasil ditambahkan ke wishlist kamu.',
                  showConfirmButton: false,
                  timer: 1500 // Durasi alert ditampilkan dalam milidetik
                });
              } else {
                // Tampilkan alert gagal menggunakan sweetalert2
                Swal.fire({
                  icon: 'error',
                  title: 'Gagal!',
                  text: 'Gagal menambahkan buku ke wishlist. Silakan coba lagi.'
                });
              }
            })
            .catch(error => {
              console.error('Error:', error);
              // Tampilkan alert kesalahan jika terjadi kesalahan saat kirim permintaan
              Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: 'Terjadi kesalahan saat menambahkan buku ke wishlist. Silakan coba lagi nanti.'
              });
            });
        }

        function addToCart(bookId) {
          const xhr = new XMLHttpRequest();
          xhr.open('POST', '<?= baseURL; ?>/cartcontrollers/addToCart/' + bookId, true);
          xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

          xhr.onload = function() {
            if (xhr.status === 200) {
              // Optionally update the UI or show a message to the user
              alert('Book added to cart successfully!');
            } else {
              alert('Failed to add book to cart.');
            }
          };

          xhr.send();
        }

        function filterRak() {
          var rak = document.getElementById('filterRak').value;
          if (rak) {
            window.location.href = '<?= baseURL; ?>/anggotacontrollers/rak/' + rak;
          }
        }
      </script>
</body>

</html>