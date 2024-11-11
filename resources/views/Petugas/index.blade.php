@extends('layouts.main')

@section('content')
<div class="container-fluid">
        <div class="col-12">
                <div class="card mb-0">
                    <div class="card-body">
                    <div class="d-md-flex justify-content-between mb-9">
                        <div class="mb-9 mb-md-0">
                        <h4 class="card-title">Data Petugas</h4>
                        <p class="card-subtitle mb-0">Lihat Data Petugas </p>
                        </div>
                        <div class="d-flex align-items-center">
                        <form class="position-relative me-3 w-100">
                            <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh" placeholder="Search">
                            <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                        </form>
                        </div>
                    </div>
                    <div class="table-responsive overflow-x-auto latest-reviews-table">
                        <table class="table mb-0 align-middle text-nowrap table-striped">
                        <thead class="text-dark fs-4">
                            <tr>
                            <th class="ps-0">
                                No
                            </th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $item)
                            <tr>
                            <td>
                                <p class="mb-0">{{ $loop->iteration }}</p>
                            </td>
                            <td>
                                <p class="mb-0">{{ $item->name }}</p>
                            </td>
                            <td>
                                <p class="mb-0">{{ $item->email }}</p>
                            </td>
                            <td>
                                <p class="mb-0">{{ $item->role }}</p>
                            </td>
                            <!-- ======= CRUD Method ======= -->
                            <td>
                                <div class="dropdown dropstart">
                                <a href="javascript:void(0)" class="text-muted " id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical fs-5"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li>
                                    <a class="dropdown-item d-flex align-items-center gap-3" href="{{ route('petugas.create') }}">
                                        <i class="fs-4 ti ti-plus"></i>Add
                                    </a>
                                    </li>
                                    <li>
                                    <a class="dropdown-item d-flex align-items-center gap-3" href="{{ route('petugas.edit', ['id' => $item->id ]) }}">
                                        <i class="fs-4 ti ti-edit"></i>Edit
                                    </a>
                                    </li>
                                    <li>
                                    <form action="{{ route('petugas.delete', ['id' => $item->id ]) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item d-flex align-items-center gap-3" onclick="return confirm('Apakah anda yakin ingin menghapus {{ $item->nama }} ?') " > <i class="fs-4 ti ti-trash"></i>Hapus</button>
                                    </form>
                                    <!-- <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                        <i class="fs-4 ti ti-trash"></i>Delete
                                    </a> -->
                                    </li>
                                </ul>
                                </div>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                    <!-- ======= PAGINATION ======== -->
                    <div class="d-flex align-items-center justify-content-between mt-10">
                        <p class="mb-0 fw-normal">1-6 of 32</p>
                        <nav aria-label="Page navigation example">
                        <ul class="pagination mb-0 align-items-center">
                            <li class="page-item">
                            <a class="page-link border-0 d-flex align-items-center text-muted fw-normal" href="javascript:void(0)"><iconify-icon icon="solar:alt-arrow-left-line-duotone" class="fs-5"></iconify-icon>Previous</a>
                            </li>
                            <li class="page-item">
                            <a class="page-link border-0 d-flex align-items-center fw-normal" href="javascript:void(0)">Next<iconify-icon icon="solar:alt-arrow-right-line-duotone" class="fs-5"></iconify-icon></a>
                            </li>
                        </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Petugas</title>
</head>
<body>
    <h1 align="center">Data Daftar Petugas</h1>
    <h3 align="center">Data Petugas</h3>
    <a href="{{ route('petugas.create') }}">Tambah</a>
    
    <table border="1px" align="center">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>
                    <a href="{{ route('petugas.edit', ['id' => $item->id]) }}">Edit</a>
                    <form action="{{ route('petugas.delete', ['id' => $item->id]) }}" method="post" style="display:inline">
                        @csrf
                        @method('DELETE')

                        <button type="submit" onclick="return confirm('Apakah kamu yakin ingin menghapus {{ $item->name}} ?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html> -->