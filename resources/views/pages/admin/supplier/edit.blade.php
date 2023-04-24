@extends('layouts.admin')

@section('title')
    Supplier Edit
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
            <h4>Supplier Edit</h4>
            <h6>Edit Supplier</h6>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 col-sm-6 col-12">
                    <form action="{{ route('admin.supplier.update', $item->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label>Supplier Name</label>
                            <div class="input-groupicon">
                                <input type="text" name="name" placeholder="Supplier Name"
                                    value="{{ $item->name }}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <div class="input-groupicon">
                                <input type="text" name="slug" placeholder="Supplier Slug"
                                    value="{{ $item->slug }}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <div class="input-groupicon">
                                <input type="text" name="phone" placeholder="Supplier Phone"
                                    value="{{ $item->phone }}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" name="address">{{ $item->address }}</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-submit me-2">Submit</button>
                            <a href="{{ route('admin.supplier.index') }}" class="btn btn-cancel">Cancel</a>
                        </div>
                    </form>
                </div>
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

    <script src="{{ asset('template/js/script.js') }}"></script>
@endpush
