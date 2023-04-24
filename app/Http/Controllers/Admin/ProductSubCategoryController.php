<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

use DataTables;
use App\Models\ProductSubcategory;

class ProductSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $data = ProductSubcategory::select('id', 'product_category_id', 'name', 'slug')->get();
            return DataTables::of($data)->addIndexColumn()
                ->editColumn('category', function ($item) {
                    $category = $item->category->name;
                    return $category;
                })
                ->addColumn('checkbox', function ($row) {
                    $html = '
                    <label class="checkboxs">
                        <input type="checkbox" />
                        <span class="checkmarks"></span>
                    </label>
                    ';
                    return $html;
                })
                ->addColumn('action', function ($row) {
                    $btn = '
                    <a class="me-3" href="' . route('admin.subcategory.edit', $row->id) . '">
                        <img src=' . asset("template/img/icons/edit.svg") . ' alt="img" />
                    </a>
                    <a onclick="deleteData(' . $row->id . ')" class="me-3 confirm-text">
                        <img src=' . asset("template/img/icons/delete.svg") . ' alt="img" />
                    </a>
                    ';
                    return $btn;
                })
                ->rawColumns(['checkbox', 'action'])
                ->make(true);
        }

        return view('pages.admin.product.subcategory.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ProductCategory::orderBy('name', 'ASC')->get();
        return view('pages.admin.product.subcategory.add', [
            'categories' => $categories
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
            'product_category_id' => 'required|numeric|exists:product_subcategories,id',
            'name' => 'required|string|max:255',
            'slug' => 'required|unique:product_subcategories'
        ]);

        $subcategory = new ProductSubcategory;

        $subcategory->product_category_id = $request->product_category_id;
        $subcategory->name = $request->name;
        $subcategory->slug = $request->slug;

        $subcategory->save();

        return to_route('admin.subcategory.index')->with('success', 'Input Data Success!');
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
        $categories = ProductCategory::orderBy('name', 'ASC')->get();
        $item = ProductSubcategory::findOrFail($id);

        return view('pages.admin.product.subcategory.edit', [
            'categories' => $categories,
            'item'  => $item
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
            'product_category_id' => 'required|numeric|exists:product_subcategories,id',
            'name' => 'required|string|max:255',
            'slug' => 'required|unique:product_subcategories,slug,' . $id . ''
        ]);

        $subcategory = ProductSubcategory::findOrFail($id);

        $subcategory->product_category_id = $request->product_category_id;
        $subcategory->name = $request->name;
        $subcategory->slug = $request->slug;

        $subcategory->save();

        return to_route('admin.subcategory.index')->with('success', 'Update Data Success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = ProductSubcategory::findOrFail($id);

        if (!$item->delete()) {
            return response()->json([
                'success' => false,
                'message' => 'Hapus Data Error',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Hapus Data Berhasil',
        ], 200);
    }
}
