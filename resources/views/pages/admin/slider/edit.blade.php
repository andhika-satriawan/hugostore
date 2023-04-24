@extends('layouts.admin')

@section('title')
    Slider Update | Admin Hugostore
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

    <style>
        img.file-image-preview {
            max-height: 50px;
        }
    </style>
@endpush

@section('content')
    <div class="page-header">
        <div class="page-title">
            <h4>Slider Update</h4>
            <h6>Update Slider</h6>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 col-sm-6 col-12">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Error!</strong> {{ $error }}.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endforeach
                    <form action="{{ route('admin.slider.update', $item->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label>Brand</label>
                            <select class="select" name="brand">
                                <option value="">Choose Brand</option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->name }}" @if ($brand->name == $item->brand) selected @endif
                                        value="{{ $brand->name }}">
                                        {{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Brand Type</label>
                            <select class="select" name="brand_type">
                                @foreach ($brands as $brand)
                                    <optgroup label="{{ $brand->name }}">
                                        @foreach ($brand->brand_types as $brandType)
                                            <option value="{{ $brandType->name }}"
                                                @if ($brandType->name == $item->brand_type) selected @endif
                                                value="{{ $brandType->name }}">{{ $brandType->name }}</option>
                                        @endforeach
                                    </optgroup>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <div class="input-groupicon">
                                <textarea name="description" class="form-control" value="{{ $item->description }}">{{ $item->description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Button Link</label>
                            <div class="input-groupicon">
                                <input type="text" name="button_link" placeholder="Button Link Slider"
                                    value="{{ $item->button_link }}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label> Product Image</label>
                            <div class="image-upload">
                                <input type="file" class="file-input" name="image" value="{{ $item->image }}">
                                <div class="image-uploads">
                                    <img src="{{ Storage::disk('local')->url($item->image) }}" alt="img"
                                        class="file-image-preview">
                                    <h4>Drag and drop a file to upload</h4>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-submit me-2">Submit</button>
                            <a href="{{ route('admin.slider.index') }}" class="btn btn-cancel">Cancel</a>
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

    <script>
        $(document).ready(function() {
            $("#product ul li:nth-child(10) a").addClass("active");
            $("#product > a").addClass("active subdrop");
            $("#product ul").css("display", "block");
        });
    </script>

    <script>
        $(".file-input").change(function() {
            const tmpPath = URL.createObjectURL(event.target.files[0]);
            const imageUpload = $(this).closest(".image-upload");
            imageUpload > $(".file-image-preview").attr("src", tmpPath);
        });
    </script>
@endpush
