@extends('layouts.admin')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="dash-widget">
                <div class="dash-widgetimg">
                    <span><img src="{{ asset('template/img/icons/dash1.svg') }}" alt="img"></span>
                </div>
                <div class="dash-widgetcontent">
                    <h5>$<span class="counters" data-count="307144.00">$307,144.00</span></h5>
                    <h6>Total Purchase Due</h6>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="dash-widget dash1">
                <div class="dash-widgetimg">
                    <span><img src="{{ asset('template/img/icons/dash2.svg') }}" alt="img"></span>
                </div>
                <div class="dash-widgetcontent">
                    <h5>$<span class="counters" data-count="4385.00">$4,385.00</span></h5>
                    <h6>Total Sales Due</h6>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="dash-widget dash2">
                <div class="dash-widgetimg">
                    <span><img src="{{ asset('template/img/icons/dash3.svg') }}" alt="img"></span>
                </div>
                <div class="dash-widgetcontent">
                    <h5>$<span class="counters" data-count="385656.50">385,656.50</span></h5>
                    <h6>Total Sale Amount</h6>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="dash-widget dash3">
                <div class="dash-widgetimg">
                    <span><img src="{{ asset('template/img/icons/dash4.svg') }}" alt="img"></span>
                </div>
                <div class="dash-widgetcontent">
                    <h5>$<span class="counters" data-count="40000.00">400.00</span></h5>
                    <h6>Total Sale Amount</h6>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12 d-flex">
            <div class="dash-count">
                <div class="dash-counts">
                    <h4>100</h4>
                    <h5>Customers</h5>
                </div>
                <div class="dash-imgs">
                    <i data-feather="user"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12 d-flex">
            <div class="dash-count das1">
                <div class="dash-counts">
                    <h4>100</h4>
                    <h5>Suppliers</h5>
                </div>
                <div class="dash-imgs">
                    <i data-feather="user-check"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12 d-flex">
            <div class="dash-count das2">
                <div class="dash-counts">
                    <h4>100</h4>
                    <h5>Purchase Invoice</h5>
                </div>
                <div class="dash-imgs">
                    <i data-feather="file-text"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12 d-flex">
            <div class="dash-count das3">
                <div class="dash-counts">
                    <h4>105</h4>
                    <h5>Sales Invoice</h5>
                </div>
                <div class="dash-imgs">
                    <i data-feather="file"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-7 col-sm-12 col-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Purchase & Sales</h5>
                    <div class="graph-sets">
                        <ul>
                            <li>
                                <span>Sales</span>
                            </li>
                            <li>
                                <span>Purchase</span>
                            </li>
                        </ul>
                        <div class="dropdown">
                            <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                2022 <img src="{{ asset('template/img/icons/dropdown.svg') }}" alt="img"
                                    class="ms-2">
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item">2022</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item">2021</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item">2020</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="sales_charts"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-sm-12 col-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">Recently Added Products</h4>
                    <div class="dropdown">
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
                            <i class="fa fa-ellipsis-v"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                                <a href="productlist.html" class="dropdown-item">Product List</a>
                            </li>
                            <li>
                                <a href="addproduct.html" class="dropdown-item">Product Add</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive dataview">
                        <table class="table datatable ">
                            <thead>
                                <tr>
                                    <th>Sno</th>
                                    <th>Products</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="productimgname">
                                        <a href="productlist.html" class="product-img">
                                            <img src="{{ asset('template/img/product/product22.jpg') }}" alt="product">
                                        </a>
                                        <a href="productlist.html">Apple Earpods</a>
                                    </td>
                                    <td>$891.2</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="productimgname">
                                        <a href="productlist.html" class="product-img">
                                            <img src="{{ asset('template/img/product/product23.jpg') }}" alt="product">
                                        </a>
                                        <a href="productlist.html">iPhone 11</a>
                                    </td>
                                    <td>$668.51</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="productimgname">
                                        <a href="productlist.html" class="product-img">
                                            <img src="{{ asset('template/img/product/product24.jpg') }}" alt="product">
                                        </a>
                                        <a href="productlist.html">samsung</a>
                                    </td>
                                    <td>$522.29</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="productimgname">
                                        <a href="productlist.html" class="product-img">
                                            <img src="{{ asset('template/img/product/product6.jpg') }}" alt="product">
                                        </a>
                                        <a href="productlist.html">Macbook Pro</a>
                                    </td>
                                    <td>$291.01</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-0">
        <div class="card-body">
            <h4 class="card-title">Expired Products</h4>
            <div class="table-responsive dataview">
                <table class="table datatable ">
                    <thead>
                        <tr>
                            <th>SNo</th>
                            <th>Product Code</th>
                            <th>Product Name</th>
                            <th>Brand Name</th>
                            <th>Category Name</th>
                            <th>Expiry Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><a href="javascript:void(0);">IT0001</a></td>
                            <td class="productimgname">
                                <a class="product-img" href="productlist.html">
                                    <img src="{{ asset('template/img/product/product2.jpg') }}" alt="product">
                                </a>
                                <a href="productlist.html">Orange</a>
                            </td>
                            <td>N/D</td>
                            <td>Fruits</td>
                            <td>12-12-2022</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><a href="javascript:void(0);">IT0002</a></td>
                            <td class="productimgname">
                                <a class="product-img" href="productlist.html">
                                    <img src="{{ asset('template/img/product/product3.jpg') }}" alt="product">
                                </a>
                                <a href="productlist.html">Pineapple</a>
                            </td>
                            <td>N/D</td>
                            <td>Fruits</td>
                            <td>25-11-2022</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><a href="javascript:void(0);">IT0003</a></td>
                            <td class="productimgname">
                                <a class="product-img" href="productlist.html">
                                    <img src="{{ asset('template/img/product/product4.jpg') }}" alt="product">
                                </a>
                                <a href="productlist.html">Stawberry</a>
                            </td>
                            <td>N/D</td>
                            <td>Fruits</td>
                            <td>19-11-2022</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><a href="javascript:void(0);">IT0004</a></td>
                            <td class="productimgname">
                                <a class="product-img" href="productlist.html">
                                    <img src="{{ asset('template/img/product/product5.jpg') }}" alt="product">
                                </a>
                                <a href="productlist.html">Avocat</a>
                            </td>
                            <td>N/D</td>
                            <td>Fruits</td>
                            <td>20-11-2022</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('add-script')
    <script src="{{ asset('template/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('template/js/moment.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('template/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('template/plugins/sweetalert/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('template/plugins/sweetalert/sweetalerts.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#dashboard ul li:first-child a").addClass("active");
            $("#dashboard > a").addClass("active subdrop");
            $("#dashboard ul").css("display", "block");
        });
    </script>

    <script>
        @if ($message = Session::get('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success...',
                text: 'Input Data Success!'
            });
        @endif

        @if ($errors->any())
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
            });
        @endif

        $(document).ready(function() {
            $('#table_products').DataTable({
                paging: false,
                searching: false,
                ajax: "{{ route('admin.product.index') }}",
                columns: [{
                        data: 'checkbox',
                        name: 'checkbox'
                    },
                    {
                        data: 'photo',
                        name: 'photo'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'slug',
                        name: 'slug'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        });

        function deleteData(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'DELETE',
                        url: '{{ route('admin.product.index') }}/' + id,
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content'),
                        },
                        dataType: 'JSON',
                        error: function() {
                            Swal.fire("Error!", 'Something is wrong', "error");
                        },
                        success: function(response) {
                            if (response.success == true) {
                                Swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                );

                                $('#table_product_categories').DataTable().ajax.reload();
                            }
                        }
                    });
                }
            })
        }
    </script>
@endpush
