@extends('layouts.admin')

@section('title')
    Slider
@endsection


@push('add-style')
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('template/css/bootstrap-datetimepicker.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('template/css/animate.css') }}" />

    <link rel="stylesheet" href="{{ asset('template/plugins/select2/css/select2.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('template/css/dataTables.bootstrap4.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome/css/all.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}" />
@endpush

@section('content')
    <div class="page-header">
        <div class="page-title">
            <h3>SLIDER LIST</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/dashboard">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Slider</li>
            </ul>
        </div>
        <div class="page-btn">
            <a href="{{ route('admin.slider.create') }}" class="btn btn-added">
                <img src="{{ asset('template/img/icons/plus.svg') }}" alt="img" />Add New
                Slider
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-top">
                <div class="search-set">
                    <div class="search-path">
                        <a class="btn btn-filter" id="filter_search">
                            <img src="{{ asset('template/img/icons/filter.svg') }}" alt="img" />
                            <span><img src="{{ asset('template/img/icons/closes.svg') }}" alt="img" /></span>
                        </a>
                    </div>
                    <div class="search-input">
                        <a class="btn btn-searchset"><img src="{{ asset('template/img/icons/search-white.svg') }}"
                                alt="img" /></a>
                    </div>
                </div>
                <div class="wordset">
                    <ul>
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
                                    src="{{ asset('template/img/icons/pdf.svg') }}" alt="img" /></a>
                        </li>
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                    src="{{ asset('template/img/icons/excel.svg') }}" alt="img" /></a>
                        </li>
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
                                    src="{{ asset('template/img/icons/printer.svg') }}" alt="img" /></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card" id="filter_inputs">
                <div class="card-body pb-0">
                    <div class="row">
                        <div class="col-lg col-sm-6 col-12">
                            <div class="form-group">
                                <input type="text" class="datetimepicker cal-icon" placeholder="Choose Date" />
                            </div>
                        </div>
                        <div class="col-lg col-sm-6 col-12">
                            <div class="form-group">
                                <input type="text" placeholder="Enter Reference" />
                            </div>
                        </div>
                        <div class="col-lg col-sm-6 col-12">
                            <div class="form-group">
                                <select class="select">
                                    <option>Choose Sub Category</option>
                                    <option>Sub Category</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg col-sm-6 col-12">
                            <div class="form-group">
                                <select class="select">
                                    <option>Choose Status</option>
                                    <option>Inprogress</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg col-sm-6 col-12">
                            <div class="form-group">
                                <select class="select">
                                    <option>Choose Payment Status</option>
                                    <option>Payment Status</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-1 col-sm-6 col-12">
                            <div class="form-group">
                                <a class="btn btn-filters ms-auto"><img
                                        src="{{ asset('template/img/icons/search-whites.svg') }}" alt="img" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table" id="table_sliders">
                    <thead>
                        <tr>
                            <th>
                                <label class="checkboxs">
                                    <input type="checkbox" id="select-all" />
                                    <span class="checkmarks"></span>
                                </label>
                            </th>
                            <th>Image</th>
                            <th>Brand</th>
                            <th>Brand Type</th>
                            <th>Description</th>
                            <th>Button Link</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
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
            $("#slider ul li:first-child a").addClass("active");
            $("#slider > a").addClass("active subdrop");
            $("#slider ul").css("display", "block");
        });
    </script>

    <script>
        @if ($message = Session::get('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success...',
                text: '{{ Session::get('success') }}'
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
            $('#table_sliders').DataTable({
                paging: false,
                searching: false,
                ajax: "{{ route('admin.slider.index') }}",
                columns: [{
                        data: 'checkbox',
                        name: 'checkbox'
                    },
                    {
                        data: 'image',
                        name: 'image'
                    },
                    {
                        data: 'brand',
                        name: 'brand'
                    },
                    {
                        data: 'brand_type',
                        name: 'brand_type'
                    },
                    {
                        data: 'description',
                        name: 'description'
                    },
                    {
                        data: 'button_link',
                        name: 'button_link'
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
                        url: '{{ route('admin.slider.index') }}/' + id,
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

                                $('#table_sliders').DataTable().ajax.reload();
                            }
                        }
                    });
                }
            })
        }
    </script>
@endpush
