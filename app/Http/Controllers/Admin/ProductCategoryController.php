<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DataTables;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $data = ProductCategory::select('id', 'name', 'slug')->get();
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
                ->addColumn('action', function ($row) {
                    $btn = '
                    <a class="me-3" href="' . route('admin.category.edit', $row->id) . '">
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

        return view('pages.admin.product.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.product.category.add');
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
            'name' => 'required|string|max:255',
            'slug' => 'required|unique:product_categories'
        ]);

        $category = new ProductCategory;

        $category->name = $request->name;
        $category->slug = $request->slug;

        $category->save();

        return to_route('admin.category.index')->with('success', 'Input Data Success!');
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
        $item = ProductCategory::findOrFail($id);

        return view('pages.admin.product.category.edit', [
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
            'name' => 'required|string|max:255',
            'slug' => 'required|unique:product_categories,slug,' . $id . ''
        ]);

        $category = ProductCategory::findOrFail($id);

        $category->name = $request->name;
        $category->slug = $request->slug;

        $category->save();

        return to_route('admin.category.index')->with('success', 'Update Data Success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = ProductCategory::findOrFail($id);

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
