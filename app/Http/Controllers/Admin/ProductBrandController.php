<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use DataTables;
use App\Models\Brand;

class ProductBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $data = Brand::select('id', 'image', 'name', 'slug')->get();
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
                ->addColumn('image', function ($row) {
                    $image_url = Storage::disk('local')->url($row->image);
                    $html = '
                    <img src=' . $image_url . '/>
                    ';
                    return $html;
                })
                ->addColumn('action', function ($row) {
                    $btn = '
                    <a class="me-3" href="' . route('admin.brand.edit', $row->id) . '">
                        <img src=' . asset("template/img/icons/edit.svg") . ' alt="img" />
                    </a>
                    <a onclick="deleteData(' . $row->id . ')" class="me-3 confirm-text">
                        <img src=' . asset("template/img/icons/delete.svg") . ' alt="img" />
                    </a>
                    ';
                    return $btn;
                })
                ->rawColumns(['checkbox', 'image', 'action'])
                ->make(true);
        }

        return view('pages.admin.product.brand.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.product.brand.add');
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
            'image' => 'required|mimes:jpg,bmp,png',
            'name' => 'required|string|max:255',
            'slug' => 'required|unique:brands'
        ]);

        $brand = new Brand;


        $brand->name = $request->name;
        $brand->slug = $request->slug;

        if ($request->hasFile('image')) {
            $filenameWithExt    = $request->file('image')->getClientOriginalName();
            $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension          = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore    = $filename . '_' . time() . '.' . $extension;
            $pathFile           = $request->file('image')->storeAs('public', $fileNameToStore);

            // Add value
            $brand->image = $pathFile;
        }

        $brand->save();

        return to_route('admin.brand.index')->with('success', 'Input Data Success!');
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
        $item = Brand::findOrFail($id);

        return view('pages.admin.product.brand.edit', [
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
            'image' => 'required|mimes:jpg,bmp,png',
            'name' => 'required|string|max:255',
            'slug' => 'required|unique:brands,slug,' . $id . ''
        ]);

        $brand = Brand::findOrFail($id);

        $brand->name = $request->name;
        $brand->slug = $request->slug;

        if ($request->hasFile('image')) {
            $filenameWithExt    = $request->file('image')->getClientOriginalName();
            $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension          = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore    = $filename . '_' . time() . '.' . $extension;
            $pathFile           = $request->file('image')->storeAs('public', $fileNameToStore);

            // Add value
            $brand->image = $pathFile;
        }

        $brand->save();

        return to_route('admin.brand.index')->with('success', 'Update Data Success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Brand::findOrFail($id);

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
