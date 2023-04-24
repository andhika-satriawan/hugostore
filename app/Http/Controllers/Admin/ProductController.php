<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Brand;
use Illuminate\Support\Facades\Storage;
use DataTables;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductDetail;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use VanOns\Laraberg\Traits\RendersContent;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $data = Product::select('id', 'product_subcategory_id', 'brand_type_id', 'name', 'slug', 'description', 'photo', 'status')->get();
            return DataTables::of($data)->addIndexColumn()
                ->addColumn('checkbox', function ($row) {
                    $html = '
                    <label class="checkboxs">
                        <input type="checkbox" />
                        <span class="checkmarks"></span>
                    </label>
                    ';
                    return $html;
                })
                ->addColumn('photo', function ($row) {
                    $photo_url = Storage::disk('local')->url($row->photo);
                    $html = '
                    <img src=' . $photo_url . '/>
                    ';
                    return $html;
                })
                ->addColumn('action', function ($row) {
                    $btn = '
                    <a class="me-3" href="' . route('admin.product.edit', $row->id) . '">
                        <img src=' . asset("template/img/icons/edit.svg") . ' alt="img" />
                    </a>
                    <a onclick="deleteData(' . $row->id . ')" class="me-3 confirm-text">
                        <img src=' . asset("template/img/icons/delete.svg") . ' alt="img" />
                    </a>
                    ';
                    return $btn;
                })
                ->rawColumns(['checkbox', 'photo', 'action'])
                ->make(true);
        }

        return view('pages.admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ProductCategory::orderBy('name', 'ASC')->with('product_subcategories')->get();
        $brands = Brand::orderBy('name', 'ASC')->with('brand_types')->get();
        return view('pages.admin.product.add', [
            'categories' => $categories,
            'brands' => $brands
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'photo' => 'required|mimes:jpg,bmp,png',
            'product_name' => 'required|string|max:255',
            'product_slug' => 'required|unique:products,slug',
            'description' => 'required|string',
            'weight' => 'required|numeric',
            'width' => 'required|numeric',
            'length' => 'required|numeric',
            'height' => 'required|numeric',
            'status' => 'required|numeric',
            'productDetails' => 'required|array|min:1',
            'productDetails.*.name' => 'required|string',
            'productDetails.*.price' => 'required|numeric',
            'productDetails.*.discount_price' => 'nullable|numeric',
            'productDetails.*.sku' => 'required|string',
            'photoDetails.*.photo_variant' => 'nullable|mimes:jpg,bmp,png',
        ]);

        // return var_dump(
        //     $request->productDetails
        // );



        $product = new Product;

        $product->brand_type_id = $request->product_brand_type_id;
        $product->product_subcategory_id = $request->product_subcategory_id;
        $product->name = $request->product_name;
        $product->slug = Str::slug($request->product_slug);
        $product->status = $request->status;
        $product->description = $request->description;

        if ($request->hasFile('photo')) {
            $filenameWithExt    = $request->file('photo')->getClientOriginalName();
            $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension          = $request->file('photo')->getClientOriginalExtension();
            $fileNameToStore    = Str::slug($request->product_slug) . '_' . time() . '.' . $extension;
            $pathFile           = $request->file('photo')->storeAs('assets/product/single', $fileNameToStore, 'public');

            // Add value
            $product->photo = $pathFile;
        }



        if ($product->save()) {
            try {
                $productDetailsIndex = 0;
                foreach ($request->productDetails as $productDetail) {
                    if (count($productDetail) > 1) {
                        $product_detail = new ProductDetail;
                        $product_detail->product_id = $product->id;
                        $product_detail->name = $productDetail['name'];
                        $product_detail->sku = $productDetail['sku'];
                        $product_detail->price = $productDetail['price'];
                        $product_detail->discount_price = $productDetail['discount_price'];
                        $product_detail->weight = $request->weight;
                        $product_detail->width = $request->width;
                        $product_detail->length = $request->length;
                        $product_detail->height = $request->height;
                        $product_detail->status = isset($productDetail['status']) ? $productDetail['status'] : 0;

                        if ($request->hasFile('productDetails.' . $productDetailsIndex . '.photo_variant')) {
                            $filenameWithExt    = $request->file('productDetails.' . $productDetailsIndex . '.photo_variant')->getClientOriginalName();
                            $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                            $extension          = $request->file('productDetails.' . $productDetailsIndex . '.photo_variant')->getClientOriginalExtension();
                            $fileNameToStore    = Str::slug($request->product_slug) . '-' . str_replace(" ", "_", $productDetail['name']) . '-' . hexdec(uniqid()) . '.' . $extension;
                            $pathFile           = $request->file('productDetails.' . $productDetailsIndex . '.photo_variant')->storeAs('assets/product/variant', $fileNameToStore, 'public');

                            // Add value
                            $product_detail->image = $pathFile;
                        } else {
                            $product_detail->image = 'template/img/product/upload.png';
                        }

                        $product_detail->save();
                    }

                    $productDetailsIndex++;
                }
            } catch (\Exception $e) {
                $item = Product::findOrFail($product->id);

                if (!$item->delete()) {
                    return redirect()->back()->withErrors(['product' => 'Failed to delete product!']);
                }

                return redirect()->back()->withErrors(['product' => $e->getMessage()]);
            }
        }

        return to_route('admin.product.index')->with('success', 'Input Data Success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = ProductCategory::orderBy('name', 'ASC')->with('product_subcategories')->get();
        $brands = Brand::orderBy('name', 'ASC')->with('brand_types')->get();
        $item = Product::findOrFail($id);
        $item_detail = ProductDetail::where('product_id', $item->id)->first();
        $item_images = ProductImage::where('product_id', $item->id)->get();

        return view('pages.admin.product.edit', [
            'categories' => $categories,
            'brands' => $brands,
            'item'  => $item,
            'item_detail'  => $item_detail,
            'item_images' => $item_images
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'photo' => 'nullable|mimes:jpg,bmp,png',
            'product_name' => 'required|string|max:255',
            'product_slug' => 'required|unique:products,slug,' . $id . '',
            'description' => 'required|string',
            'weight' => 'required|numeric',
            'width' => 'required|numeric',
            'length' => 'required|numeric',
            'height' => 'required|numeric',
            'status' => 'required|numeric',
            'productDetails' => 'required|array|min:1'
        ]);

        $product = Product::findOrFail($id);

        $product->brand_type_id = $request->product_brand_type_id;
        $product->product_subcategory_id = $request->product_subcategory_id;
        $product->name = $request->product_name;
        $product->slug = Str::slug($request->product_slug);
        $product->status = $request->status;
        $product->description = $request->description;

        if ($request->hasFile('photo')) {
            $filenameWithExt    = $request->file('photo')->getClientOriginalName();
            $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension          = $request->file('photo')->getClientOriginalExtension();
            $fileNameToStore    = Str::slug($request->product_slug) . '_' . time() . '.' . $extension;
            $pathFile           = $request->file('photo')->storeAs('assets/product/single', $fileNameToStore, 'public');

            // Add value
            $product->photo = $pathFile;
        }



        if ($product->save()) {
            try {
                $productDetailsIndex = 0;
                foreach ($request->productDetails as $productDetail) {
                    $validated = $request->validate([
                        'productDetails.' . $productDetailsIndex . '.name' => 'required|string',
                        'productDetails.' . $productDetailsIndex . '.price' => 'required|numeric',
                        'productDetails.' . $productDetailsIndex . '.discount_price' => 'nullable|numeric',
                        'productDetails.' . $productDetailsIndex . '.sku' => 'required|string|unique:product_details,sku,' . $productDetail['id'] . '',
                        'photoDetails.' . $productDetailsIndex . '.photo_variant' => 'nullable|mimes:jpg,bmp,png'
                    ]);

                    if (count($productDetail) > 1) {
                        if (isset($productDetail['id'])) {
                            $product_detail = ProductDetail::findOrFail($productDetail['id']);
                        } else {
                            $product_detail = new ProductDetail;
                        }

                        $product_detail->product_id = $product->id;
                        $product_detail->name = $productDetail['name'];
                        $product_detail->sku = $productDetail['sku'];
                        $product_detail->price = $productDetail['price'];
                        $product_detail->discount_price = $productDetail['discount_price'];
                        $product_detail->weight = $request->weight;
                        $product_detail->width = $request->width;
                        $product_detail->length = $request->length;
                        $product_detail->height = $request->height;
                        $product_detail->status = isset($productDetail['status']) ? $productDetail['status'] : 0;

                        if ($request->hasFile('productDetails.' . $productDetailsIndex . '.photo_variant')) {
                            $filenameWithExt    = $request->file('productDetails.' . $productDetailsIndex . '.photo_variant')->getClientOriginalName();
                            $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                            $extension          = $request->file('productDetails.' . $productDetailsIndex . '.photo_variant')->getClientOriginalExtension();
                            $fileNameToStore    = Str::slug($request->product_slug) . '-' . str_replace(" ", "_", $productDetail['name']) . '-' . hexdec(uniqid()) . '.' . $extension;
                            $pathFile           = $request->file('productDetails.' . $productDetailsIndex . '.photo_variant')->storeAs('assets/product/variant', $fileNameToStore, 'public');

                            // Add value
                            $product_detail->image = $pathFile;
                        }

                        $product_detail->save();
                    }

                    $productDetailsIndex++;
                }
            } catch (\Exception $e) {
                $item = Product::findOrFail($product->id);

                // if (!$item->delete()) {
                //     return redirect()->back()->withErrors(['product' => 'Failed to delete product!']);
                // }

                return redirect()->back()->withErrors(['product' => $e->getMessage()]);
            }
        }

        return to_route('admin.product.index')->with('success', 'Update Data Success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
