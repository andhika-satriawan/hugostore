@extends('layouts.admin')

@section('title')
    Product Add
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

        .card img {
            max-width: 200px;
            display: table;
            margin: 0 auto;
            padding: 20px;
        }

        .upload-product input {
            display: none;
        }

        .upload-product img {
            cursor: pointer;
        }

        .card .card-body {
            border-bottom: 1px solid #e8ebed;
        }

        .card .card-body h5.card-title {
            color: #1B2850;
            margin: 0;
        }

        .card-body h4 {
            padding-bottom: 10px;
            border-bottom: 1px solid #e8ebed;
            margin-bottom: 20px;
        }

        .product-variant .btn-added {
            background: #ff9f43;
            padding: 7px 15px;
            color: #fff;
            font-weight: 700;
            font-size: 14px;

            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;

            align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
        }

        .product-variant .page-btn {
            float: right;
        }

        .product-variant .page-btn a img {
            padding: 0;
            margin: 0;
        }

        .product-variant h5 {
            float: left;
        }

        .table-bordered td,
        .table-bordered th {
            border: 1px solid #dee2e6;
        }

        table tbody tr td input {
            width: 100px;
        }

        .card table tbody tr td img {
            max-width: 80px;
            padding: 0;
        }

        input.form-check-input:hover {
            cursor: pointer;
        }

        tr#element-variant td:last-child a {
            pointer-events: none;
        }
    </style>
@endpush

@section('content')
    <div class="page-header">
        <div class="page-title">
            <h4>Product ADD</h4>
            <h6>Create new Product</h6>
        </div>
    </div>

    @foreach ($errors->all() as $error)
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Error!</strong> {{ $error }}.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endforeach

    <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row upload-product">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Primary Image</h5>
                    </div>
                    <input id="file1" type="file" accept="image/*" name="photo" onchange="showPreview(event)"
                        value="{{ old('photo') }}">
                    <img id="upfile1" class="card-img-top" src="{{ asset('template/img/product/upload.png') }}"
                        alt="Card image cap">
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Image 2</h5>
                    </div>
                    <input id="file2" type="file" accept="image/*" name="photo2" onchange="showPreview2(event)"
                        value="{{ old('photo') }}">
                    <img id="upfile2" class="card-img-top" src="{{ asset('template/img/product/upload.png') }}"
                        alt="Card image cap">
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Image 3</h5>
                    </div>
                    <input id="file3" type="file" accept="image/*" name="photo3" onchange="showPreview3(event)"
                        value="{{ old('photo') }}">
                    <img id="upfile3" class="card-img-top" src="{{ asset('template/img/product/upload.png') }}"
                        alt="Card image cap">
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Image 4</h5>
                    </div>
                    <input id="file4" type="file" accept="image/*" name="photo4" onchange="showPreview4(event)"
                        value="{{ old('photo') }}">
                    <img id="upfile4" class="card-img-top" src="{{ asset('template/img/product/upload.png') }}"
                        alt="Card image cap">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <h4>Product Information</h4>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Product Name</label>
                                <div class="input-groupicon">
                                    <input type="text" name="product_name" placeholder="Product Name"
                                        value="{{ old('product_name') }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Slug</label>
                                <div class="input-groupicon">
                                    <input type="text" name="product_slug" placeholder="Product Slug"
                                        value="{{ old('product_slug') }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Brand</label>
                                <select class="select" name="product_brand_type_id">
                                    @foreach ($brands as $brand)
                                        <optgroup label="{{ $brand->name }}">
                                            @foreach ($brand->brand_types as $brandType)
                                                <option value="{{ $brandType->id }}"
                                                    @if ($brandType->id == old('product_brand_type_id')) selected @endif>
                                                    {{ $brandType->name }}
                                                </option>
                                            @endforeach
                                        </optgroup>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea id="description" name="description" class="form-control ckeditor" value="{{ old('description') }}">{{ old('description') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4>Dimension & Shipping</h4>
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Width</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Width"
                                            aria-label="Width" aria-describedby="width" name="width"
                                            value="{{ old('width') }}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="width">cm</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Length</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Length"
                                            aria-label="Length" aria-describedby="lenght" name="length"
                                            value="{{ old('length') }}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="length">cm</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Height</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Height"
                                            aria-label="Height" aria-describedby="height" name="height"
                                            value="{{ old('height') }}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="height">cm</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Weight</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Weight"
                                            aria-label="Weight" aria-describedby="weight" name="weight"
                                            value="{{ old('weight') }}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="weight">gram</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h4>Organize</h4>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="select" name="product_subcategory_id">
                                    @foreach ($categories as $category)
                                        <optgroup label="{{ $category->name }}">
                                            @foreach ($category->product_subcategories as $subcategory)
                                                <option value="{{ $subcategory->id }}"
                                                    @if ($subcategory->id == old('product_subcategory_id')) selected @endif>
                                                    {{ $subcategory->name }}
                                                </option>
                                            @endforeach
                                        </optgroup>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label> Status</label>
                                <select class="select" name="status">
                                    <option value="1">Deactivated</option>
                                    <option value="2" selected>Active</option>
                                    <option value="3">Draft</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card product-variant">
                    <div class="card-body">
                        <div class="page-header">
                            <h5 class="card-title">Product Details</h5>
                            <div class="page-btn">
                                <a class="btn btn-added" onclick="duplicate()">
                                    <img src="http://hugostore.test/template/img/icons/plus.svg" alt="img">Add New
                                    Variant
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Variant Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Discounted Price</th>
                                        <th scope="col">Stock</th>
                                        <th scope="col">SKU</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Remove</th>
                                    </tr>
                                </thead>
                                <tbody id="tbodyVariant">
                                    <tr id="element-variant">
                                        <td>
                                            <input type="text" class="product-detail-name" placeholder="FIMI X8 Mini"
                                                name="productDetails[0][name]" required>
                                        </td>
                                        <td>
                                            <input type="text" class="product-detail-price" placeholder="Rp"
                                                name="productDetails[0][price]">
                                        </td>
                                        <td>
                                            <input type="text" class="product-detail-discount-price" placeholder="Rp"
                                                name="productDetails[0][discount_price]">
                                        </td>
                                        <td>
                                            <input type="text" class="product-detail-stock" placeholder="Pcs"
                                                name="productDetails[0][stock]">
                                        </td>
                                        <td>
                                            <input type="text" class="product-detail-sku" placeholder="SKU"
                                                name="productDetails[0][sku]">
                                        </td>
                                        <td class="upload-product">
                                            <input class="upload-file-variant" type="file" accept="image/*"
                                                name="productDetails[0][photo_variant]"
                                                onchange="showPreviewVariant(event)">
                                            <img class="card-img-top card-img-variant"
                                                src="{{ asset('template/img/product/upload.png') }}"
                                                alt="Card image cap">
                                        </td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    name="productDetails[0][status]" value="1" checked>
                                            </div>
                                        </td>
                                        <td>
                                            <a onclick="deleteRow(event)" class="me-3 confirm-text">
                                                <img src="http://hugostore.test/template/img/icons/delete.svg"
                                                    alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-submit me-2">Submit</button>
                    <a href="{{ route('admin.product.index') }}" class="btn btn-cancel">Cancel</a>
                </div>
            </div>
        </div>

    </form>
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
            $("#product ul li:nth-child(2) a").addClass("active");
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

    <script>
        $("#upfile1").click(function() {
            $("#file1").trigger('click');
        });
        $("#upfile2").click(function() {
            $("#file2").trigger('click');
        });
        $("#upfile3").click(function() {
            $("#file3").trigger('click');
        });
        $("#upfile4").click(function() {
            $("#file4").trigger('click');
        });

        $("#tbodyVariant").on("click", ".card-img-variant", function(event) {
            $(event.target).siblings('input.upload-file-variant').click();
        });

        function showPreview(event) {
            if (event.target.files.length > 0) {
                let src = URL.createObjectURL(event.target.files[0]);
                let preview = document.getElementById("upfile1");
                preview.src = src;
            }
        }

        function showPreview2(event) {
            if (event.target.files.length > 0) {
                let src = URL.createObjectURL(event.target.files[0]);
                let preview = document.getElementById("upfile2");
                preview.src = src;
            }
        }

        function showPreview3(event) {
            if (event.target.files.length > 0) {
                let src = URL.createObjectURL(event.target.files[0]);
                let preview = document.getElementById("upfile3");
                preview.src = src;
            }
        }

        function showPreview4(event) {
            if (event.target.files.length > 0) {
                let src = URL.createObjectURL(event.target.files[0]);
                let preview = document.getElementById("upfile4");
                preview.src = src;
            }
        }

        function showPreviewVariant(event) {
            if (event.target.files.length > 0) {
                let imgSrc = URL.createObjectURL(event.target.files[0]);
                let preview = $(event.target).siblings('.card-img-variant').attr('src', imgSrc);
            }
        }
    </script>

    <script>
        function duplicate() {
            let original = document.getElementById('element-variant');
            let rows = original.parentNode.rows;
            let row_index = rows.length + 1;
            let clone = original.cloneNode(true); // "deep" clone
            clone.id = "duplic" + (row_index); // there can only be one element with an ID
            original.parentNode.insertBefore(clone, rows[row_index]);

            let InputType = clone.getElementsByTagName("input");
            for (let i = 0; i < InputType.length; i++) {
                if (InputType[i].type == 'checkbox') {
                    InputType[i].checked = false;
                } else {
                    InputType[i].value = '';
                }
            }

            let productName = clone.querySelector(".product-detail-name");
            productName.name = `productDetails[${rows.length-1}][name]`;

            let productPrice = clone.querySelector(".product-detail-price");
            productPrice.name = `productDetails[${rows.length-1}][price]`;

            let productDiscountPrice = clone.querySelector(".product-detail-discount-price");
            productDiscountPrice.name = `productDetails[${rows.length-1}][discount_price]`;

            let productStock = clone.querySelector(".product-detail-stock");
            productStock.name = `productDetails[${rows.length-1}][stock]`;

            let productSKU = clone.querySelector(".product-detail-sku");
            productSKU.name = `productDetails[${rows.length-1}][sku]`;

            // let imgVariant = clone.getElementsByTagName("img");
            let imgVariant = clone.querySelector(".card-img-variant");
            imgVariant.src = "{{ asset('template/img/product/upload.png') }}";

            let productImgVariant = clone.querySelector(".upload-file-variant");
            productImgVariant.name = `productDetails[${rows.length-1}][photo_variant]`;

            let productStatusVariant = clone.querySelector(".form-check-input");
            productStatusVariant.name = `productDetails[${rows.length-1}][status]`;
        }

        function deleteRow(event) {
            event.target.parentNode.parentNode.parentNode.remove();
        }
    </script>

    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script>
        // CKEDITOR.replace('#description');
    </script>
@endpush
