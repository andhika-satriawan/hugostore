@extends('layouts.admin')

@section('title')
    Product Edit
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

    <link rel="stylesheet" href="{{ asset('vendor/laraberg/css/laraberg.css') }}">

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
            <h4>Product EDIT</h4>
            <h6>Edit Product</h6>
        </div>
    </div>

    @foreach ($errors->all() as $error)
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Error!</strong> {{ $error }}.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endforeach

    <form action="{{ route('admin.product.update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="row upload-product">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Primary Image</h5>
                    </div>
                    <input id="file1" type="file" accept="image/*" name="photo" onchange="showPreview(event)">
                    <img id="upfile1" class="card-img-top" src="{{ Storage::disk('local')->url($item->photo) }}"
                        alt="Card image cap">
                </div>
            </div>
            @foreach ($item_images as $product_image)
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Image {{ $loop->iteration + 1 }}</h5>
                        </div>
                        <input id="file{{ $loop->iteration + 1 }}" type="file" accept="image/*"
                            name="photo{{ $loop->iteration + 1 }}"
                            onchange="showPreview{{ $loop->iteration + 1 }}(event)">
                        <img id="upfile{{ $loop->iteration + 1 }}" class="card-img-top"
                            src="{{ asset('template/img/product/upload.png') }}" alt="Card image cap">
                    </div>
                </div>
            @endforeach

            @for ($i = 0; $i <= 2 - $item_images->count(); $i++)
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Image {{ $i + 1 }}</h5>
                        </div>
                        <input id="file{{ $i + 1 }}" type="file" accept="image/*"
                            name="photo{{ $i + 1 }}" onchange="showPreview{{ $i + 1 }}(event)">
                        <img id="upfile{{ $i + 1 }}" class="card-img-top"
                            src="{{ asset('template/img/product/upload.png') }}" alt="Card image cap">
                    </div>
                </div>
            @endfor



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
                                        value="{{ $item->name }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Slug</label>
                                <div class="input-groupicon">
                                    <input type="text" name="product_slug" placeholder="Product Slug"
                                        value="{{ $item->slug }}" />
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
                                                    @if ($brandType->id == $item->brand_type_id) selected @endif
                                                    value="{{ $brandType->id }}">
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
                                <textarea id="description" name="description" class="form-control ckeditor">{{ $item->description }}</textarea>
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
                                            value="{{ $item_detail->width }}">
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
                                            value="{{ $item_detail->length }}">
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
                                            value="{{ $item_detail->height }}">
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
                                            value="{{ $item_detail->weight }}">
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
                                <label>Discounted Price</label>
                                <input type="text" name="discount_price">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label> Status</label>
                                <select class="select" name="status">
                                    <option value="0" @if ($item->status == 0) selected @endif>Deactivated
                                    </option>
                                    <option value="1" @if ($item->status == 1) selected @endif>Active
                                    </option>
                                    <option value="2" @if ($item->status == 2) selected @endif>Draft</option>
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
                                    @foreach ($item->product_details as $product_detail)
                                        <tr @if ($loop->index == 0) id="element-variant" @endif>

                                            <td>
                                                <input type="hidden" name="productDetails[{{ $loop->index }}][id]"
                                                    value="{{ $product_detail->id }}">
                                                <input type="text" placeholder="FIMI X8 Mini"
                                                    name="productDetails[{{ $loop->index }}][name]"
                                                    value="{{ $product_detail->name }}">
                                            </td>
                                            <td>
                                                <input type="text" placeholder="Rp"
                                                    name="productDetails[{{ $loop->index }}][price]"
                                                    value="{{ $product_detail->price }}">
                                            </td>
                                            <td>
                                                <input type="text" placeholder="Rp"
                                                    name="productDetails[{{ $loop->index }}][discount_price]"
                                                    value="{{ $product_detail->discount_price }}">
                                            </td>
                                            <td>
                                                <input type="text" placeholder="Pcs">
                                            </td>
                                            <td>
                                                <input type="text" placeholder="Type here"
                                                    name="productDetails[{{ $loop->index }}][sku]"
                                                    value="{{ $product_detail->sku }}">
                                            </td>
                                            <td class="upload-product">
                                                <input class="upload-file-variant" type="file" accept="image/*"
                                                    name="productDetails[{{ $loop->index }}][photo_variant]"
                                                    onchange="showPreviewVariant(event)">
                                                <img class="card-img-top card-img-variant"
                                                    src="{{ $product_detail->image == null || $product_detail->image == 'template/img/product/upload.png' ? '/template/img/product/upload.png' : Storage::disk('local')->url($product_detail->image) }}"
                                                    alt="Card image cap">
                                            </td>
                                            <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch"
                                                        name="productDetails[{{ $loop->index }}][status]" value="1"
                                                        @if ($product_detail->status == 1) checked @endif>
                                                </div>
                                            </td>
                                            <td>
                                                <a onclick="deleteRow(event)" class="me-3 confirm-text">
                                                    <img src="http://hugostore.test/template/img/icons/delete.svg"
                                                        alt="img">
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
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
@endpush
