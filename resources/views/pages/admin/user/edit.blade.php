@extends('layouts.admin')

@section('title')
    Edit User
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
            <h4>User Management</h4>
            <h6>Edit/Update User</h6>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.user.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="name" value="{{ $item->name }}">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" value="{{ $item->email }}">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Password</label>
                            <div class="pass-group">
                                <input type="password" class="pass-input" name="password" value="">
                                <span class="fas toggle-password fa-eye-slash"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Role</label>
                            <select class="select" name="role">
                                <option value="1" selected>Customer</option>
                                <option value="2">Admin</option>
                                <option value="3">Super Admin</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-submit me-2">Submit</button>
                        <a href="{{ route('admin.user.index') }}" class="btn btn-cancel">Cancel</a>
                    </div>
                </div>
            </form>
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
            $("#people ul li:nth-child(6) a").addClass("active");
            $("#people > a").addClass("active subdrop");
            $("#people ul").css("display", "block");
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
            @foreach ($errors->all() as $error)
                () => {
                    console.log('{{ $error }}')
                }
            @endforeach
        @endif
    </script>
@endpush
