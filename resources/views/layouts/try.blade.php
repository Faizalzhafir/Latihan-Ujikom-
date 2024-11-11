@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="col-12">
                <div class="card mb-0">
                    <div class="card-body">
                    <div class="d-md-flex justify-content-between mb-9">
                        <div class="mb-9 mb-md-0">
                        <h4 class="card-title">Latest reviews</h4>
                        <p class="card-subtitle mb-0">Reviewd received across all channels</p>
                        </div>
                        <div class="d-flex align-items-center">
                        <form class="position-relative me-3 w-100">
                            <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh" placeholder="Search">
                            <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                        </form>
                        <div class="dropdown">
                            <a href="javascript:void(0)" class="btn border shadow-none px-3" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-5"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-plus"></i>Add
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-edit"></i>Edit
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-trash"></i>Delete
                                </a>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="table-responsive overflow-x-auto latest-reviews-table">
                        <table class="table mb-0 align-middle text-nowrap">
                        <thead class="text-dark fs-4">
                            <tr>
                            <th class="ps-0">
                                #
                            </th>
                            <th>Products</th>
                            <th>Customer</th>
                            <th>Reviews</th>
                            <th>Status</th>
                            <th>Time</th>
                            <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td class="ps-0">
                                <div class="form-check mb-0 flex-shrink-0">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center product text-truncate">
                                <img src="assets/images/products/product-5.png" class="img-fluid flex-shrink-0" width="60" height="60">
                                <div class="ms-3 product-title">
                                    <h6 class="fs-4 mb-0 text-truncate-2">iPhone 13 pro max-Pacific Blue-128GB storage</h6>
                                </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center text-truncate">
                                <img src="assets/images/profile/user-2.jpg" alt="spike-img" class="img-fluid rounded-circle flex-shrink-0" width="32" height="32">
                                <div class="ms-7">
                                    <h5 class="mb-1 fs-4">Arlene McCoy</h5>
                                    <h6 class="mb-0 fw-light">therichpost.com</h6>
                                </div>
                                </div>
                            </td>
                            <td>
                                <div class="product-reviews">
                                <ul class="list-unstyled d-flex align-items-center mb-0">
                                    <li>
                                    <a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold" class="text-warning"></iconify-icon></a>
                                    </li>
                                    <li>
                                    <a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold" class="text-warning"></iconify-icon></a>
                                    </li>
                                    <li>
                                    <a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold" class="text-warning"></iconify-icon></a>
                                    </li>
                                    <li>
                                    <a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold-duotone" class="text-warning"></iconify-icon></a>
                                    </li>
                                    <li>
                                    <a class="" href="javascript:void(0)"><iconify-icon icon="solar:star-line-duotone" class="text-warning"></iconify-icon></a>
                                    </li>
                                </ul>
                                <p class="text-dark mb-0 fw-normal text-truncate-2">
                                    This theme is great. Clean and easy to
                                    understand. Perfect for those who don't have
                                    <br>
                                    time to... <a href="javascript:void(0)">See more</a>
                                </p>
                                </div>
                            </td>
                            <td>
                                <span class="badge rounded-pill bg-success-subtle text-success border-success border">Confirmed</span>
                            </td>
                            <td>
                                <p class="mb-0">Nov 8</p>
                            </td>
                            <td>
                                <div class="dropdown dropstart">
                                <a href="javascript:void(0)" class="text-muted " id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical fs-5"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li>
                                    <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                        <i class="fs-4 ti ti-plus"></i>Add
                                    </a>
                                    </li>
                                    <li>
                                    <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                        <i class="fs-4 ti ti-edit"></i>Edit
                                    </a>
                                    </li>
                                    <li>
                                    <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                        <i class="fs-4 ti ti-trash"></i>Delete
                                    </a>
                                    </li>
                                </ul>
                                </div>
                            </td>
                            </tr>
                            <tr>
                        </tbody>
                        </table>
                    </div>
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