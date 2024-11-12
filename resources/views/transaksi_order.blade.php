@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row">
            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <!-- <h4 class="card-title">Visit From USA</h4>
                  <div id="usa" class="h-270"></div> -->
                  <!-- <div class="mt-4">
                    <div class="hstack gap-4 mb-4">
                      <h6 class="mb-0 flex-shrink-0 w25">LA</h6>
                      <div class="progress bg-light-subtle mt-1 w-100 h-5">
                        <div class="progress-bar text-bg-info" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <h6 class="mb-0 flex-shrink-0 w35">28%</h6>
                    </div>
                    <div class="hstack gap-4 mb-4">
                      <h6 class="mb-0 flex-shrink-0 w25">NY</h6>
                      <div class="progress bg-light-subtle mt-1 w-100 h-5">
                        <div class="progress-bar text-bg-primary" role="progressbar" style="width: 21%" aria-valuenow="21" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <h6 class="mb-0 flex-shrink-0 w35">21%</h6>
                    </div>
                    <div class="hstack gap-4 mb-4">
                      <h6 class="mb-0 flex-shrink-0 w25">KA</h6>
                      <div class="progress bg-light-subtle mt-1 w-100 h-5">
                        <div class="progress-bar text-bg-danger" role="progressbar" style="width: 18%" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <h6 class="mb-0 flex-shrink-0 w35">18%</h6>
                    </div>
                    <div class="hstack gap-4">
                      <h6 class="mb-0 flex-shrink-0 w25">AZ</h6>
                      <div class="progress bg-light-subtle mt-1 w-100 h-5">
                        <div class="progress-bar text-bg-indigo" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <h6 class="mb-0 flex-shrink-0 w35">12%</h6>
                    </div>
                  </div> -->
                    <div class="row">
                        <div class="col-12 mb-2 mb-sm-0">
                        <a class="btn btn-white text-dark border fw-normal d-flex align-items-center justify-content-center rounded-2 py-6 shadow-none mb-3">
                            <span class="d-none d-sm-block me-1 flex-shrink-0">Masukkan Data Transaksi</span> 
                        </a>
                        </div>
                        <form action="{{ route('login_proses') }}" method="post">
                            @csrf
                            <div class="mb-4">
                            <label for="" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="" id="">
                            <label for="" class="form-label">Harga</label>
                            <input type="number" class="form-control" name="" id="">
                            <label for="" class="form-label">Jumlah</label>
                            <input type="number" class="form-control" name="" id="">
                            <label for="" class="form-label">Subtotal</label>
                            <input type="number" class="form-control" name="" id="">
                            <label for="" class="form-label">Pembayaran</label>
                            <input type="text" class="form-control" name="" id="">
                            </div>
                            <button type="submit" class="btn btn-primary w-50 mb-4 rounded-pill">Tambah</button>
                        </form>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                    <div class="col-12 mb-2 mb-sm-0">
                        <a class="btn btn-white text-dark border fw-normal d-flex align-items-center justify-content-center rounded-2 py-6 shadow-none mb-3">
                            <span class="d-none d-sm-block me-1 flex-shrink-0"> Daftar Pembelanjaan</span> 
                        </a>
                    </div>
                  <div class="table-responsive overflow-x-auto products-tabel">
                    <table class="table text-nowrap customize-table mb-0 align-middle">
                      <thead class="text-dark fs-4">
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Kuantitas</th>
                          <th>Subtotal</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                       <tr>
                        <td>1</td>
                        <td>Akai</td>
                        <td>2</td>
                        <td>30.000</td>
                        <td>
                            <a href="">Edit</a>
                            <a href="">Hapus</a>
                        </td>

                       </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8 mb-2 mb-sm-0">
                        <a class="btn btn-white text-dark border fw-normal d-flex align-items-center justify-content-center rounded-2 py-6 shadow-none mb-3">
                            <span class="d-none d-sm-block me-1 flex-shrink-0">Keterangan Pembiayaan</span> 
                        </a>
                        </div>
                        <form action="{{ route('login_proses') }}" method="post">
                            @csrf
                            <div class="mb-4">
                            <label for="" class="form-label">Total Harga</label>
                            <input type="text" class="form-control" name="" id="">
                            </div>
                            <div class="mb-4">
                            <label for="" class="form-label">Diterima</label>
                            <input type="text" class="form-control" name="" id="">
                            </div>
                            <button type="submit" class="btn btn-primary w-50 mb-4 rounded-pill">Hitung</button>
                        </form>
                        <form action="">
                            <div class="mb-4">
                            <label for="" class="form-label">Kembalian</label>
                            <input type="text" class="form-control" name="" id="">
                            </div>
                        </form>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body">
                    <div class="col-6 mb-2 mb-sm-0">
                        <a class="btn btn-white text-dark border fw-normal d-flex align-items-center justify-content-center rounded-2 py-6 shadow-none mb-3">
                            <span class="d-none d-sm-block me-1 flex-shrink-0">Informasi Stok</span> 
                        </a>
                    </div>
                  <div class="table-responsive overflow-x-auto products-tabel">
                    <table class="table text-nowrap customize-table mb-0 align-middle">
                      <thead class="text-dark fs-4">
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Kuantitas</th>
                          <th>Subtotal</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                       <tr>
                        <td>1</td>
                        <td>Akai</td>
                        <td>2</td>
                        <td>30.000</td>
                        <td>
                            <a href="">Edit</a>
                            <a href="">Hapus</a>
                        </td>

                       </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
    </div>
</div>
@endsection

<!-- -------------Show Modal------------------ -->
                      <li class="nav-item dropdown">
                        <a class="nav-link position-relative ms-6" href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown" aria-expanded="false">
                          <div class="d-flex align-items-center flex-shrink-0">
                            <div class="user-profile me-sm-3 me-2">
                              <img src="assets/images/profile/user-1.jpg" width="45" class="rounded-circle" alt="spike-img">
                            </div>
                            <span class="d-sm-none d-block"><iconify-icon icon="solar:alt-arrow-down-line-duotone"></iconify-icon></span>

                            <div class="d-none d-sm-block">
                              <h6 class="fw-bold fs-4 mb-1 profile-name">
                                Mike Nielsen
                              </h6>
                              <p class="fs-3 lh-base mb-0 profile-subtext">
                                Admin
                              </p>
                            </div>
                          </div>
                        </a>
                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                          <div class="profile-dropdown position-relative" data-simplebar>
                            <div class="d-flex align-items-center justify-content-between pt-3 px-7">
                              <h3 class="mb-0 fs-5">User Profile</h3>
                              <button type="button" class="border-0 bg-transparent" aria-label="Close">
                                <iconify-icon icon="solar:close-circle-line-duotone" class="fs-7 text-muted"></iconify-icon>
                              </button>
                            </div>

                            <div class="d-flex align-items-center mx-7 py-9 border-bottom">
                              <img src="assets/images/profile/user-1.jpg" alt="user" width="90" class="rounded-circle" />
                              <div class="ms-4">
                                <h4 class="mb-0 fs-5 fw-normal">Mike Nielsen</h4>
                                <span class="text-muted">super admin</span>
                                <p class="text-muted mb-0 mt-1 d-flex align-items-center">
                                  <iconify-icon icon="solar:mailbox-line-duotone" class="fs-4 me-1"></iconify-icon>
                                  therichpost.com
                                </p>
                              </div>
                            </div>

                            <div class="message-body">
                              <a href="page-user-profile.html" class="dropdown-item px-7 d-flex align-items-center py-6">
                                <span class="btn px-3 py-2 bg-info-subtle rounded-1 text-info shadow-none">
                                  <iconify-icon icon="solar:wallet-2-line-duotone" class="fs-7"></iconify-icon>
                                </span>
                                <div class="w-75 d-inline-block v-middle ps-3 ms-1">
                                  <h5 class="mb-0 mt-1 fs-4 fw-normal">
                                    My Profile
                                  </h5>
                                  <span class="fs-3 text-nowrap d-block fw-normal mt-1 text-muted">Account Settings</span>
                                </div>
                              </a>

                              <a href="app-email.html" class="dropdown-item px-7 d-flex align-items-center py-6">
                                <span class="btn px-3 py-2 bg-success-subtle rounded-1 text-success shadow-none">
                                  <iconify-icon icon="solar:shield-minimalistic-line-duotone" class="fs-7"></iconify-icon>
                                </span>
                                <div class="w-75 d-inline-block v-middle ps-3 ms-1">
                                  <h5 class="mb-0 mt-1 fs-4 fw-normal">My Inbox</h5>
                                  <span class="fs-3 text-nowrap d-block fw-normal mt-1 text-muted">Messages & Emails</span>
                                </div>
                              </a>

                              <a href="app-notes.html" class="dropdown-item px-7 d-flex align-items-center py-6">
                                <span class="btn px-3 py-2 bg-danger-subtle rounded-1 text-danger shadow-none">
                                  <iconify-icon icon="solar:card-2-line-duotone" class="fs-7"></iconify-icon>
                                </span>
                                <div class="w-75 d-inline-block v-middle ps-3 ms-1">
                                  <h5 class="mb-0 mt-1 fs-4 fw-normal">My Task</h5>
                                  <span class="fs-3 text-nowrap d-block fw-normal mt-1 text-muted">To-do and Daily
                                    Tasks</span>
                                </div>
                              </a>
                            </div>

                            <div class="py-6 px-7 mb-1">
                              <a href="authentication-login.html" class="btn btn-primary w-100">Log Out</a>
                            </div>
                          </div>
                        </div>
                      </li>

                       <!--  Keterangan Halaman -->
                      <div class="card shadow-none position-relative overflow-hidden mb-4">
                        <div class="card-body d-flex align-items-center justify-content-between p-4">
                          <h4 class="card-title mb-0">Shop</h4>
                          <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                              <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none" href="index.html">Home</a>
                              </li>
                              <li class="breadcrumb-item" aria-current="page">Shop</li>
                            </ol>
                          </nav>
                        </div>
                      </div>
                      <!-- icon  -->
                      <li class="list-group-item border-0 p-0 mx-4 mb-2">
                      <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-6 rounded-1" href="javascript:void(0)">
                        <i class="ti ti-hanger fs-5"></i>Fashion
                      </a>
                    </li>
                    <li class="list-group-item border-0 p-0 mx-4 mb-2">
                      <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-6 rounded-1" href="javascript:void(0)">
                        <i class="ti ti-sort-ascending-2 fs-5"></i>Price: High-Low
                      </a>
                    </li>
                    <li class="list-group-item border-0 p-0 mx-4 mb-2">
                      <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-6 rounded-1" href="javascript:void(0)">
                        <i class="ti ti-sort-descending-2 fs-5"></i>
                        </i>Price: Low-High
                      </a>
                    </li>
                    <li class="list-group-item border-0 p-0 mx-4 mb-2">
                      <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-6 rounded-1" href="javascript:void(0)">
                        <i class="ti ti-ad-2 fs-5"></i>Discounted
                      </a>
                    </li>

                         <td class="border-bottom-0">
                            <span class="badge rounded-pill bg-success-subtle text-success border-success border">Confirmed</span>
                          </td>
