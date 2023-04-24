<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Brand;
use Illuminate\Http\Request;

use DataTables;
use App\Models\BrandType;

class ProductBrandTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $data = BrandType::select('id', 'brand_id', 'name', 'slug')->get();
            return DataTables::of($data)->addIndexColumn()
                ->editColumn('brand', function ($item) {
                    $brand = $item->brand->name;
                    return $brand;
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
                    <a class="me-3" href="' . route('admin.brandtype.edit', $row->id) . '">
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

        return view('pages.admin.product.brandtype.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::orderBy('name', 'ASC')->get();
        return view('pages.admin.product.brandtype.add', [
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
            'brand_id' => 'required|numeric|exists:brands,id',
            'name' => 'required|string|max:255',
            'slug' => 'required|unique:brand_types'
        ]);

        $brandtype = new BrandType;

        $brandtype->brand_id = $request->brand_id;
        $brandtype->name = $request->name;
        $brandtype->slug = $request->slug;

        $brandtype->save();

        return to_route('admin.brandtype.index')->with('success', 'Input Data Success!');
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
        $brands = Brand::orderBy('name', 'ASC')->get();
        $item = BrandType::findOrFail($id);

        return view('pages.admin.product.brandtype.edit', [
            'brands' => $brands,
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
            'brand_id' => 'required|numeric|exists:brand_types,id',
            'name' => 'required|string|max:255',
            'slug' => 'required|unique:brand_types,slug,' . $id . ''
        ]);

        $brandtype = BrandType::findOrFail($id);

        $brandtype->brand_id = $request->brand_id;
        $brandtype->name = $request->name;
        $brandtype->slug = $request->slug;

        $brandtype->save();

        return to_route('admin.brandtype.index')->with('success', 'Update Data Success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = BrandType::findOrFail($id);

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
