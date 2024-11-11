<aside class="left-sidebar with-vertical">
      <!-- ---------------------------------- -->
      <!-- Start Vertical Layout Sidebar -->
      <!-- ---------------------------------- -->
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="index.html" class="text-nowrap logo-img">
          <img src="{{ asset('assets/images/logos/logo-light.svg') }}" class="dark-logo" alt="Logo-Dark" />
          <!-- <img src="assets/images/logos/logo-dark.svg" class="light-logo" alt="Logo-light" /> -->
        </a>
        <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
          <i class="ti ti-x"></i>
        </a>
      </div>
      <div class="scroll-sidebar" data-simplebar>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
          <ul id="sidebarnav" class="mb-0">
            
            @if (auth()->user()->role == 'Admin')
            <!-- ============================= -->
            <!-- Home -->
            <!-- ============================= -->
            <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link sidebar-link primary-hover-bg" href="{{ route('dashboard') }}" aria-expanded="false">
                <span class="aside-icon p-2 bg-primary-subtle rounded-1">
                  <iconify-icon icon="solar:screencast-2-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Beranda</span>
              </a>
            </li>
            <!-- ============================= -->
            <!-- Master Data -->
            <!-- ============================= -->
            <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
              <span class="hide-menu">Master Data</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link sidebar-link primary-hover-bg" href="{{ route('pakaian.index') }}" aria-expanded="false">
                <span class="aside-icon p-2 bg-success-subtle rounded-1">
                  <iconify-icon icon="solar:file-text-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Pakaian</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link success-hover-bg" href="{{ route('layanan.index') }}" aria-expanded="false">
                <span class="aside-icon p-2 bg-success-subtle rounded-1">
                  <iconify-icon icon="solar:smart-speaker-minimalistic-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Jenis Layanan</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link warning-hover-bg" href="{{ route('pembayaran.index') }}" aria-expanded="false">
                <span class="aside-icon p-2 bg-warning-subtle rounded-1">
                  <iconify-icon icon="solar:login-2-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Jenis Pembayaran</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link danger-hover-bg" href="{{ route('petugas.index') }}" aria-expanded="false">
                <span class="aside-icon p-2 bg-danger-subtle rounded-1">
                  <iconify-icon icon="solar:user-plus-broken" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Petugas</span>
              </a>
            </li>
            <!-- ============================= -->
            <!-- LAINNYA -->
            <!-- ============================= -->
            <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
              <span class="hide-menu">Lainnya</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link sidebar-link indigo-hover-bg justify-content-between" href="{{ route('index') }}" aria-expanded="false">
                <div class="d-flex align-items-center">
                  <span class="aside-icon p-2 bg-indigo-subtle rounded-1">
                    <iconify-icon icon="solar:smile-circle-line-duotone" class="fs-6"></iconify-icon>
                  </span>
                  <span class="hide-menu ps-1">Transaksi</span>
                </div>
                <div class="hide-menu">
                  <span class="hide-menu badge rounded-pill border border-success text-success fs-2 me-7">Laundry</span>
                </div>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link secondary-hover-bg" href="#" aria-expanded="false">
                <span class="aside-icon p-2 bg-secondary-subtle rounded-1">
                  <iconify-icon icon="solar:layers-minimalistic-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">History Order</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link sidebar-link warning-hover-bg" href="javascript:void(0)" aria-expanded="false">
                <span class="aside-icon p-2 bg-warning-subtle rounded-1">
                  <iconify-icon icon="solar:star-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <div class="lh-base hide-menu">
                  <span class="hide-menu ps-1 d-flex">Laporan</span>
                  <span class="hide-menu ps-1 d-flex fs-2">Buat Laporan disini!</span>
                </div>
              </a>
            </li>

            @elseif (auth()->user()->role == 'Petugas')
            <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
              <span class="hide-menu">Master Data</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link danger-hover-bg" href="{{ route('petugas.index') }}" aria-expanded="false">
                <span class="aside-icon p-2 bg-danger-subtle rounded-1">
                   <iconify-icon icon="solar:user-plus-broken" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Petugas</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
              <span class="hide-menu">Lainnya</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link secondary-hover-bg" href="#" aria-expanded="false">
                <span class="aside-icon p-2 bg-secondary-subtle rounded-1">
                  <iconify-icon icon="solar:layers-minimalistic-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">History Order</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link sidebar-link warning-hover-bg" href="javascript:void(0)" aria-expanded="false">
                <span class="aside-icon p-2 bg-warning-subtle rounded-1">
                  <iconify-icon icon="solar:star-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <div class="lh-base hide-menu">
                  <span class="hide-menu ps-1 d-flex">Laporan</span>
                  <span class="hide-menu ps-1 d-flex fs-2">Lihat Laporan disini!</span>
                </div>
              </a>
            </li>

            @else
            <li class="sidebar-item">
              <a class="sidebar-link sidebar-link warning-hover-bg" href="javascript:void(0)" aria-expanded="false">
                <span class="aside-icon p-2 bg-warning-subtle rounded-1">
                  <iconify-icon icon="solar:star-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <div class="lh-base hide-menu">
                  <span class="hide-menu ps-1 d-flex">Laporan</span>
                  <span class="hide-menu ps-1 d-flex fs-2">Lihat Laporan disini!</span>
                </div>
              </a>
            </li>
            @endif
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>


      <div class=" fixed-profile mx-3 mt-3">
        <div class="card bg-info-subtle mb-0 shadow-none">
          <div class="card-body p-4">
            <div class="d-flex align-items-center justify-content-between gap-3">
              <div class="d-flex align-items-center gap-3">
                <img src="{{ asset('assets/images/profile/user-1.jpg') }}" width="45" height="45" class="img-fluid rounded-circle" alt="spike-img" />
                <div>
                  <h5 class="mb-1">{{ auth()->user()->name }}</h5>
                  <p class="mb-0">{{ auth()->user()->role }}</p>
                </div>
              </div>
              <a href="{{ route('logout') }}" class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Logout">
                <iconify-icon icon="solar:logout-line-duotone" class="fs-8"></iconify-icon>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- ---------------------------------- -->
      <!-- Start Vertical Layout Sidebar -->
      <!-- ---------------------------------- -->
    </aside>