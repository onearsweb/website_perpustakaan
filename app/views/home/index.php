<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
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
            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown d-flex">
              <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                <div class="avatar-online d-flex align-items-center">
                  <span class="me-2 fw-semibold">Reddis Angel</span>
                  <img src="<?= baseURL; ?>/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                </div>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item" href="#">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar-online">
                          <img src="<?= baseURL; ?>/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <span class="fw-semibold d-block">Reddis Angel</span>
                        <small class="text-muted">Admin</small>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <div class="dropdown-divider"></div>
                </li>

                <!-- Logout -->
                <li>
                  <a class="dropdown-item" href="<?= baseURL; ?>/login">
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
      <!-- / Navbar -->

      <!-- Content wrapper -->
      <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
          <div class="row">
            <!-- Dashboard -->
            <div class="col-lg-12 mb-4 order-0">
              <div class="card">
                <div class="d-flex align-items-end row">
                  <div class="col-sm-7">
                    <div class="card-body">
                      <h5 class="card-title text-primary">Selamat Datang Reddis Angel! 🎉</h5>
                      <p class="mb-4">
                        <span class="fw-bold">Siap Mengelola dengan Efektif Hari Ini?</span> Selamat Bekerja dan Semoga Hari Anda Produktif! 🚀
                      </p>
                    </div>
                  </div>
                  <div class="col-sm-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                      <img src="<?= baseURL; ?>/assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Buku -->
            <div class="col-lg-4 mb-4 order-0">  
              <a href="<?= baseURL; ?>/buku/index">
                <div class="card card-equal-height">
                  <div class="d-flex align-items-end row">
                    <div class="col-sm-9">
                      <div class="card-body">
                        <h1 class="card-title text-primary fs-3 fw-bold">Buku</h1>
                        <span class="text-muted fs-5 fst-italic fw-semibold">DiPinjam   : <?= $data['bukuPinjam'] ?></span>
                        <br>
                        <span class="text-muted fs-5 fst-italic fw-semibold">Sisa Buku  : <?= $data['sisaBuku'] ?></span>
                        <br>
                        <span class="text-muted fs-5 fst-italic fw-semibold">Total Buku : <?= $data['totalBuku'] ?></span>
                      </div>
                    </div>
                    <div class="col text-center text-sm-left">
                      <div class="card-body pb-0 px-0 px-md-4">
                        <img src="<?= baseURL; ?>/assets/img/illustrations/buku.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- Anggota -->
            <div class="col-lg-4 mb-4 order-0">
              <a href="<?= baseURL; ?>/anggota">
                <div class="card card-equal-height">
                  <div class="d-flex align-items-end row">
                    <div class="col-sm-9">
                      <div class="card-body">
                        <h1 class="card-title text-primary fs-3 fw-bold">Anggota</h1>
                        <span class="text-muted fs-5 fst-italic fw-semibold"><?= $data['totalAnggota'] ?> Terdata</span>
                      </div>
                    </div>
                    <div class="col text-center text-sm-left">
                      <div class="card-body pb-0 px-0 px-md-4">
                        <img src="<?= baseURL; ?>/assets/img/illustrations/anggota.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- Admin -->
            <div class="col-lg-4 mb-4 order-0">
              <!-- <a href="<?= baseURL; ?>/anggota/anggota_admin"> -->
              <a href="#">
                <div class="card card-equal-height">
                  <div class="d-flex align-items-end row">
                    <div class="col-sm-9">
                      <div class="card-body">
                        <h1 class="card-title text-primary fs-3 fw-bold">Admin</h1>
                        <span class="text-muted fs-5 fst-italic fw-semibold">1 Terdata</span>
                      </div>
                    </div>
                    <div class="col text-center text-sm-left">
                      <div class="card-body pb-0 px-0 px-md-4">
                        <img src="<?= baseURL; ?>/assets/img/illustrations/admin.jpeg" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- / Content -->
    </div>
    <!-- / Layout container -->
  </div>
</div>
<!-- / Layout wrapper -->